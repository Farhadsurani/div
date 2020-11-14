<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Models\User;
use App\Models\UserAssign;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;

/** All Paypal Details class **/

use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class PaymentController extends Controller
{
    private $_api_context;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function index()
    {
        return view('web.payment');
    }

    public function check(Request $request)
    {

        //if user is logged in redirect to paypal
                $user = Auth::user();
                if ($user){

                   return $this->payWithpaypal($request);
                }
                //  if user does not exist, redirect to register user
                else {
                    if (isset($request->chapter_id)){
                        $type = 1;
                        $var = $request->chapter_id;
                    } else{
                        $type = 0;
                        $var = $request->course_id;
                    }
                    return view('web.registeruser')->with([
                        'type'            => $type,
                        'var'             => $var
                    ]);
                }
    }

    public function payWithpaypal(Request $request)
    {
        //
//        $user = Auth::id();
//        dd($user);
        
        $price = $request->amount;

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        if (isset($request->chapter_id)){
            $type = 1;
            $var = $request->chapter_id;
        } else{
            $type = 0;
            $var = $request->course_id;
        }

        $item_1->setName($var)/** item name **/
        ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($price)
            ->setDescription($type);

        /** unit price **/

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($price);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status'))/** Specify return URL **/
        ->setCancelUrl(URL::to('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));


        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return Redirect::to('/');

            } else {

                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::to('/');

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            /** redirect to paypal **/
            return Redirect::away($redirect_url);

        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::to('/');

    }

    public function getPaymentStatus()
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

//        dd(Input::get());

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {

            \Session::put('error', 'Payment failed');
            return Redirect::to('/');

        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

//        dd($result->payer->payer_info->email);

        if ($result->getState() == 'approved') {

            $name = $result->payer->payer_info->first_name . " " . $result->payer->payer_info->last_name;
            $email = $result->payer->payer_info->email;
            $pwd = Hash::make($name);
            $subject = "Password for your new Account";

            $auth_user = Auth::id();

            if (!isset($auth_user)){

                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => Hash::make($pwd)
                ]);

                UserDetail::create([
                    'user_id' => $user->id,
                    'first_name' => $result->payer->payer_info->first_name,
                    'last_name' => $result->payer->payer_info->last_name,
                    'is_verified' => 1,
                    'is_paid' => 1
                ]);

                Mail::send('email.success', ['name' => $name, 'pwd' => $pwd],
                    function ($mail) use ($email, $name, $subject) {
                        $mail->from(getenv('MAIL_USERNAME'), getenv('APP_NAME'));
                        $mail->to($email, $name);
                        $mail->subject($subject);
                    });

                foreach ($result->transactions as $link){
                    $var = [];

                    if ($link->item_list->items[0]->description == Subscription::CHAPTER){
                        dd($link->item_list->items[0]);
                        $var['type'] = Subscription::CHAPTER;
                        $var['assign'] = $link->item_list->items[0]->name;
                    }
                    elseif ($link->item_list->items[0]->description == Subscription::COURSE){

                        $var['type'] = Subscription::COURSE;
                        $var['assign'] = $link->item_list->items[0]->name;
                    }
                }

                $input = [];
                $input['user_id'] = $user->id;
                $input['type'] = $var['type'];
                $input['assign'] = $var['assign'];
                DB::table('user_assign')->insert($input);


                $output = [];
                $output['user_id'] = $user->id;
                $output['payid'] = $payment_id;

                DB::table('transactions')->insert($output);

                \Session::put('success', 'Payment success');
                Auth::login($user);
                return Redirect::to('/profile');
            }
            elseif (isset($auth_user)){

                foreach ($result->transactions as $link){
                    $var = [];
                    if ($link->item_list->items[0]->description == Subscription::CHAPTER){
                        $var['type'] = Subscription::CHAPTER;
                        $var['assign'] = $link->item_list->items[0]->name;
                    }
                    elseif ($link->item_list->items[0]->description == Subscription::COURSE){
                        $var['type'] = Subscription::COURSE;
                        $var['assign'] = $link->item_list->items[0]->name;
                    }
                }

                $input = [];
                $input['is_paid'] = 1;
                UserDetail::where('user_id', $auth_user)->update($input);

                $input = [];
                $input['user_id'] = $auth_user->id;
                $input['type'] =$var['type'] ;
                $input['assign'] = $var['assign'];

                DB::table('user_assign')->insert($input);


                $output = [];
                $output['user_id'] = $auth_user->id;
                $output['payid'] = $payment_id;

                DB::table('transactions')->insert($output);

                \Session::put('success', 'Payment success');
                return Redirect::to('/profile');
            }

            \Session::put('success', 'Payment success');
            return Redirect::to('/loginuser');
        }

        \Session::put('error', 'Payment failed');
        return Redirect::to('/');

    }

}
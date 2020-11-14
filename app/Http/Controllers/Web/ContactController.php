<?php

namespace App\Http\Controllers\Web;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\ContactUsDataTable;
use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\CreateContactUsRequest;
use App\Http\Requests\Admin\UpdateContactUsRequest;
use App\Repositories\Admin\ContactUsRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\PageRepository;
use App\Repositories\Admin\QueriesRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Laracasts\Flash\Flash;

/**
 * Class ContactUsController
 * @package App\Http\Controllers\Web
 */
class ContactController extends Controller
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    private $pageRepository;

    private $queriesRepository;

    public function __construct(PageRepository $pageRepo, QueriesRepository $queriesRepo)
    {
//        $this->middleware('auth');
        $this->pageRepository = $pageRepo;
        $this->queriesRepository = $queriesRepo;
    }

    /**
     * Display a listing of the ContactUs.
     *
     * @param ContactUsDataTable $contactUsDataTable
     * @return Response
     */
    public function index()
    {
        $contact = $this->pageRepository->all();
//        $user = Auth::user();
        return view('web.contact')->with([
            'contact' => $contact]);

    }

    public function news(Request $request){
        if (empty($request)) {
            Flash::error('Invalid data!');
            return redirect(route('profile'));
        }

        DB::table('newsletter')->insert(['email' => $request->email]);
        return redirect(route('contact'));
    }

    /**
     * Show the form for creating a new ContactUs.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return view('admin.contactus.create');
    }

    /**
     * Store a newly created ContactUs in storage.
     *
     * @param CreateContactUsRequest $request
     *
     * @return Response
     */
    public function store(\Illuminate\Http\Request $request)
    {
        if (empty($request)) {
            Flash::error('Invalid data!');
            return redirect(route('profile'));
        }
        $this->queriesRepository->saveRecord($request);
        $subject = "Contact Form";
        $email ='farhad.surani@gmail.com';
        $name ='Website';
        Mail::send('email.contact', ['name'=> $name],
            function($mail) use ($email, $subject, $name){
                $mail->from(getenv('FROM_EMAIL_ADDRESS'));
                $mail->to('justinbrown331@gmail.com', $name);
                $mail->subject($subject);
            });

        Flash::success('Message sent successfully.');
        return redirect(route('profile'));
    }

    /**
     * Display the specified ContactUs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contactUs = $this->contactUsRepository->findWithoutFail($id);
        if (empty($contactUs)) {
            Flash::error('Contact Us not found');
            return redirect(route('admin.contactus.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $contactUs);
        return view('admin.contactus.show')->with('contactUs', $contactUs);
    }

    /**
     * Show the form for editing the specified ContactUs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contactUs = $this->contactUsRepository->findWithoutFail($id);
        if (empty($contactUs)) {
            Flash::error('Contact Us not found');
            return redirect(route('admin.contactus.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $contactUs);
        return view('admin.contactus.edit')->with('contactUs', $contactUs);
    }

    /**
     * Update the specified ContactUs in storage.
     *
     * @param int $id
     * @param UpdateContactUsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactUsRequest $request)
    {
        $contactUs = $this->contactUsRepository->findWithoutFail($id);
        if (empty($contactUs)) {
            Flash::error('Contact Us not found');
            return redirect(route('admin.contactus.index'));
        }

        $contactUs = $this->contactUsRepository->updateRecord($request, $id);

        Flash::success('Contact Us updated successfully.');
        return redirect(route('admin.contactus.index'));
    }

    /**
     * Remove the specified ContactUs from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contactUs = $this->contactUsRepository->findWithoutFail($id);
        if (empty($contactUs)) {
            Flash::error('Contact Us not found');
            return redirect(route('admin.contactus.index'));
        }

        $this->contactUsRepository->deleteRecord($id);

        Flash::success('Contact Us deleted successfully.');
        return redirect(route('admin.contactus.index'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\SocialAccount;
use App\Models\User;
use App\Models\UserDetail;
use App\Repositories\Admin\UserRepository;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    //
    private $userRepository;
    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

        } catch (\Exception $e) {
            return redirect('/login');
        }
        // only allow people with @company.com to login
//        if(explode("@", $user->email)[1] !== 'company.com'){
//            dd('ss');
//            return redirect()->to('/');
//        }
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
        } else {
            $newUser = [];
            $newUser['name'] = $user->name;
            $newUser['email'] = $user->email;
            $newUser['password'] = rand(1, 1000000);
            $users = User::create($newUser);
            $detail = [];
            $detail['user_id'] = $users->id;
            $detail['image'] = $user->avatar;
            UserDetail::create($detail);
            $social = [];
            $social['user_id'] = $users->id;
            $social['client_id'] = $user->id;
            $social['platform'] = 'google';
            SocialAccount::create($social);
            $this->userRepository->attachRole($users->id, Role::ROLE_USER);
            auth()->login($users, true);

        }
//        return 'Thanks';
        return redirect()->to('/home');
    }
}

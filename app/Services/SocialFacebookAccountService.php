<?php
namespace App\Services;
use App\Models\Role;
use App\Models\SocialAccount;
use App\Models\User;
use App\Repositories\Admin\UserRepository;
use Laravel\Socialite\Contracts\User as ProviderUser;
class SocialFacebookAccountService
{
    private $userRepository;
    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = SocialAccount::wherePlatform('facebook')
            ->whereClientId($providerUser->getId())
            ->first();
        if ($account) {
            return $account->user;
        } else {
            $account = new SocialAccount([
                'client_id' => $providerUser->getId(),
                'platform' => 'facebook'
            ]);
            $user = User::whereEmail($providerUser->getEmail())->first();
            if (!$user) {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'password' => md5(rand(1,10000)),
                ]);
            }
            $account->user()->associate($user);
            $account->save();
            $this->userRepository->attachRole($user->id, Role::ROLE_USER);
            return $user;
        }
    }
}
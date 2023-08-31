<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    public function callback($provider)
    {
        try {
            $usr = Socialite::driver('google')->user();
            $finduser = User::where('email', $usr->getEmail())->first();

            if ($finduser) {
                Auth::login($finduser);
            } else {
                $newUser = new User();
                $newUser->name = $usr->getName();
                $newUser->email = $usr->getEmail();
                $newUser->password = bcrypt('Ohfilipu1');
                $newUser->updateTimestamps();
                $newUser->save();

                Auth::login($newUser);
            }
            return redirect(route('home'));
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
}

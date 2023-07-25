<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Socialite;

use Illuminate\Http\Request;
use App\Models\SSreg;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
// use Laravel\Socialite\Facades\Socialite;
// use vendor\laravel\socialite\src\Facades\Socialite;



class LoginController extends Controller
{
    
      // Google login
      public function redirectToGoogle()
      {
          return Socialite::driver('google')->redirect();
      }
  
      // Google callback
      public function handleGoogleCallback()
      {
          $user = Socialite::driver('google')->user();
  
          $this->_registerOrLoginUser($user);
  
          // Return home after login
          return redirect()->route('/');
      }

      // facebook login 
      public function redirectToFacebook()
      {
          return Socialite::driver('facebook')->redirect();
      }
    // facebook callback 

      public function handleFacebookCallback()
      {
          $user = Socialite::driver('facebook')->user();
      }

         // Github login
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    // Github callback
    public function handleGithubCallback()
    {
        $user = Socialite::driver('github')->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        return redirect()->route('/');
    }

    protected function _registerOrLoginUser($data)
    {
        $user = SSreg::where('E_mail', '=', $data->email)->first();
        if (!$user) {
            $user = new SSreg();
            $user->Student_ID = $data->Student_ID;
            $user->First_Name = $data->First_Name;
            $user->E_mail = $data->E_mail;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->Mobile_No = $data->Mobile_No;
            $user->Password = $data->Password;

            $user->save();
        }

        Auth::login($user);
    }
}


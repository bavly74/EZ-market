<?php
namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Validator;

//use Socialite;

class SocialController extends Controller
{

    //login with facebook
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook()
    {
        try {

            $user = Socialite::driver('facebook')->stateless()->user();
            $existingUser = User::where('email', $user->email)->first();

            if($existingUser){
                Auth::login($existingUser);
                return redirect('/');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_ID' => $user->facebook_ID,
                    // 'password' => encrypt('admin@123')
                ]);

                Auth::login($createUser);
                return redirect('/');
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }



    //login with google

    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function loginWithGoogle()
    {
        try {

            $user = Socialite::driver('google')->stateless()->user();
            $existingUser = User::where('email', $user->email)->first();
            if($existingUser){
                Auth::login($existingUser);
                return redirect('/');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->google_ID,
                    // 'password' => encrypt('admin@123')
                ]);

                Auth::login($createUser);
                return redirect('/');
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

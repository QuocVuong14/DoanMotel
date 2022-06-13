<?php

namespace App\Http\Controllers;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;
use App\Models\UserDetail;
use Illuminate\Support\Facades\File;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;



class SocialController extends Controller
{
    
    //
    public function facebookRedirect(){
        return Socialite::driver('facebook')  ->redirect();
    }

    // public function getSocialAvatar($file, $path){
    //     $fileContents = file_get_contents($file);
    //     return File::put(public_path($path = '/storage') . $path . 'imaged' . ".jpg", $fileContents);
    // }

    public function loginWithFacebook() {
        date_default_timezone_set('Australia/Melbourne');
        $time = date('m/d/Y h:i:s a', time()); 
        $user = Socialite::driver('facebook') -> stateless() ->user();

        $isUser = User::where('fb_id', $user->id )->first();
        if ($isUser) {
            Auth::login($isUser, $remember = true);

            Auth::loginUsingId($isUser -> id);
            Session::put('idUser', $isUser -> id);

            return redirect('/home');
        } else {
            $createUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'email_verified_at' => $time,
                'fb_id' => $user->id,
                'password' => ''
            ]);
            $createUser -> roles() -> syncWithoutDetaching([2]);

            // $fileContents = file_get_contents($user->getAvatar());
            // File::put(public_path() . '/storage/avatar/' . $createUser->id . ".jpg", $fileContents);
            // public_path('/storage/avatar/' . $createUser->id . ".jpg");
            // $picture = "/avatar/". $createUser -> id . ".jpg";

            $file = Cloudinary::upload($user->getAvatar(),[
                'folder' => "Avatar", 'use_filename' => true, 'public_id' => $createUser -> id,
            ]);

            $picture = $file -> getSecurePath();

            UserDetail::Create(
                [
                    'user_id' => $createUser -> id,
                    'birthday' => '',
                    'phone' => '',
                    'avatar' => $picture,
                ]
            );

            Auth::login($createUser);
            return redirect('/home');
        }
    }

    //Google================================================================
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    //==Callback
    public function googleCallback()
    {
        date_default_timezone_set('Australia/Melbourne');
        $time = date('m/d/Y h:i:s a', time()); 
        $user = Socialite::driver('google')-> stateless() -> user();

        $isUser = User::where('email_id', $user->id )->first();

        if ($isUser) {

            Auth::login($isUser, $remember = true);
            Session::put('idUser', $isUser -> id);

            return redirect('/home');

        }else{
            $createUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'email_verified_at' => $time,
                'email_id' => $user->id,
                'password' => ''
            ]);
            $createUser -> roles() -> syncWithoutDetaching([2]);
            $picture = $user -> avatar;

            UserDetail::Create(
                [
                    'user_id' => $createUser -> id,
                    'birthday' => '',
                    'phone' => '',
                    'avatar' => $picture,
                ]
            );
        }

        Auth::login($createUser);

        return redirect('/home');

    
    }


    















}
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Http;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Sentinel;
use Illuminate\Support\Facades\Session;

 use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;





class LoginController extends Controller
{
    protected function validator($data){
        return Validator::make($data,[
            'email' => 'required|email|max:255',
            'password' => 'required|min:0',
        ]);

    }

    //================================================================
    public function login(Request $request){

        if($request->isMethod('POST')){

            $validator      = $this->validator($request->all());
            $email          = $request->input('email');
            $password       = $request->input('password');

            if($validator -> fails()){
                return Redirect::back()->withErrors(['Không được để trống !!!']);
            }
            ////////////////

            $credentials = request(['email', 'password']);
            if (Auth::attempt($credentials)) {
                $userid = auth()->user()->id;
            }

            $user = User::where('email', $request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                return Redirect::back()->withErrors(['Email hoặc mật khẩu sai !!!']);
            }

            $role = ($user -> roles)[0] -> id;

            session(['role' => $role]);

            //tao token sau khi dang nhap thanh cong
            $token = $user->createToken('my-app-token')->plainTextToken; 

            if(isset($user->id)){
                Session::put('idUser', $user -> id);
                if(Auth::user()->roles -> first() -> id == 1 || Auth::user()->roles -> first() -> id == 2){
                    return redirect('/post');
                }
                return redirect('/home');
            }
            return Redirect::back()->withErrors(['Email hoặc mật khẩu sai !!!']);
        }
        return view('admin.login.index');
    }


    //================================

    ////////////////============
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken(); 
        session() -> pull('user');
        return redirect('/login');
    }





}

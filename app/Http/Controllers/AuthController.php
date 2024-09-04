<?php

namespace App\Http\Controllers;

use App\Mail\ForgetMailer;
use Illuminate\Http\Request;
use App\Models\RegisterUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Session;

class AuthController extends Controller
{
    public function signin(){
        return view('auth.login.index');
    }

    public function signup(){
        return view('auth.signup.index');
    }

    public function reguser(Request $request){
        $data = $request->all();
        $register = new RegisterUsers;
        $register->name = $data['name'];
        $register->mobile = $data['mobile'];
        $register->email = $data['email'];
        $register->password = Hash::make($data['password']);
        $register->save();
        Session::put('email',$data['email']);
        Session::flash('msg', 'Account Created Successfully');
        Mail::to($data['email'])->send(new ForgetMailer($register));
        return redirect()->route('home');

    }

    public function checkuser(Request $request){
        $email = $request['email'];
        $password = $request['password'];
        $register = RegisterUsers::where('email',$email)->first();
        if($register){
            $userpassword = Hash::check($password,$register->password);
            if($userpassword){
                Session::flash('msg','Login Successful!');
                Session::put('email',$email);
                return redirect()->route('home');
            } else{
                Session::flash('error','Password Incorrect!');
                return redirect()->route('login');
            }
        } else{
            Session::flash('error','Email Invalid');
            return redirect()->route('login');
        }
    }

    public function signout(){
        Session::put('email',null);
        return redirect()->route('login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration; 
class SignUpSignInController extends Controller
{
    public function SignIn()
    {
        return view('frontend.signin');
    }
    public function SignUp()
    {
        return view('frontend.signup');
    }
    public function Dashboard()
    {
        return view('frontend.dashboard');
    }
    public function landing()
    {
        return view('frontend.landing');
    }
    // public function Reg( Request $request)
    // {
    //     //dd(print_r($request->all()));
    //     $request->validate([
    //         'name'=>'required',
    //         'email' => 'required|Email',
    //         'password' => 'required',
    //         'cpassword' => 'required',
            
    //     ]);
    //     // print_r($request->all());
    //     $reg1= new Registration;
    //     $reg1->name=$request['name'];
        
    //     $reg1->email=$request['email'];
    //     $reg1->password=md5($request['password']);
    //     $reg1->save();
    //     // return redirect()->route('signIn');

        
    // }
}

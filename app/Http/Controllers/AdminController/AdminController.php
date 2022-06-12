<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function formlogin(){
                //  dd(bcrypt('123456789'));

        return view('back-end.sign-in');

    }
    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=> $request->password])){
            return redirect()->to('admin/home');
        }
        // if(Auth::check()){
        //     return redirect()->to('admin/home');
        // }
        else
        {
            session()->put('message','Email hoặc mật khẩu không đúng !');
            return redirect()->to('admin');
        } 
    }
    public function logout(){
        Auth::logout();
        return redirect()->to('admin');

    }
}

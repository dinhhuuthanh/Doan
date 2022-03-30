<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function LoginForm(){
        return view('auth.login');
    }
    public function postLogin(Request $request){
        $request->validate(
            [
                'email' => [
                    "required",
                    "email",
                    function($attribute, $value, $fail ){
                        if(!strpos($value, ".com")){
                            $fail("$attribute phải là duoid .com ");
                        }
                    }
                ],
                'password' => "required"
            ],
            [
                'email.required' => "Hãy nhập ngay email vào để đặng nhập",
                'email.email' => "Nhập sai định dạng email rồi ",
                'passwod.required' => "Ai cho để trống mật khẩu"
            ]
            );
        if (Auth::attempt(['email' => $request->email, 'password'=> $request->password])){
            return redirect(route('product.index'));
        } else{
            return redirect()->back()->with('msg', 'Email/password incorrect');
        }
    }
}

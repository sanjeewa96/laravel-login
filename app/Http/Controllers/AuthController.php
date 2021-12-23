<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {   
        return view('login');
    }

    public function registration()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5',
        ]);

        $user= new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $store=$user->save();
        if($store)
        {
            return view('dashboard');
        }
        else{
            return redirect()->back();
        }

    }

    public function loginUser(Request $request)
    {
        $request->validate([            
            'email'=>'required|email',
            'password'=>'required|min:5',
        ]);

        $user=User::Where('email','=',$request->email)->first();
        if($user)
        {
            if($request->password==$user->password)
            {
                return view('dashboard');
            }
            else
            return redirect()->back();
        }
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member;
use Hash;
class MemberController extends Controller
{
    function register() {
        return view('register');
    }

    function login() {
        return view('login');
    }

    function logout(Request $request) {
        $request->session()->flush();
        return redirect('/login');
    }

    function loginValidate(Request $request) {
        // $request->password;
        $member = Member::where('account',$request->account)->get()->first();
        // echo $member->password;

        if( !is_null($member)){
            if (Hash::check($request->password, $member->password)) {
                $request->session()->put('username',$member->account);
                $request->session()->put('id',$member->id);
                return redirect('/message');
            } else {
                return redirect('/login')->with('error','Wrong password!');
            }
        } else {
            return redirect('/login')->with('error','Wrong account or password!');
        }
        
    }

    function postRegister(Request $request) {
        $member = new Member();
        $account = Member::where('account',$request->account)->get()->first();
        if (is_null($account)){
            $member->account = $request->account;
            $member->password = Hash::make($request->password);
            $member->save();
            $request->session()->put('username',$member->account);
            
            return redirect('/message');
        } else {
            return redirect('/register')->with('error','Duplicate account! Please change another one');
        }
        
    }
}

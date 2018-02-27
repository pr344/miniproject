<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    function home(){
       return view("pages.index");
    }
    function about(){
        return view("pages.about");
    }
    function contact(){
        return view('pages.contact');
    }
    function signin(){
        return view('pages.signin');
    }
    function signout(){
        return view('pages.signout');
    }
    function register(){
        return view('pages.signup');
    }
    function messages(){
        return view('pages.messages');
    }

    function store(Request $request) {
        $email = $request->email;
        return redirect()->route('thanks',['email' => $email ]);
    }

    function thanks($email, Request $request) {
        return view('pages.thankyou')->with(compact('email'));
    }

}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{

    public function __construct(){
        $this->middleware('guest')->except('destroy');
    }

    public function create(){
        return view('sessions.create');
    }

    public function store(){

        $args = ['email' => request('email'),'password' =>  request('password')];

        if(!auth()->attempt($args) ){
            return back()->withErrors([
                'message'   => 'Check your Email or password and try again'
            ]);
        }

        return redirect()->home();
    }

    public function destroy(){
        auth()->logout();

        return redirect()->home();
    }
}

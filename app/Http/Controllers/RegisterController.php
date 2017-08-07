<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('registration.create');
    }

    public function store(){
        //Validate the form
        $this->validate(request(),array(
            'name'  => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ));

        //Create user
        $user = User::create([
            'name'  => request('name'),
            'email'  => request('email'),
            'password'  =>  Hash::make(request('password'))
        ]);

        //Sign them in
        auth()->login($user);

        // Redirect somewhere
        return redirect()->home();
    }
}

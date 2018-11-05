<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
   
    public function __construct(){
        $this->middleware('guest', ['except' => 'destroy']);
    }

    
    public function login(){
        return view('sessions.login');
    }
    
    public function store(){
        
        if(! auth()->attempt(request(['email', ('password')]))){
            return back();
        }

        return redirect('/');
    }

    public function destroy(){
        
        auth()->logout(); //session destroy LOG OUT

        return redirect('/');
    }
}

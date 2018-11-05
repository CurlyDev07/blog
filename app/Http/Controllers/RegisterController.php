<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
class RegisterController extends Controller
{
    
    public function __construct(){
        $this->middleware('guest');
    }

    public function create(){

        return view('registration.create');
    }

    public function store(){
        // Validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);


        // Create the user
        // $user = User::create(request(['name', 'email', bcrypt('password')]));
        $user = new User;
        $user->name = request()->name;
        $user->email = request()->email;
        $user->password = bcrypt(request()->password);
        $user->save();
        
        // Sign them in
        auth()->login($user);

        // redirect
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create (){

        return view('auth.register'); 
    }

    public function store (Request $request){

        $validatedData = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',

        ]);

        $user = user:: create(request(['name', 'email','password']));
        auth()->login($user);
        return redirect()->to('/');

    }
}
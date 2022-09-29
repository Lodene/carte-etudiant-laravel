<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller{
    public function create(){
        return view('register.create');
    }

    public function store(){
        // var_dump(request()->all());
        $attributes = request()->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|max:255|min:7',
            're_password' => 'required|max:255',
        ]);

        if ($attributes['re_password'] == $attributes['password']){
            $attributes['password'] = bcrypt($attributes['password']);
            $user = User::create($attributes);
            auth()->login($user);
            return redirect('/')->with('succes', 'Votre compte à bien été crée')->with($attributes);
        } else {
            return redirect('/register');
        }

        

    }

    public function setPasswordAttributes($password){
        $this->attribute['password'] = bcrypt($password);
    }
}

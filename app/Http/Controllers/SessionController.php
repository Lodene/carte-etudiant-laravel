<?php

namespace App\Http\Controllers;
use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroy(){
        auth()->logout();

        return redirect('/')->with('succes', 'Goodbye !');
    }

    public function login(){
        $attribute = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);  

        if (auth()->attempt($attribute)) {
            session_start();
            return redirect('/')->with('succes', 'Vous êtes connecté');
        } else {
            return back()
                // ->withInput()
                ->withErrors([
                'email' => 'pas bon'
            ]);
        }
    }

    public function create(){
        return view('register.login');
    }

    public function compte(){
        $usr = User::all();
        return view('compte', [
            'usrs' => $usr
        ]);
    }
}

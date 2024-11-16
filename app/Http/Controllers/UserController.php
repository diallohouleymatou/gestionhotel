<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function register(Request $request){
        if($request->isMethod('post')){
            $requestValid = $request->validate([
                "prenom"=>"min:4|required",
                "nom"=>"min:2|required",
                "email"=>"email|required",
                "password"=>"min:6|required",

            ]);
            $user = new User();
            $user->prenom = $requestValid['prenom'];
            $user->nom = $requestValid['nom'];
            $user->email = $requestValid['email'];
            $user->password = Hash::make($requestValid['password']);
            $user->role = "user";
            $user->save();
            return redirect ('/login');

        }
     
        return view('register');
    }

    public function login(Request $request )
    {
        if($request->isMethod('post')){
            $requestValid = $request->validate([
                "email"=>"email|required",
                "password"=>"min:6|required",
            ]);
            if(Auth::attempt(['email'=>$requestValid['email'],'password'=>$requestValid['password']])){
                return redirect('/acceuil');
            }
        }
        return view('login');
    }
}

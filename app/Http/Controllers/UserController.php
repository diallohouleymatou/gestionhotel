<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Chambre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            $user->role = "admin";
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

    public function acceuil(){
        if(Auth::user()->isAdmin()){
            return redirect('/dashboard');
        }
        return view('acceuil');
    }

    public function dashboard(){
        if(!Auth::user()->isAdmin()){
            return redirect('/acceuil');
        }
        $users = User::all();
        $chambres = Chambre::all();
        $dispo = $chambres[0]->estDisponible('2024-10-02', '2024-11-02');
        if($dispo){
            $disponibilite = "disponible";
        }else{
            $disponibilite = "non disponible";
        }

        return view('dashboard',compact("chambres","users","disponibilite"));
    }

    public function logout(Request $request){
        if ($request->isMethod('POST')){
            Auth::logout();
            return redirect('/login');
        }
    }


}
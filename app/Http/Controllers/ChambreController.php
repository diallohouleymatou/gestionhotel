<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use Illuminate\Http\Request;

class ChambreController extends Controller
{
    //
    public function ajouter(Request $request){
        
        if($request->isMethod('post')){
            $requestValid = $request->validate([
            "code"=>"min:1|required",
            "prix"=>"min:0|required",
            "type"=>"required",
            "description"=>"min:5|required",
            ]);
            $cu = Chambre::where('code',$requestValid['code']);
            if(!$cu){
            $chambre = new Chambre();
            $chambre->code = $requestValid['code'];
            $chambre->prix = $requestValid['prix'];
            $chambre->type = $requestValid['type'];
            $chambre->description = $requestValid['description'];
            $chambre->save();
            return redirect ('/dashboard');
            }else{
                return redirect('/ajouter');
            }


        }
        return view('ajouter');
    }

    public function supprimer(Chambre $chambre){

     $chambre->delete();
     return redirect('/dashboard');

    }

    public function modifier(Chambre $chambre,Request $request){
        if($request->isMethod('POST')){
            $requestValid = $request->validate([
                "code"=>"min:1|required",
                "prix"=>"min:0|required",
                "type"=>"required",
                "description"=>"min:5|required",
                ]);
                $cu = Chambre::where('code',$requestValid['code']);
                    if(!$cu){
                    $chambre->code = $requestValid['code'];
                    $chambre->prix = $requestValid['prix'];
                    $chambre->type = $requestValid['type'];
                    $chambre->description = $requestValid['description'];
                    $chambre->save();
                    return redirect ('/dashboard');
                    }
                    

                }
                return view('modifier',compact('chambre'));
     
    }

    
}

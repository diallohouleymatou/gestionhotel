<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    //
    protected $fillable = [
        "code",
        "prix",
        "description",
        "type",
    ];

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }

    public function estDisponible($dateDebut, $dateFin){
        if($dateDebut >= $dateFin){
            return false;
        }
        $reservations = $this->reservations();//toutes les reservations de cette instance chambre
        foreach($reservations as $reservation){
            if(
                (($dateDebut < $reservation->date_debut && $dateFin < $reservation->date_debut) ||
                ($dateDebut > $reservation->date_fin && $dateFin >$reservation->date_fin))){}else{
                    return false;
                }
        }
        return true;
    }
}
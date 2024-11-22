<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['chambre_id', 'user_id', 'date_debut', 'date_fin'];

    

    public function chambre(){
        return $this->belongsTo(chambre::class);
    }

    public function user(){
        return $this->belongsTo(user::class);
    }
}
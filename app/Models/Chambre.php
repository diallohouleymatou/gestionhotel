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
}

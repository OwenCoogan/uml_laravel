<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContratToVehicule extends Model
{
    public function contrat(){
        return $this->belongsTo(Contrat::class , 'id_contrat');
    }

    public function vehicule(){
        return $this->belongsTo(Vehicule::class , 'id_vehicule');
    }

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointsControleToVehicule extends Model
{
    public function controle(){
        return $this->belongsTo(Contrat::class , 'id_controle');
    }

    public function vehicule(){
        return $this->belongsTo(Vehicule::class , 'id_vehicule');
    }
    use HasFactory;
}

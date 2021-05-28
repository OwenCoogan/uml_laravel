<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $primaryKey = 'id_contrat';

    public function vehicule(){
        return $this->belongsTo(Vehicule::class , 'id_vehicule');
    }

    public function employe(){
        return $this->belongsTo(Employe::class , 'id_employe');
    }
    public function client(){
        return $this->belongsTo(Client::class , 'id_client');
    }

    use HasFactory;
}

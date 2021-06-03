<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointControle extends Model
{
    protected $primaryKey = 'id_controle';
    public function employe(){
        return $this->belongsTo(Employe::class , 'id_employe');
    }

    public function vehicule(){
        return $this->belongsTo(Vehicule::class , 'id_vehicule');
    }

    use HasFactory;
}

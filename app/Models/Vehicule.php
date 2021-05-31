<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $primaryKey = 'id_vehicule';
    public function pointControle(){
        return $this->belongsTo(PointControle::class , 'id_controle');
    }
    use HasFactory;
}

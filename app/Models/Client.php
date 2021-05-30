<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{   
    protected $primaryKey = 'id_client';

    public function historique(){
        return $this->belongsTo(Historique::class , 'id_historique');
    }

    use HasFactory;
}

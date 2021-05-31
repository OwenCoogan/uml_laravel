<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    protected $primaryKey = 'id_historique';

    public function contrat(){
        return $this->belongsTo(Contrat::class , 'id_contrat');
    }

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;
    protected $table = 'chauffeurs'; 

    protected $fillable = ['nom','prenom','experience','numero_permi','date_emission','date_expiration','etat','categorie','matricule' ];

}

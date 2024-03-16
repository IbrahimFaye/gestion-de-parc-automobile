<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $table = 'voitures'; 

    protected $fillable = ['matricule','station','description','km_defaut','date_achat','prix_location','etat','photo' ];

}

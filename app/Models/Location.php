<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $table = 'locations'; 

    protected $fillable = ['date_location','heure_debut','heure_fin','lieu_depart','lieu_ariver','client_id','voiture_id','chauffeur_id' ];

    
}

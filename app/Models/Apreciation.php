<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apreciation extends Model
{
    use HasFactory;
    protected $table = 'apreciations'; 

    protected $fillable = ['apreciation','commentaire','client_id','location_id','chauffeur_id'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;
    protected $table = 'contrats'; 

    protected $fillable = ['numero_contrat','debut_contrat','fin_contrat','type_contrat','salaire','chauffeur_id' ];

}

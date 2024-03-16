<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;

class GestionVoitureController extends Controller
{
    public function ajoutVoiture()
    {
        return view('/voiture/ajout_voiture');
    }
    public function listeVoiture()
    {
        $voitures=Voiture::all();
        return view('/voiture/liste_voiture', compact('voitures'));
    }
        public function store(Request $request)
        {
        
    // Récupère toutes les données du formulaire
    $data = $request->all();

    // Crée un nouvel objet Candidat en utilisant les données du formulaire
    $voitures = Voiture::create($data);
    
    echo '<script type="text/javascript">
    alert(" enregistrement avec succès");
    window.location.href="'.route("liste-voiture").'";
    </script>';
    exit(1);
        }
}

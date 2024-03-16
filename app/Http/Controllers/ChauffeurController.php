<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chauffeur;

class ChauffeurController extends Controller
{
    public function ajoutChauffeur(){

        return view('/chauffeur/ajout_chauffeur');
    }

    public function listeChauffeur(){
        $chauffeurs=Chauffeur::all();
        return view('/chauffeur/liste_chauffeur',compact('chauffeurs'));
    }
    
    public function store(Request $request)
      {
        $data = $request->all();

        // Crée un nouvel objet Candidat en utilisant les données du formulaire
        $chauffeur = Chauffeur::create($data);
        
        echo '<script type="text/javascript">
        alert("enregistrement avec succes");
        window.location.href="'.route("liste-chauffeur").'";
        </script>';
       exit(1);
    }
}

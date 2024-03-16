<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contrat;
use App\Models\Chauffeur;

class ContratController extends Controller
{
    public function ajoutContrat(){
        $chauffeurs=Chauffeur::all();
        return view('/contrat/enreg_contrat',compact('chauffeurs'));
    }
    
    public function listeContrat(){
        $contrats=Contrat::all();
        $chauffeurs=Chauffeur::all();
        return view('/contrat/liste_contrat',compact('contrats','chauffeurs'));
    }

    public function store(Request $request)
    {
    
        // Récupère toutes les données du formulaire
        $data = $request->all();

        // Crée un nouvel objet Candidat en utilisant les données du formulaire
        $contrats = Contrat::create($data);

        echo '<script type="text/javascript">
        alert(" enregistrement effectuer avec succès");
        window.location.href="'.route("liste-contrat").'";
        </script>';
        exit(1);
    }
}

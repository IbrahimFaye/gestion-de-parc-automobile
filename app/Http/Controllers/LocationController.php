<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Voiture;
use App\Models\Location;
use DateTime;

class LocationController extends Controller
{
    public function commander(){
        return view('/location/location');
    }
    
    public function ajout($id)
    {
        $voitures=Voiture::find($id);
        $vehicule=Voiture::all();
        return view('location/location',compact('voitures','vehicule'));
    }
    public function store(Request $request){

        $data=$request->all();

        $voitur=Voiture::where('id',$data['voiture_id'])->first();//recuperer la voiture
        $fraisUnitaire=$voitur->prix_location;    
        $heureDebut = new DateTime($data['heure_debut']);
        $heureFin = new DateTime($data['heure_fin']);
        $diff = $heureDebut->diff($heureFin);
        $difHeure = $diff->h;     
        $difMinutes = $diff->i;
        $fraisTotal = ($fraisUnitaire * $difHeure) + ($fraisUnitaire / 60 * $difMinutes);
        // Formater les frais totaux avec deux chiffres après la virgule

         $voitures=Voiture::find($data['voiture_id']);
         $heureD=$data['heure_debut'];
         $heureF=$data['heure_fin'];
         $date=$data['date_location'];

         $locationsV = Location::where('voiture_id', $data['voiture_id'])->get();
        $etat="disponible";
         foreach($locationsV as $location){
            if(($location->date_location == $data['date_location'] && ($location->heure_fin > $data['heure_debut'] && $location->heure_fin < $data['heure_fin'] ))
             ||($location->date_location == $data['date_location'] && ($location->heure_debut < $data['heure_fin'] && $location->heure_debut > $data['heure_debut'] )) ){
                 $etat="indisponible";
            }
         }
         if($etat=="disponible"){
              $locations = Location::create($data);
              return view('location/alertlocation',compact('voitures','etat','heureD','heureF','date','fraisTotal'));
         }else{
            return view('location/alertlocation',compact('voitures','etat','heureD','heureF','date','fraisTotal'));
         }
      
        // $lastLocation = Location::where('voiture_id', $data['voiture_id'])->latest('date_location')->first();
       
        // $voitures=Voiture::find($data['voiture_id']);
        // $vehicule=Voiture::all();
        // $heure=$data['heure_debut'];
        // $date=$data['date_location'];

        // if($lastLocation) {
        //     $dateLocationPlusRecente = $lastLocation->date_location;
        //     if($dateLocationPlusRecente <> $data['date_location'])
        //     {
        //          $locations = Location::create($data);
        //         $etat="disponible"; 
        //         return view('location/alertlocation',compact('voitures','vehicule','etat','heure','date','fraisTotal'));
               
        //     }elseif($dateLocationPlusRecente==$data['date_location'] && $lastLocation->heure_fin<$data['heure_debut'] )
        //     {
        //         $locations = Location::create($data);
        //         $etat="disponible";
        //         return view('location/alertlocation',compact('voitures','vehicule','etat','heure','date','fraisTotal'));

        //     }else
        //     {
        //         $etat="indisponible";
        //         return view('location/alertlocation',compact('voitures','vehicule','etat','heure','date','fraisTotal'));

        //     }
        // }else{
        //     $locations = Location::create($data);
        //     $etat="disponible";
            
        //     return view('location/alertlocation',compact('voitures','vehicule','etat','heure','date','fraisTotal'));

        // }

    }
   
        public function enregChauffeur(Request $request, $id)
        {
        
            $location = Location::find($id);
        
            $location->chauffeur_id = $request->input('chauffeur_id');
            
        
            $location->save();
            return redirect()->route('notif.ges');
        }
}

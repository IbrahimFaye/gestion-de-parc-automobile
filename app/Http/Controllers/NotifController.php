<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Apreciation;
use App\Models\Chauffeur;
use App\Models\Voiture;
use App\Models\User;
class NotifController extends Controller
{
    public function aprecier()
    {
        $locationsSansAppreciation = Location::where('locations.client_id', auth()->user()->id)
        ->whereDate('date_location', '<=', now()->toDateString())
        ->get();
        $apreciations= Apreciation::all();
        $locAaprecier=collect();
        foreach($locationsSansAppreciation as $loc)
        {   $etat="nonAprecier";
            foreach($apreciations as $aprecier)
            {
                if ($loc->id==$aprecier->location_id) {
                    $etat="Aprecier";
                }
            }
            if($etat=="nonAprecier"){
                $locAaprecier->push($loc);
            }
        }
        return view('notification/notif_client',compact('locAaprecier'));
    }
    public function store(Request $request){
        $data=$request->all();
        $apreciations = Apreciation::create($data);
       return redirect()->route('apreciation');
    }

    public function notifges()  {
        $listChauffeurDispo = new Collection();
        $locations = Location::whereNull('chauffeur_id')->get();
        $chauffeurs=Chauffeur::all();
        $locs = Location::where('date_location', '>', now()->toDateString())
        ->whereNotNull('chauffeur_id')
        ->get();  
        $voitures= Voiture::all();
        $newChauffeur= true; //un chauffeur qui n'a jamais eu de course      
        return view('notification/notif_ges',compact('voitures','locations','chauffeurs','locs','listChauffeurDispo','newChauffeur'));
    }

    public function voirAvis(){
        $chauffeurs=Chauffeur::all();
        $users=User::all();
        $apreciations=Apreciation::all();
        return view('notification/voir_avis',compact('apreciations','users','chauffeurs'));
    }
   
}

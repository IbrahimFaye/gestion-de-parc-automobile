@extends('layouts.app')
@section('content')
<div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                               
                             @foreach($locations as $location)
                                <!-- [ dashboard-ui-2 ] start -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card">
                                      <div class="card-block">
                                        @foreach($voitures as $voiture)
                                          @if($voiture->id==$location->voiture_id)
                                         <img class="img-fluid" style="width:100%;" src="{{asset('images/'.$voiture->photo)}}" alt="dashboard-user">
                                         @endif
                                         @endforeach
                                         <?php $listChauffeurDispo = collect(); // Initialisation ?>
                                            @foreach ($chauffeurs as $chauffeur)
                                                @if($locs->isEmpty())
                                                <?php  $listChauffeurDispo->push($chauffeur); ?>
                                                @else
                                                  <?php $newChauffeur=true; ?>
                                                    @foreach($locs as $loc)
                                                        @if($chauffeur->id==$loc->chauffeur_id)
                                                            @if($location->date_location <> $loc->date_location)
                                                            <?php  $listChauffeurDispo->push($chauffeur); ?>
                                                            @elseif(($location->date_location == $loc->date_location) and( $location->heure_debut > $loc->heure_fin))
                                                            <?php $listChauffeurDispo->push($chauffeur); ?>
                                                            @endif
                                                            <?php $newChauffeur=false; ?>  
                                                        @endif       
                                                    @endforeach
                                                    @if($newChauffeur==true)
                                                    <?php $listChauffeurDispo->push($chauffeur); ?>
                                                    @endif
                                                @endif
                                            @endforeach  
                               
                                            <h4 class="m-t-35">Date de la location : {{$location->date_location}} </h5>
                                            <h4 class="m-t-35">à partir de : {{$location->heure_debut}} </h5>
                                            <span class="text-muted"></span>
                                            <p class="border-top m-b-20 p-t-10 m-t-20"></p>
                                            <div class="row">
                                                <div class="col">
                                                <form method="POST" action="{{ route('choi-chauffeur', ['location' => $location->id]) }}">
                                                    @csrf    
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Chauffeurs Disponible </label>
                                                        <select class="form-control" name="chauffeur_id" >
                                                            @foreach($listChauffeurDispo as $chauffeurDispo )
                                                            <option value="{{ $chauffeurDispo->id }}">{{ $chauffeurDispo->prenom }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Valider</button>                                               
                                                </form>
                                                </div>
                                                <div class="col">
                                                    <span></span>
                                                </div>
                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ dashboard-ui-2 ] end -->
                             @endforeach
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
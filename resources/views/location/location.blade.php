@extends('layouts.app')
@section('content')
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-primary" role="alert">
                                        <h1 class="titre-deco">Enregistrer Votre Demande</h1>
                                     </div>
                                </div>
                                <!-- [ form-element ] start -->
                                <div class="col-sm-12">
                                  <div class="card">
                                     <div class="card-header">                                    <div class="card">
                                        <div class="card-block">
                                               <img class="img-fluid" style="width:100%;" src="{{asset('images/'.$voitures->photo)}}" alt="dashboard-user">
                                        </div>
                                    </div>
                                 </div>
                                        <div class="card-body">
                                            <hr>
                                            <div class="row">
                                              
                                                <div class="col-md-6">

                                                <form method="POST" action="{{ route('enreg.location') }}">
                                                @csrf                                                                   
                                                            <input type="hidden" name='voiture_id' value="{{  $voitures->id }}">
                                                            <input type="hidden" name='client_id' value="{{ Auth::id() }}">
                                                       
                                                        <div class="form-group">
                                                            <label >Lieu de dapart</label>
                                                            <input type="text" class="form-control" name="lieu_depart">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>lieu d'arriver</label>
                                                            <input type="text" class="form-control" name="lieu_ariver">
                                                        </div>
                                                       
                                                        <button type="submit" class="btn btn-primary">envoyer</button>
                                                        <button type="reset" class="btn btn-info">Effacer</button>

                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Date</label>
                                                            <input type="date" class="form-control" name="date_location">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Heure debut </label>
                                                            <input type="time" class="form-control" name="heure_debut">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Heure Fin </label>
                                                            <input type="time" class="form-control" name="heure_fin">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                         
                                        </div>
                                    </div>
                                   
                                </div>
                                <!-- [ form-element ] end -->
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
@endsection
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
                                        <h1 class="titre-deco">Apreciation de vos courses</h1>
                                     </div>
                                </div>
                                <!-- [ form-element ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5></h5>
                                        </div>
                                        @foreach($locAaprecier as $location)
                                        <div class="card-body">
                                            <h3 class="titre-deco">Coures du : {{$location->date_location}} </h3>
                                            <h5 class="titre-deco"> {{$location->heure_debut}}  à  </h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form method="POST" action="{{ route('avis.client') }}">
                                                    @csrf
                                                            <input type="hidden" name='location_id' value="{{ $location->id }}" >
                                                            <input type="hidden" name='chauffeur_id' value="{{ $location->chauffeur_id }}" >
                                                            <input type="hidden" name='client_id' value="{{ Auth::id() }}">

                                                        <div class="form-group">
                                                            <label>Commentaire </label>
                                                            <textarea name="commentaire" class="form-control"></textarea>
                                                        </div>
                                                </div>
                                                <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Apreciation</label>
                                                            <select class="form-control" name="apreciation" >
                                                                <option>Execellent</option>
                                                                <option>trés Bien </option>
                                                                <option>Bien</option>
                                                                <option>Médiocre</option>
                                                                <option>Trés Médiocre</option>
                                                            </select>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Envoyé</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
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
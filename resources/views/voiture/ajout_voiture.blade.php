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
                                        <h1 class="titre-deco">Ajouter de nouveaux véhicules</h1>
                                     </div>
                                </div>
                                <!-- [ form-element ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5></h5>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="titre-deco">Formulaire</h3>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                <form method="POST" action="{{ route('enreg.voiture') }}">
                                                @csrf       
       
                                                <div class="form-group">
                                                            <label >Matricule</label>
                                                            <input type="text" class="form-control"  name="matricule">
                                                        </div>
                                                        <div class="form-group">
                                                            <label >station</label>
                                                            <input type="text" class="form-control" name="station">
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Km par defaut</label>
                                                            <input type="number" class="form-control" name="km_defaut">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Photo</label>
                                                            <input type="file" class="form-control" name="photo">
                                                        </div>
                                                       
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="reset" class="btn btn-info">Effacer</button>

                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Date d'achat</label>
                                                            <input type="date" class="form-control" name="date_achat">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Prix location par heure</label>
                                                            <input type="number" class="form-control" name="prix_location">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">etat</label>
                                                            <select class="form-control" name="etat" >
                                                                <option>1</option>
                                                                <option>0</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea name="description" class="form-control"></textarea>
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
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
                                        <h1 class="titre-deco">Ajouter un Chauffeur</h1>
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
                                                    <form method="POST" action="{{ route('enreg.chauffeur') }}">
                                                    @csrf
                                                        <div class="form-group">
                                                            <label >Matricule</label>
                                                            <input type="text" class="form-control"  name="matricule">
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Nom</label>
                                                            <input type="text" class="form-control"  name="nom">
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Prenom</label>
                                                            <input type="text" class="form-control" name="prenom">
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Experience</label>
                                                            <input type="text" class="form-control" name="experience">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">etat</label>
                                                            <select class="form-control" name="etat" >
                                                                <option>1</option>
                                                                <option>0</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Numero Permi</label>
                                                            <input type="number" class="form-control" name="numero_permi">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Date Emission</label>
                                                            <input type="date" class="form-control" name="date_emission">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Date Expiration</label>
                                                            <input type="date" class="form-control" name="date_expiration">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Categorie</label>
                                                            <select class="form-control" name="categorie" >
                                                                <option></option>
                                                                <option>A</option>
                                                                <option>B</option>
                                                                <option>C</option>
                                                            </select>
                                                        </div>
                                                       
                                                        <button type="submit" class="btn btn-primary">Envoyé</button>
                                                        <button type="reset" class="btn btn-info">Effacer</button>

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
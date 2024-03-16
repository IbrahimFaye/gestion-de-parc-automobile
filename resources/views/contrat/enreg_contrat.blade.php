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
                                        <h1 class="titre-deco">Enregistrer un contrat</h1>
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
                                                <form method="POST" action="{{route('enreg.contrat')}}">
                                                @csrf       
                                                <div class="form-group">
                                                         <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Type de contrat</label>
                                                            <select class="form-control" name="type_contrat" >
                                                                <option></option>
                                                                <option>CDD</option>
                                                                <option>CDI</option>
                                                            </select>
                                                        </div>
                                                            <label >Numero contrat</label>
                                                            <input type="number" class="form-control"  name="numero_contrat">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Chauffeur</label>
                                                            <select class="form-control" name="chauffeur_id" >
                                                            @foreach ($chauffeurs as $chauffeur)
                                                                <option value="{{ $chauffeur->id }}">{{ $chauffeur->prenom }}</option>
                                                            @endforeach 
                                                            </select>
                                                        </div>
                                                       
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="reset" class="btn btn-info">Effacer</button>

                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Salaire</label>
                                                            <input type="number" class="form-control" name="salaire" step="0.01" min="0.01" max="999999.99">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Debut Contrat</label>
                                                            <input type="date" class="form-control" name="debut_contrat">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Fin contrat</label>
                                                            <input type="date" class="form-control" name="fin_contrat">
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
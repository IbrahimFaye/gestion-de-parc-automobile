@extends('layouts.app')
@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-header">
            <h3>Liste des Contrats </h3>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                        <tr>
                           
                            <th>n° contrat</th>
                            <th>chauffeur</th>
                            <th>debut</th>
                            <th>Fin</th>
                            <th>Type</th>
                            <th>Salaire</th>
                            <th>action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contrats as $contrat)
                        <tr>
                            <th scope="row">{{ $contrat->numero_contrat}}</th>
                            @foreach($chauffeurs as $chauffeur)
                                @if($contrat->chauffeur_id==$chauffeur->id)
                                <td>{{ $chauffeur->Prenom}}</td>
                                @endif
                            @endforeach
                           
                            <td>{{ $contrat->debut_contrat}}</td>
                            <td>{{ $contrat->fin_contrat}}</td>
                            <td>{{ $contrat->type_contrat}}</td>
                            <td>{{ $contrat->salaire}}</td>
                            
                            <td>
                            <a href=""
                            class="btn  btn-warning">Modifier</a>
                            <a href="" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
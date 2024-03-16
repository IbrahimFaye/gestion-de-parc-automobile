@extends('layouts.app')
@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-header">
            <h5>Dark Table</h5>
            <span class="d-block m-t-5">use class <code>table-dark</code> inside table element</span>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Experience</th>
                            <th>N° permis</th>
                            <th>Date Emission</th>
                            <th>Date Expiration</th>
                            <th>Categorie</th>
                            <th>disponiblité</th>
                            <th>action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($chauffeurs as $chauffeur)
                        <tr>
                            <th scope="row">{{ $chauffeur->id}}</th>
                            <td>{{ $chauffeur->nom}}</td>
                            <td>{{ $chauffeur->prenom}}</td>
                            <td>{{ $chauffeur->experience}}</td>
                            <td>{{ $chauffeur->numero_permi}}</td>
                            <td>{{ $chauffeur->date_emission}}</td>
                            <td>{{ $chauffeur->date_expiration}}</td>
                            <td>{{ $chauffeur->categorie}}</td>
                            @if( $chauffeur->etat==1)
                            <td>disponible</td>
                            @else
                            <td>indisponible</td>
                            @endif
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
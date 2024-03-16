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
                                <div class="col-sm-12">
                                    <div class="alert alert-primary" role="alert">
                                        <p></p>
                                    </div>
                                </div>
                               
                                @foreach ($apreciations as $apreciation)
                                <!-- [ dashboard-ui-2 ] start -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-block">
                                            @foreach($users as $user)
                                              @if($apreciation->client_id==$user->id)
                                            <h5 class="m-t-35">client : {{ $user->name }}</h5>
                                              @endif
                                            @endforeach
                                            @foreach($chauffeurs as $chauffeur)
                                              @if($apreciation->chauffeur_id==$chauffeur->id)
                                            <h5 class="m-t-35">Chauffeur : {{ $chauffeur->prenom }} {{$chauffeur->nom}}</h5>
                                              @endif
                                            @endforeach
                                            <span class="text-muted">Commentaire : {{ $apreciation->commentaire }}</span>
                                            <p class="border-top m-b-20 p-t-10 m-t-20"></p>
                                            <div class="row">
                                                <div class="col">
                                                    <h4>Apreciation</h4>
                                                    <p>{{ $apreciation->apreciation }} </p>
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
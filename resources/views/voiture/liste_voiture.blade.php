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
                               
                               
                                @foreach ($voitures as $voiture)
                                <!-- [ dashboard-ui-2 ] start -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card">
                                        <div class="card-block">
                                            <img class="img-fluid" style="width:100%;" src="{{asset('images/'.$voiture->photo)}}" alt="dashboard-user">
                                            <h5 class="m-t-35">matricule : {{ $voiture->matricule }}</h5>
                                            <span class="text-muted">{{ $voiture->description }}</span>
                                            <p class="border-top m-b-20 p-t-10 m-t-20"></p>
                                            <div class="row">
                                                <div class="col">
                                                    <p>Frais de location par heure</p>
                                                    <h5>{{ $voiture->prix_location }} FCFA</h5>
                                                    <span></span>
                                                </div>
                                                <div class="col">
                                                    <h5>{{ $voiture->date_achat }}</h5>
                                                    <span>Date Achat</span>
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
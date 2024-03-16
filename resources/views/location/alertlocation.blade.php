@extends('layouts.app')
@section('content')
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                            <div  class="alert alert-primary" role="alert">
                                <div id="Animate" class="titre-deco">
                                @if($etat=="indisponible")
                                <h2>Ce vehicule ne sera pas disponible le {{$date}} Entre {{ $heureD}} Et {{ $heureF}} </h2>
                                @else
                                <h2>votre de Demande a été bien enregistrer merci !!!</h2>
                                <div class="argin-left">
                                    <a href="{{ route('paiement.create', ['fraisTotal' => $fraisTotal]) }}"
                                        class="btn  btn-rounded btn-success"> Paiement </a>
                                </div>
                                @endif
                                
                            </div>
                            </div>
                                <!-- [ form-element ] start -->
                                <div class="col-sm-12">
                                  <div class="card">
                                     <div class="card-header">    
                                        <div class="card-block">
                                               <img class="img-fluid" style="width:100%;" src="{{asset('images/'.$voitures->photo)}}" alt="dashboard-user">
                                     </div>
                                    </div>
                                 </div>
                                        <div class="card-body">
                                            <hr>
                                            <div class="row">
                                            
                                               
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
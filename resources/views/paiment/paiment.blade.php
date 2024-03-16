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
                               <div class="col-md-6 mx-auto">
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="card">
                                                            <div class="card-block">
                                                                <img class="img-fluid" style="width:100%;" src="{{asset('images/paypal.jpg')}}" alt="dashboard-user">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="col-md-6">
                                                    
                                                <form method="POST" action="{{ route('paiement.process') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="amount">Montant :</label>
                                                        
                                                        <select class="form-control"  id="amount" name="amount" step="0.01" required>
                                                                <option value="{{ $fraisTotal }}">{{ ($fraisTotal)}} FCFA</option>
                                                        </select>
                                                    </div>
                                                    
                                                    
                                                        <button type="submit" class="btn btn-primary">Payer avec PayPal</button>
                                                
                                                </form>
                                                   
                                                </div>
                                              </div>
                                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
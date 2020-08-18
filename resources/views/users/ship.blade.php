@extends('layouts.app')

@section('content')


  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-sm-8 " style="text-align:center;">
                            <h4>Your Cart is empty  </h4>

                                    <a href="{{ url('/') }}"><h5> Add product to your cart</h5> </a> 
                                
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
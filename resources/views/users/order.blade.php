@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="width:100%; text-align:center"><h4>{{ __('View your order') }}</h4></div>

                <div class="card-body">
        
                    <h4> View your order</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>quantity</th>
                                <th>Price</th>
                                
                        </tr>
                        </thead>
                        @foreach($cart as $carts) 
                        <tbody>
                        <tr>
                            <td>{{$carts->name}}</td>
                            <td>{{$carts->qty}}</td>
                            <td>{{$carts->price}}</td>
                        </tr>
                        
                        </tbody>
                        @endforeach
                        <tr>
                            <th></th>
                            <th>Items: {{Cart::count()}}</th>
                                <th>Total: #{{Cart::total()}}</th>
                                
                        </tr>
                        </table>
                        
                        <div class="row justify-content-center">
                            <div class="col-sm-8">
                              <form method="POST" action="{{ route('pay') }}" 
                              accept-charset="UTF-8" class="form-horizontal" role="form">
                                    @csrf
                            <input type="hidden" name="email" value="{{$user->email}}"> {{-- required --}}
                                    <input type="hidden" name="orderID" value="345">
                            <input type="hidden" name="amount" value="{{Cart::total()}}"> {{-- required in kobo --}}
                            <input type="hidden" name="quantity" value="{{Cart::total()}}">
                                    <input type="hidden" name="currency" value="NGN">
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> 
                                    {{-- required --}}
                                    {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                      
                                    <p>
                                      <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                      <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                      </button>
                                    </p>
                                  </div>
                                </div>
                                  </form>
                                  
                             </div>
                        </div>
                </div>
            </div>
        </div>
       
    </div>
</div>

@endsection

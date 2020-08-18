@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"  style="width:100%; text-align:center"><h4>{{ __('Cart') }}</h4></div>

                <div class="card-body">
                    <h4> Cart item</h4>
                    @if(count($cart)>0)  
                    <div class="table-responsive-md">     
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>quantity</th>
                                    <th>Price</th>
                                    <th>Action</th>      
                            </tr>
                            </thead>
                            @foreach($cart as $carts) 
                            <tbody>
                            <tr>
                                <td>{{$carts->name}}</td>
                                <td>
                                    <form method="post" action="{{route('cart.update', $carts->rowId)}}">
                                        @csrf
                                        @method('PUT')
                                     <input type="text" value="{{$carts->qty}}" name="quantity">
                                    <button type="submit" class="btn btn-info">Ok</button>
                                    </form>
                                </td>
                                <td>{{$carts->price}}</td>
                                <td>
                                <form method="post" action="{{route('cart.destroy', $carts->rowId)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Delete') }}
                                    </button>
                                    </form>
                                <td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tr>
                                <th></th>
                                <th>Items: {{Cart::count()}}</th>
                                    <th>Total: #{{Cart::subtotal()}}</th>
                                    
                            </tr>
                        </table>
                    </div>
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="alert alert-danger" style="text-align:center;">
                                <a href="{{url('/')}}"> <h4>Continue Shopping</h4> <a>
                                  </div>
                        </div>
                        <div class="col-sm-6" style="margin-left:px;">
                            <div class="alert alert-danger" style="text-align:center;">
                                <a href="{{route('check.index')}}" > <h4>Checkout</h4> <a>
                                  </div>
                        </div>
                        </div>
                        @else
                        <div class="row justify-content-center">
                            <div class="col-sm-8 " style="text-align:center;">
                        <h3> Your cart is empty</h3>
                        <h4> Already have an accout <a href="{{url('/login')}}"> 
                            Login <a> to see your cart item</h4>
                        <div class="alert alert-danger" style="text-align:center;">
                        <a href="{{url('/')}}"> <h4>Start Shopping</h4> <a>
                          </div>
                        
                            </div>
                        </div>
                        @endif
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection
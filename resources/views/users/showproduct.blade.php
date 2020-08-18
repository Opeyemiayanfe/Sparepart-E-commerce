@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row" >
        
      <div class="col-sm-6" style="text-align:center; ">
        <img src="/storage/productsimage/{{$product->product_image}}" style="max-width:100%; height:auto;"> 
      </div>
      <div class="col-sm-4" style="text-align:center;">
      <h5>{{$product->name}}</h5>
      <hr>
      <h5><span>Price: #</span>{{$product->Price}}</h5>
      <hr>
      <h5><span>List price: #</span><s>{{$product->listprice}}</s></h5>
       <hr>
       <h4> Description </h4>
       <h5>{{$product->description}}</h5>
      
      <a href="{{route('cart.edit', $product->id)}}" class="btn btn-primary"> Add to Cart </a>
    </div>
    </div>
</div>
  
<hr>
@include('footer.footer')
@endsection
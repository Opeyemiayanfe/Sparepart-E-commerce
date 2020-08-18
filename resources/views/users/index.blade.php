@extends('layouts.app')

@section('content')

<<div class="container-fluid">
  <div class="row" >

      <div style="width:100%; text-align:center">
          <h3> Products Featured </h3>
      </div>
      
      @foreach($product as $products)
    <div class="col-sm-4" style="text-align:center; margin-top:10px;">
      
    <a href="/product/{{$products->name}}">  
      <img src="/storage/productsimage/{{$products->product_image}}" style="max-width:100%; height:200px;"> 
    </a>
    <h5>{{$products->name}}</h5>
    <h5><span>Price: #</span>{{$products->Price}}</h5>
    <h5><span>List price: #</span><s>{{$products->listprice}}</s></h5>
     
    </div>
    @endforeach

  </div>
</div>
<hr>
<div class="container fluid" style="margin-top:10px">
<h3>Cephas Group: One of the leading Online Shopping sites in Africa</h3>
<h5>This is an online shopping site where you can buy your phones, producttops, fans and television set. 
  Our customer satisfaction 
  is our priority, you can also pay online and have it delivered at your doorstep within twenty-four hours. 
  One year warranty on any product bought and free repair services for another six month are some of the 
  things that
  make us distinct from every other online shopping site. Visit us today and you won't regret. 
  For more details check our
  contact below. Thanks.
</h5>
</div>
@include('footer.footer')
@endsection
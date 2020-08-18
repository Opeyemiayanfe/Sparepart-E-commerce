@extends('admin.app')

@section('content')
<div class="container">
<div class="row justify-content-center" >
    @if(count($product)>0)
    @foreach($product as $products)
<div class="col-md-3" style="text-align:center; margin-top:10px">
    
    {{$products->category_name}}
    <img src="/storage/productsimage/{{$products->product_image}}" width="auto" height="200px">
    <div style="margin-top:10px; margin-left:60px">
    <form method="post" action="{{route('admin.destroy', $products->id)}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">
            {{ __('Delete') }}
        </button>
        </form>
    </div>
</div>
@endforeach
@else
<div class="alert" style="background-color:grey">
    <h4>No Product yet</h4>
  </div>
  @endif
</div>
</div>

@endsection
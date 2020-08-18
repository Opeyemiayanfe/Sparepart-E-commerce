@extends('admin.app')

@section('content')

<div class="alert" style="margin-top:10px; text-align:center; background-color:gray">
    <span style="font-weight: bold; font-size:19px; color:black">Add Product</span> 
  </div>

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="name" class="">
                                {{ __('Name') }}</label>

                            <div class="">
                                <input id="name" type="text" class="form-control @error('name') 
                                is-invalid @enderror" name="name" value="{{ old('name') }}" 
                                required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="">
                                {{ __('Description') }}</label>

                            <div class="">
                                <input id="description" type="text" class="form-control @error('description') 
                                is-invalid @enderror" name="description" value="{{ old('description') }}" 
                                required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="listprice" class="">
                                {{ __('List price') }}</label>

                            <div class="">
                                <input id="listprice" type="text" class="form-control @error('listprice') 
                                is-invalid @enderror" name="listprice" value="{{ old('listprice') }}" 
                                required autocomplete="listprice" autofocus>

                                @error('listprice')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price" class="">
                                {{ __('Price') }}</label>

                            <div class="">
                                <input id="price" type="text" class="form-control @error('price') 
                                is-invalid @enderror" name="price" value="{{ old('price') }}" 
                                required autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image" class="">
                                {{ __('image') }}</label>

                            <div class="">
                                <input id="image" type="file" class="form-control @error('image') 
                                is-invalid @enderror" name="image" value="{{ old('image') }}" 
                                required autocomplete="image" autofocus>

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="" style="margin-left: 15px;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
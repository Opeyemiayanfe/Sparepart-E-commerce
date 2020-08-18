@extends('layouts.app')

@section('content')


  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="width:100%; text-align:center; color:#1E90FF; ">
                <h5> <span style="font-weight:bold;">Supply shipping details </span></h5>
                </div>
                <div class="card-header">
                    
                    <h4>{{$user}}  {{$last}}</h4> 
                   
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('check.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="address" class="">
                                {{ __('Address') }}</label>

                            <div class="">
                                <input name="address" id="address" type="text" class="form-control @error('address') 
                            is-invalid @enderror" address="address" value="{{ old('address') }}"  
                                required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="">
                                {{ __('City') }}</label>

                            <div class="">
                                <input name="city"  id="city" type="text" class="form-control @error('city') 
                              
                                is-invalid @enderror" address="city" 
                                value="{{ old('city') }}" 
                                required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="state" class="">
                                {{ __('State') }}</label>

                            <div class="">
                                <input name="state"  id="state" type="text" class="form-control @error('state') 
                                is-invalid @enderror" address="state" value="{{ old('state') }}" 
                                required autocomplete="state" autofocus>

                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phonenumber" class="">
                                {{ __('Phone number') }}</label>

                            <div class="">
                                <input name="phonenumber"  id="phonenumber" type="text" class="form-control @error('phonenumber') 
                                is-invalid @enderror" address="phonenumber" value="{{ old('phonenumber') }}" 
                                required autocomplete="phonenumber" autofocus>

                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="">
                                {{ __('Email address') }}</label>

                            <div class="">
                                <input name="email" id="email" type="text" class="form-control @error('email') 
                                is-invalid @enderror" address="email" value="{{ old('email') }}" 
                                required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="" style="margin-left: 15px;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Proceed To payment') }}
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
@extends('admin.app')

@section('content')

<div class="alert" style="margin-top:10px; text-align:center; background-color:gray">
    <span style="font-weight: bold; font-size:19px; color:black">Create category</span> 
  </div>

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('category.store') }}">
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
                        
                        <div class="form-group row mb-0">
                            <div class="" style="margin-left: 15px;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <h4> Available Category</h4>
                    @if(count($cat)>0)       
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Categorie_id</th>
                                <th>Category_name</th>
                                <th>Delete<th>
                            </tr>
                            </thead>
                            @foreach($cat as $cats) 
                            <tbody>
                            <tr>
                            <td>{{$cats->id}}</td>
                                <td>{{$cats->name}}</td>
                                <td>
                                <form method="post" action="{{route('category.destroy', $cats->id)}}">
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
                        </table>
                        @else
                        <p> Category not available yet</p>
                        @endif
                </div>
            </div>
        </div>
       
    </div>
</div>

@endsection
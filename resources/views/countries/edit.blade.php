@extends('layout.scaffold')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mb-5">
            <a href="{{route('countries.index')}}" class="btn btn-primary float-right mb-2">Back to table</a>
        </div>
        @if(Session::has('error'))
        <div class="col-md-12">
            <div class="alert alert-danger">{{Session::get('error')}}</div>
        </div>
        @endif  
    </div>
    <div class="card">
        <div class="card-header">
            <h2 class="text-success">Edit Country</h2>
        </div>
        <div class="card-body">
            <form action="{{route('countries.update',$country->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="name">Name</label>
                        <input type="text" class="text-secondary form-control" name="name"value="{{$country->name}}">
                        <small class="text-danger">@error('name') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="code">Code</label>
                        <input type="text" class="text-secondary form-control" name="code" value="{{$country->code}}">
                        <small class="text-danger">@error('code') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-3">
                        <label for="population">Population</label>
                        <input type="text" class="text-secondary form-control" name="population" value="{{$country->population}}">
                        <small class="text-danger">@error('population') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-3">
                            <label for="country">Country</label>
                            <input type="file" class="form-control" style="border:3px groove blue;" name="country" value="{{old('country')}}">
                            <small class="text-danger">@error('country'){{$message}} @enderror</small>
                            @if(!empty($country->country))
                            <img src="{{asset('upload/country/'.$country->country)}}" class="img-thumbnail" style="height:100px; width:100px" alt="">
                            @endif
                        </div>
                    <div class="mt-3 col-md-12 mt-3">
                        <button type="submit" class="btn btn-success btn-block">UPDATE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
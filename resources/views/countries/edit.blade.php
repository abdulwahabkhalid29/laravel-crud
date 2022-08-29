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
            <form action="{{route('countries.update',$country->id)}}" method="POST">
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
                    <div class="mt-3 col-md-12 mt-3">
                        <button type="submit" class="btn btn-success btn-block">UPDATE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
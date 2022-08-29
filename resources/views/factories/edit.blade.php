@extends('layout.scaffold')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mb-5">
            <a href="{{route('factories.index')}}" class="btn btn-primary float-right mb-2">Back to table</a>
        </div>
        @if(Session::has('error'))
        <div class="col-md-12">
            <div class="alert alert-danger">{{Session::get('error')}}</div>
        </div>
        @endif  
    </div>
    <div class="card">
        <div class="card-header">
            <h2 class="text-success">Edit Factory</h2>
        </div>
        <div class="card-body">
            <form action="{{route('factories.update',$factory->id)}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="name">Name</label>
                        <input type="text" class="text-secondary form-control" name="name"value="{{$factory->name}}">
                        <small class="text-danger">@error('name') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="email">E-mail</label>
                        <input type="text" class="text-secondary form-control" name="email" value="{{$factory->email}}">
                        <small class="text-danger">@error('email') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="address">Address</label>
                        <input type="text" class="text-secondary form-control" name="address" value="{{$factory->address}}">
                        <small class="text-danger">@error('address') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="phone">Phone</label>
                        <input type="number" class="text-secondary form-control" name="phone" value="{{$factory->phone}}">
                        <small class="text-danger">@error('phone') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-3">
                        <button type="submit" class="btn btn-outline-success btn-block">Add New table</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
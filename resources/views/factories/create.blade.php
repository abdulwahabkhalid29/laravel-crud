@extends('layout.scaffold')
@section('content')
<div class="container mt-5">
    <div class="row mb-5">
        <div class="col-md-12">
            <a href="{{route('factories.index')}}" class="btn btn-info float-right">Back to table</a>
        </div>
        @if(Session::has('error'))
        <div class="col-md-12">
            <div class="alert alert-danger">{{Session::get('error')}}</div>
        </div>
        @endif
    </div>
    <div class="card">
        <div class="card-header">
            <h2 class="text-success">Add New Factory</h2>
        </div>
        <div class="card-body">
            <form action="{{route('factories.store')}}" method="POST" >
                @csrf
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="name">Name</label>
                        <input type="text" class="text-secondary form-control" name="name" value="{{old('name')}}">
                        <small class="text-danger">@error('name') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="email">E-mail</label>
                        <input type="text" class="text-secondary form-control" name="email" value="{{old('email')}}">
                        <small class="text-danger">@error('email') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="address">Address</label>
                        <input type="text" class="text-secondary form-control" name="address" value="{{old('address')}}">
                        <small class="text-danger">@error('address') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="phone">Phone</label>
                        <input type="number" class="text-secondary form-control" name="phone" value="{{old('phone')}}">
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
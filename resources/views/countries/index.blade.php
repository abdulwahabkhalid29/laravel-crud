@extends('layout.scaffold')
@section('content')
<div class="container mt-5">
<h1 class="text-danger">Country :</h1>
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('countries.create')}}"><button class="btn btn-info float-right mb-5">Add More Data</button></a>
        </div>
        @if(Session::has('success'))
        <div class="col-md-12">
            <div class="alert alert-success">{{Session::get('success')}}</div>
        </div>
        @endif
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Code</th>
                <th>Population</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($countries as $country)
            <tr>
                <td>{{($country->id)}}</td>
                <td>{{($country->name)}}</td>
                <td>{{($country->code)}}</td>
                <td>{{($country->population)}}</td>
                <td style="width:10%"><img class="rounded img-thumbnail" src="{{asset('upload/country/'.$country->country)}}" alt="" width="100%"></td>
                <td>
                    <a href="{{route('countries.edit' ,$country->id)}}"><img src="{{asset('assets/img/b_edit.png')}}" alt="b_edit"> Edit</a>
                    &nbsp;|&nbsp;
                    <a href="{{route('countries.delete' ,$country->id)}}"><img src="{{asset('assets/img/b_drop.png')}}" alt="b_drop"> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection                     
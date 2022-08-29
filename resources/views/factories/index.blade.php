@extends('layout.scaffold')
@section('content')
<div class="container mt-5">
    <h1 class="text-danger">Factory :</h1>
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('factories.create')}}"><button class="btn btn-info float-right mb-5">Add More Data</button></a>
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
                <th>E-mail</th>
                <th>Address</th>
                <th>phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($factories as $factory)
            <tr>
                <td>{{($factory->id)}}</td>
                <td>{{($factory->name)}}</td>
                <td>{{($factory->email)}}</td>
                <td>{{($factory->address)}}</td>
                <td>{{($factory->phone)}}</td>
                <td>
                    <a href="{{route('factories.edit' ,$factory->id)}}"><img src="{{asset('assets/img/b_edit.png')}}" alt="b_edit"> Edit</a>
                    &nbsp;|&nbsp;
                    <a href="{{route('factories.delete' ,$factory->id)}}"><img src="{{asset('assets/img/b_drop.png')}}" alt="b_drop"> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@extends('layout.scaffold')
@section('content')
<div class="container mt-5">
<h1 class="text-danger">Worker :</h1>
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('workers.create')}}"><button class="btn btn-info float-right mb-5">Add More Data</button></a>
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
                <th>Phone</th>
                <th>Address</th>
                <th>email</th>
                <th>Factory</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach($workers as $worker)
            <tr>
                <td>{{($worker->id)}}</td>
                <td>{{($worker->name)}}</td>
                <td>{{($worker->phone)}}</td>
                <td>{{($worker->address)}}</td>
                <td>{{($worker->email)}}</td>
                <td>{{($worker->factory)}}</td>
                <td>{{($worker->country)}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
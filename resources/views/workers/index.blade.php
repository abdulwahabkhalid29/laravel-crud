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
                <th>email</th>
                <th>Factory</th>
                <th>Country</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($workers as $worker)
            <tr>
                <td>{{($worker->id)}}</td>
                <td>{{($worker->name)}}</td>
                <td>{{($worker->phone)}}</td>
                <td>{{($worker->email)}}</td>
                <td>{{($worker->factory)}}</td>
                <td>{{($worker->country)}}</td>
                 <td>
                    <a href="{{route('workers.edit' ,$worker->id)}}"><img src="{{asset('assets/img/b_edit.png')}}" alt="b_edit"> Edit</a>
                    &nbsp;|&nbsp;
                    <a href="{{route('workers.delete' ,$worker->id)}}"><img src="{{asset('assets/img/b_drop.png')}}" alt="b_drop"> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
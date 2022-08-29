<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Factory;
use App\Models\Country;

class WorkerController extends Controller
{
    public function index(){
        $workers = Worker::get();
        return view('workers.index' , compact('workers'));
    }
    public function create(){
        $countries = Country::get();
        $factories = Factory::get();
        $workers = Worker::get();
        return view('workers.create' , compact('countries','factories','workers'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:191|unique:workers,name',
            'phone' => 'required|max:191|:workers,phone',
            'address' => 'required|max:191|unique:workers,address',
            'email' => 'required|max:191|unique:workers,email',
            'factory' => 'required|max:191|:workers,factory',
            'country' => 'required|max:191|:workers,country',
        ]);
        $store = Worker::create([
            'name' =>$request->name,
            'phone' =>$request->phone,
            'address' =>$request->address,
            'email' =>$request->email,
            'factory' =>$request->factory,
            'country' =>$request->country,
        ]);
        if(!empty($store->id)){
            return redirect()->route('workers.index')->with('Success' , 'Worker Added');
        }
        else{
            return redirect()->route('workers.index')->with('error' , 'something went wrong');
        }
    }
}

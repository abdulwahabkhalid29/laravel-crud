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
            'email' => 'required|max:191|unique:workers,email',
            'factory' => 'required|max:191|:workers,factory',
            'country' => 'required|max:191|:workers,country',
        ]);
        $store = Worker::create([
            'name' =>$request->name,
            'phone' =>$request->phone,
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
    public function edit($id){
        $countries = Country::get();
        $factories = Factory::get();
        $worker = Worker::where('id',$id)->first();
        return view('workers.edit',compact('worker','countries','factories'));
    }

    public function update(Request $request, $id){
        $request->validate([ 
        'name' => 'required|max:191|:workers,name'.$id,
        'phone' => 'required|max:191|:workers,phone'.$id,
        'email' => 'required|max:191|:workers,email'.$id,
        'factory' => 'required|max:191|:workers,factory'.$id,
        'country' => 'required|max:191|:workers,country'.$id,
    ]);
   
    $update = worker::where('id',$id)->update([
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'factory' => $request->factory,
        'country' => $request->country,
    ]);
    if($update > 0){
        return redirect()->route('workers.index')->with('success','worker update');
    }
    return redirect()->route('workers.index')->with('error','something went wrong');  
    }
    public function delete($id){
        $workers = Worker::where('id',$id)->first();
        if(!empty($workers)){
         $workers->delete();
         return redirect()->route('workers.index')->with('success','Worker delete');
        }
        return redirect()->route('workers.index')->with('error','record not found');
     }
}

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
            'factory_id' => 'required|max:191|:workers,factory_id',
            'country_id' => 'required|max:191|:workers,country_id',
        ]);
        $store = Worker::create([
            'name' =>$request->name,
            'phone' =>$request->phone,
            'email' =>$request->email,
            'factory_id' =>$request->factory_id,
            'country_id' =>$request->country_id,
        ]);
        if(!empty($store->id)){
            return redirect()->route('workers.index')->with('success','worker Added');
        }
        else{
            return redirect()->route('workers.create')->with('error','Something Went Wrong');
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
        'name' => 'required|max:191|unique:workers,name,'.$id,
        'phone' => 'required|max:191|unique:workers,phone,'.$id,
        'email' => 'required|max:191|unique:workers,email,'.$id,
        'factory_id' => 'required|max:191|:workers,factory_id,'.$id,
        'country_id' => 'required|max:191|:workers,country_id,'.$id,
    ]);
   
    $update = worker::where('id',$id)->update([
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'factory_id' => $request->factory_id,
        'country_id' => $request->country_id,
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

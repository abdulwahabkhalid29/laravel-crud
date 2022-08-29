<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factory;

class FactoryController extends Controller
{
    public function index(){
        $factories = Factory::get();
        return view('factories.index' , compact('factories'));
    }
    public function create(){
        return view('factories.create');
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:191|unique:factories,name',
            'email' => 'required|max:191|unique:factories,email',
            'address' => 'required|max:191|unique:factories,address',
            'phone' => 'required|max:11|:factories,phone',
        ]);
        $store = Factory::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        

        if(!empty($store->id)){
            return redirect()->route('factories.index')->with('success','factory Added');
        }
        else{
            return redirect()->route('factories.create')->with('error','Something Went Wrong');
        }

    }

    public function edit($id){
        $factory = Factory::where('id',$id)->first();
        return view('factories.edit',compact('factory'));
    }

    public function update(Request $request, $id){
        $request->validate([ 
        'name' => 'required|max:191|:factories,name'.$id,
        'email' => 'required|max:191|:factories,email'.$id,
        'address' => 'required|max:191|:factories,address'.$id,
        'phone' => 'required|max:11|:factories,phone'.$id,
    ]);
    $update = Factory::where('id',$id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'phone' => $request->phone,
    ]);
    if($update > 0){
        return redirect()->route('factories.index')->with('success','factory update');
    }
    return redirect()->route('factories.index')->with('error','something went wrong');  
    }
    public function delete($id){
        $factories = Factory::where('id',$id)->first();
        if(!empty($factories)){
         $factories->delete();
         return redirect()->route('factories.index')->with('success','factory delete');
        }
        return redirect()->route('factories.index')->with('error','record not found');
     }
}

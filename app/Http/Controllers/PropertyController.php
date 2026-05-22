<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category; 

class PropertyController extends Controller
{
    public function index(){
    $properties=Property::with('category')->orderBy('created_at' ,'desc')->paginate(8);
    return view ('properties.index', ["properties" => $properties]);

    }

    public function show($id){
        $properties= Property::with('category')->findOrFail($id);
        return view ('properties.show', ["property" => $properties]);
    }

    public function create(){
    $categories=Category::all();
    return view('properties.create' , ['categories' => $categories]);
    }
public function store(Request $request){
    $validated = $request->validate([
        'name' => 'required|string|min:7',
        'price' => 'required|integer|max:1000000',
        'bio' => 'required|string|min:20',
        'category_id' => 'required|exists:categories,id'
    ]);

    Property::create([
        'property_name' => $validated['name'],
        'price' => $validated['price'],
        'details' => $validated['bio'],
        'category_id' => $validated['category_id'],
    ]);

    return redirect()->route('properties.index')->with('success', 'Property added successfully!');
}

public function destroy($id){
    $property= Property::findOrFail($id);
    $property->delete();

    return redirect()->route('properties.index')->with('success', 'Property removed successfully!');

}

}

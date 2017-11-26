<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Name;

class NameController extends Controller
{
    public function index() 
    {
        
        return Name::all();
    }
    
    public function show(Name $name)
    {
        
        return $name
    }
    
    public function store(Request $request)
    {
        $this->validate($request, Name::validator());
        $name = Name::create($request->all());

        return response()->json($name, 201);
    }
    
    public function update(Request $request, Name $name)
    {
        $this->validate($request, Name::validator());
        $name->update($request->all());

        return response()->json($name, 200);
    }
    
    public function delete(Name $name)
    {
        $name->delete();

        return response()->json(null, 204);
    }
}

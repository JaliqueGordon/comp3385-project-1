<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;


class PropertyController extends Controller

{

    public function create()
    {
        return view('properties.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'property_title' => 'required|string',
            'description' => 'nullable|string',
            'no_of_rooms' => 'required|integer',
            'no_of_bathrooms' => 'required|integer',
            'price' => 'required|numeric',
            'property_type' => 'required|string',
            'location' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg, png, jpg, gif|max:2048',
        ]);


        if ($request ->hasFile('photo')) {
            $filename = time() . '_' . $request -> file('photo')->getClientOriginalName();
            $request -> file('photo')->storeAs('photos', $fileName);
            $validatedData['photo'] = $fileName;
        }

        Property::create($validatedData);

        return redirect('/properties')->with('success', 'Property added successfully!');
    }

    public function index()
    {
        $properties = Property::all();
        return view('properties', ['properties' => $properties]);

    }

        public function show($property_id)
        {
            $property = Property::findOrFail($property_id);
            return view('properties.show', ['property' => $property]);
        }
        }
    



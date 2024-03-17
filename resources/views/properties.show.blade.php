

@extends('layouts.app')

@section('content')
    <h1>Property Details</h1>
    <p>Title: {{$property->property_title}}</p>
    <p>Description: {{$property->description}}</p>
    <p>Rooms: {{$property->num_of_rooms}}</p>
    <p>Bathrooms: {{property->num_of_bathrooms}}</p>
    <p>Price: {{property->price}}</p>
    <p>Type: {{property->property_type}}</p>
    <p>Location: {{property->location}}</p>
    <p>Photo: {{property->photo}}</p>



@endsection

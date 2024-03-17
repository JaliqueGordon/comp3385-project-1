
@extends('layouts.app')

@section('content')
    <h1 class="display-5 fw-bold text-body-emphasis">Properties</h1>
    @if ($properties->isEmpty())
        <p>No properties available to display.</p>
    @else
        <ul>
            @foreach($properties as $property)
            <li>{{$property->property_title}}</li>
        @endforeach
</ul>



    @endif
@endsection
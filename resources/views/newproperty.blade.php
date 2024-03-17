@extends('layouts.app')

@section('content')

    <div class = "container">
        <h1>Add New Property</h1>
        <form action = "/properties" method = "POST" enctype = "multipart/form-data">
            @csrf

            <div class = "form-group col-md-6">
                <label for = "property_title">Property Title</label>
                <input type = "text" class = "form-control" id = "title" name = "title" required>
            </div>

            <div class = "form-group">
                <label for = "description">Description</label>
                <textarea class = "form-control" id = "description" name = "description"></textarea>
            </div>
        <div class = "form-row">
            <div class = "form-group col-md-6">
                <label for = "no_of_rooms">No. of Bedrooms</label>
                <input type = "number" class = "form-control" id = "no_of_rooms" name = "no_of_rooms" required>

            </div>

            <div class = "form-group col-md-6">
                <label for = "no_of_bathrooms">No. of Bathrooms</label>
                <input type = "number" class = "form-control" id = "no_of_bathrooms" name = "no_of_bathrooms" requred>

            </div>
        </div>

            <div class = "form-group col-md-6">
                <label for = "price">Price</label>
                <input type = "number" class = "form-control" id = "price" name = "price" requred>

            </div>

            <div class = "form-group col-md-6">
                <label for = "property_type">Property Type:</label>
                <select class = "form-control" id = "property_type" name = "property_type" required>
                    <option value = "House">House</option>
                    <option value = "Apartment">Apartment</option>
                </select>
            </div>

            <div class = "form-group col-md-6">
                <label for = "location">Location</label>
                <input type = "text" class = "form-control" id = "location" name = "location" requred>

            </div>

            <div class = "form-group">
                <label for = "photo">Photo</label>
                <input type = "file" class = "form-control-file" id = "photo" name = "photo" requred>

            </div>

            <button type = "submit" class = "btn btn-primary">Add Property</button>
        </form>
    </div>
@endsection


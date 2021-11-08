@extends('layouts.main')

@section('title', 'Edit Comic')

@section('content')
    
    <section class="col-12">
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row gy-3 mb-3">

                <div class="col-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{$comic->title}}">
                    <div class="form-text">Insert the Title of the Comic</div>
                </div>

                <div class="col-4">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" id="series" name="series" class="form-control" value="{{$comic->series}}">
                    <div class="form-text">Insert the Series of the Comic</div>
                </div>

                <div class="col-4">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" id="type" name="type" class="form-control" value="{{$comic->type}}">
                    <div class="form-text">Insert the Type of the Comic</div>
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" id="description" name="description" class="form-control" value="{{$comic->description}}">
                    <div class="form-text">Insert a description of the Comic</div>
                </div>

                <div class="col-12">
                    <label for="thumb" class="form-label">Image URI</label>
                    <input type="text" id="thumb" name="thumb" class="form-control" value="{{$comic->thumb}}">
                    <div class="form-text">Insert the URL's image of the Comic</div>
                </div>

                <div class="col-4">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="date" id="sale_date" name="sale_date" class="form-control" value="{{$comic->sale_date}}">
                    <div class="form-text">Insert the date of release of the Comic</div>
                </div>

                <div class="col-4">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" id="price" name="price" class="form-control" value="{{$comic->price}}">
                    <div class="form-text">Insert the price of the Comic</div>
                </div>
                <div class="col-12">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text" id="artists" name="artists" class="form-control" value="{{$comic->artists}}">
                    <div class="form-text">Insert the artists of the Comic:<br>artist number1, artist number2,...</div>
                </div>
                <div class="col-12">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text" id="writers" name="writers" class="form-control" value="{{$comic->writers}}">
                    <div class="form-text">Insert the writers of the Comic:<br>writer number1, writer number2,...</div>
                </div>
            </div>

            <div>
                <button class="btn btn-primary" type="submit">Edit Comic</button>
            </div>
        </form>
    </section>

@endsection
@extends('layouts.main')

@section('title','Comics')


@section('content')
        @forelse ($comics as $comic)
            <div class="card col-4">
                <a href="{{ route('comics.show', $comic) }}">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                    <div class="card-body">
                        
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-text">{{$comic->series}}</p>
                        <p class="card-text">{{$comic->type}}</p>
                    </div>
                </a>
            </div>
        @empty
            <h3>No comics available</h3>
            
        @endforelse

@endsection
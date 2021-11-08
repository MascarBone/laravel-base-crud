@extends('layouts.main')

@section('title','Comic')


@section('content')    
    
    <div class="card">
        <div class="row">
            <div class="col-3 d-flex align-items-center">
                <img src="{{$comic->thumb}}" class="card-img-top rounded-start" alt="{{$comic->title}}">
            </div>
            <div class="col-9">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->description}}</p>                    
                    <p class="card-text">{{$comic->series}}</p>                    
                    <p class="card-text">{{$comic->type}}</p>                    
                    <p class="card-text">{{$comic->series}}</p>
                    <p class="card-text">${{$comic->price}}</p>                    
                    <p class="card-text">{{$comic->artists}}</p>
                    <p class="card-text">{{$comic->writers}}</p>                    
                    <p class="card-text"><small class="text-muted">{{$comic->sale_date}}</small></p>
                </div>
            </div>
        </div>
            
            {{-- <p class="card-text">{{$comic->series}}</p>
            <p class="card-text">{{$comic->type}}</p> --}}
    </div>
 

@endsection
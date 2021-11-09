@extends('layouts.main')

@section('title','Comics')


@section('content')
        @if (session('item'))
            <div class="col-12 alert alert-success">
                <h3>"{{ session('item') }}" deleted with success</h3>
            </div>
        @endif
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
                <a href="{{ route('comics.edit', $comic) }}" class="align-self-end mb-3 btn btn-primary">Edit Comic</a>
                <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="delete-form align-self-end" data-name="{{$comic->title}}">
                    @csrf
                    @method('DELETE')
                    <button class="mb-3 btn btn-primary" type="submit">DELETE</button>
                </form>
            </div>
        @empty
            <h3>No comics available</h3>
            
        @endforelse

@endsection

@section('script')
    <script>
        const deleteForms = document.querySelectorAll('.delete-form');

        deleteForms.forEach(form => {
            // console.log(form);
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                const name = this.getAttribute('data-name');
                const confirm = window.confirm(`Would you like to DELETE "${name}" ?`);
                if( confirm) this.submit();
            })
        });
        
    </script>
@endsection
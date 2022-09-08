@extends('home')

@section('main-content')
    <ol>
        @foreach($movies as $movie)
            <li>
                {{$movie->id}} - {{$movie->title}} - {{$movie->vote}}
            </li>
        @endforeach
    </ol>
    
@endsection
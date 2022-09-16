
@extends('layouts.main')

@section('main-content')

<h1>pagina fumetti</h1>



<div class="container">
    @foreach ($comics as $comic) 
    <a href="{{route('comic', ['id' => $loop->index] )}}">
        <figure>
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            <figcaption>
                {{$comic['title']}}
            </figcaption>
        </figure>
    </a>
    @endforeach
</div>


<h3>

    <a href="{{route('home')}}">torna indietro</a>
</h3>
@endsection
@extends('layouts.base')

@section('content')

    <h2>{{$comic->title}}</h2>

    <ul>
        <li><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></li>
        <li>Descrizione: {{ $comic->description }}</li>
        <li>Prezzo: {{ $comic->price }}</li>
        <li>Serie: {{ $comic->series }}</li>
        <li>Tipo: {{ $comic->type }}</li>
        <li>Data di uscita: {{ $comic->sale_date }}</li>
    </ul>
@endsection

@extends('layouts.base')
@section('title', 'Inserisci un nuovo fumetto')

@section('content')
    <form method="post" action="{{ route('comics.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="descriptio" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" name="thumb" id="thumb" >
        </div>
        <div class="mb-3 form-check">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" name="price" id="price" step="0.01">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </div>
    </form>
@endsection

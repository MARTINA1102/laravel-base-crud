@extends('layouts.base')

@section('content')

    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Titolo</th>
                        <th scope="col">Descizione</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->title }}</th>
                            <td>{{ $comics->description }}</td>
                            <td>{{ $comics->price }}</td>
                            <td>{{ $comics->series }}</td>
                            <td>{{ $comics->type }}</td>
                            <td>
                                <a href="{{ route('comics.show', ['comics' => $comics->id]) }}" class="btn btn-primary">Visita</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center">
        <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi Fumetto</a>
    </div>
@endsection

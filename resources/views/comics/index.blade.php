@extends('layout.base')

@section('pageContent')
<h1>Le nuove uscite del mese</h1>
<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Foto</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Serie</th>
            <th scope="col">Tipo</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)    
        <tr>
            <th scope="row">{{$comic["id"]}}</th>
            <td>{{$comic["title"]}}</td>
            <td>{{substr($comic["description"], 0, 150)}}</td>
            <td>{{$comic["thumb"]}}</td>
            <td>{{$comic["price"]}}</td>
            <td>{{$comic["series"]}}</td>
            <td>{{$comic["type"]}}</td>
            <td>
                <a href="{{route("comics.show", $comic["id"])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
                <a href="{{route("comics.edit", $comic["id"])}}"><button type="submit" class="btn btn-success">Modifica</button></a>

                <form action="{{route("comics.destroy", $comic["id"])}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
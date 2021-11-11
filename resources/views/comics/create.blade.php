@extends('layout.base')

@section('pageContent')
<h1>Inserisci un nuovo fumetto</h1>

<form action="{{route("comics.store")}}" method="POST">
    @csrf

    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Inserisci la descrizione"></textarea>
    </div>
    <div class="form-group">
        <label for="thumb">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci la url">
    </div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
    </div>
    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie">
    </div>
    <div class="form-group">
        <label for="type">Tipo</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo">
    </div>
    

    <button type="submit" class="btn btn-primary">Crea</button>
</form>


@endsection
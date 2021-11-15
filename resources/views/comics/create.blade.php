@extends('layout.base')

@section('pageContent')
<h1>Inserisci un nuovo fumetto</h1>

<form action="{{route("comics.store")}}" method="POST">
    @csrf

    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo"  value="{{ old('title') }}">

        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Inserisci la descrizione" value="{{ old('description') }}"></textarea>
        
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="thumb">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci la url" value="{{ old('thumb') }}">

        @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" value="{{ old('price') }}">

        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" value="{{ old('series') }}">

        @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="type">Tipo</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo" value="{{ old('type') }}">

        @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    

    <button type="submit" class="btn btn-primary mt-3">Crea</button>
</form>

@endsection
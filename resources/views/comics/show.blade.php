@extends('layout.base')

@section('pageContent')
<h1>{{$comic['title']}}</h1>
<p>
    Descrizione: {{$comic['description']}}
</p>
<img src=" {{$comic['thumb']}}" alt="">
<h5>Prezzo € {{$comic['price']}}</h5>
<p> {{$comic['series']}}</p>
<p> {{$comic['type']}}</p>

@endsection
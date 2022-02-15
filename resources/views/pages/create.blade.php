@extends('layouts.main-layout')
@section('content')
    <h1>Crea nuovo post</h1>
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">

        @method('POST')
        @csrf

        <label for="sender">Autore</label><br>
        <input type="text" name="sender"><br>
        <label for="address">Indirizzo</label><br>
        <input type="text" name="address"><br>
        <label for="text">Testo</label><br>
        <input type="text" name="text"><br>
        <label for="img">Immagine</label><br>
        <input type="file" name="img"><br><br>
        <input type="submit" value="Crea">

    </form>
@endsection
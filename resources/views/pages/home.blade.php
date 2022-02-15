@extends('layouts.main-layout')
@section('content')

<h2>Listato cartoline</h2>
@auth
    <button><a href="{{ route('create') }}">Crea nuovo post</a></button>
@endauth

<postcard-component></postcard-component>
    
@endsection
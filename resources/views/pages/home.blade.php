@extends('layouts.main-layout')
@section('content')

<h2>Listato cartoline</h2>
<button><a href="{{ route('create') }}">Crea nuovo post</a></button>
<postcard-component></postcard-component>
    
@endsection
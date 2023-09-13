{{-- untuk manggil layouts --}}
@extends('layouts.main')

{{-- memanggil yield di main.blade --}}
@section('container')
    <h1>Ini adalah About</h1>
    <p>{{ $name }}</p>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="100">
@endsection
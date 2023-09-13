{{-- untuk manggil layouts --}}
@extends('layouts.main')

{{-- memanggil yield di main.blade --}}
@section('container')
    
    @foreach ($posts as $post)
        <article class="mb-5">
        <h3>
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        </h3>
        <h5>By: {{ $post->author }}</h5>
        <h6>{{ $post->excerpt }}</h6>
        </article>
    @endforeach

@endsection

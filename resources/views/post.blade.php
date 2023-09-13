{{-- untuk manggil layouts --}}
@extends('layouts.main')

{{-- memanggil yield di main.blade --}}
@section('container')

    <article class="mb-5">
        <h3>{{ $post->title }}</h3>
        <h5>{{ $post->author }}</h5>
        <h6>{!! $post->body !!}</h6>
    </article>

    <a href="/blog">Back to blog</a>
@endsection

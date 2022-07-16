@extends('layouts.base')

@section('container')

<h1>Halaman Posts</h1>
@foreach ($posts as $post)
<h2>{{ $post["title"] }}</h2>
<p>{{ $post["body"] }}</p>
@endforeach

@endsection
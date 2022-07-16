@extends('layouts.base')


@section('container')
<h2>Halaman About</h2>

<h4>
    {{ $name }}
</h4>
<img src="img/{{ $image }}" alt="">

@endsection
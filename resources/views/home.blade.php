@extends('template')

@section('title', 'Home')

@section('content')
	<a href="{{ route('pictures') }}">Imagenes</a>
	<a href="{{ route('documents') }}">PDF</a>
@endsection
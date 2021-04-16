@extends('layouts.app')

@section('title', 'Vivify Cars')

@section('content')
    <h2>Cars</h2>
    <ul>
        @foreach ($cars as $car)
    <li><a href="{{ route('car', ['car' => $car->id]) }}">{{ $car->title }}</a></li>
        @endforeach
    </ul>
@endsection
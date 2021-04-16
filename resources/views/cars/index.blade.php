@extends('layouts.app')

@section('title', 'Vivify Cars')

@section('content')
  <h2>Cars</h2>
  <ul class="list-group list-group-flush">
    @foreach ($cars as $car)
      <li class="list-group-item"><a href="{{ route('car', ['car' => $car->id]) }}">{{ $car->title }}</a></li>
    @endforeach
  </ul>
@endsection
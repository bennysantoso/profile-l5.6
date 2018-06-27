@extends('layout')

@section('title', 'Customer')

@section('content')
    @if(!empty($name))
        <h1>Hi, {{ $name }}!</h1>
    @else
        <h1>Hi, guys!</h1>
    @endif

    <p>Lorem ipsum dolor sit amet.</p>
@endsection
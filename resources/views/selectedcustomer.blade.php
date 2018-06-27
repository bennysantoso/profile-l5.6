@extends('layout')

@section('title', 'Customer')

@section('content')
    @if(!empty($selectedCustomer))
        <h1>Hi, {{ $selectedCustomer->name }}!</h1>
    @else
        <h1>Hi, guys!</h1>
    @endif

    <p>List customer :</p>
    <p>
    <ul>
        @foreach($customer as $person)
            <li><a href="{{ url('customer', $person->customer_id) }}">{{ $person->name }}</a></li>
        @endforeach
    </ul>
    </p>
@endsection
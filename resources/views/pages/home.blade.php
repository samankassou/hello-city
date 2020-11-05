@extends('layouts/app')

@section('title')
@section('content')
	<img src="{{ asset('images/cameroon-flag.png') }}" alt="Cameroon Flag" class="my-12 rounded-md shadow-md h-32">

    <h1 class="text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Cameroon!</h1>

    <p class="text-lg text-gray-800">It'is currently {{ date('h:i A') }}</p>

@endsection

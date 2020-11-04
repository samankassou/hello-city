@extends('layouts/app')

@section('title')
@section('content')
	<img src="/images/cameroon-flag.png" alt="Cameroon Flag">

    <h1>Hello from Cameroon!</h1>

    <p>It'is currently {{ date('h:i A') }}</p>

@endsection

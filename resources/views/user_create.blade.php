@extends('master')

@section('content')

<a href="{{ route('users.index') }}">Back</a>

<hr>

<h2>Create User</h2>

@if (session()->has('message'))
{{ session()->get('message')}}
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="pass" id="pass" placeholder="Accoutn ID">
    <input type="text" name="login" id="login" placeholder="Login">
    <input type="text" name="idSector" id="idsector" placeholder="Sector ID">

    <button type="submit">CREATE</button>
</form>

@endsection

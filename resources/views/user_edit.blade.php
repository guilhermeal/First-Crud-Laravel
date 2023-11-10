@extends('master')

@section('content')

<a href="{{ route('users.index') }}">Back</a>

<hr>

<h2>User Edit</h2>

@if (session()->has('message'))
{{ session()->get('message')}}
@endif

<form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">

    <input type="text" name="pass" id="pass" value="{{ $user->pass }}">
    <input type="text" name="login" id="login" value="{{ $user->login }}">
    <input type="text" name="idsector" id="idsector" value="{{ $user->idsector }}">

    <button type="submit">UPDATE</button>
</form>

@endsection

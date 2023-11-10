@extends('master')

@section('content')

<a href="{{ route('users.index') }}">Back</a>

<hr>

<h2>User Show ({{ $user->login }})</h2>

@if (session()->has('message'))
{{ session()->get('message')}}
@endif

<pre>
{{ $user }}
</pre>


<form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">DELETE</button>
</form>

@endsection

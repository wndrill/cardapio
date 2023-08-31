@extends('master')

@section('content')
    <h2>Edit</h2>
    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input id="firstName" name="firstName" type="text" value="{{ $user->firstName }}">
        <input id="lastName" name="lastName" type="text" value="{{ $user->lastName }}">
        <input id="email" name="email" type="text" value="{{ $user->email }}">
        <button type="submit">alterar</button>
    </form>
@endsection

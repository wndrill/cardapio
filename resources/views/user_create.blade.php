@extends('master')

@section('content')
    <h2>Create</h2>
    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <input id="firstName" name="firstName" type="text" placeholder="primeiro nome">
        <input id="lastName" name="lastName" type="text" placeholder="sobrenome">
        <input id="email" name="email" type="text" placeholder="seu email">
        <input type="password" name="password" id="password" placeholder="sua senha">
        <button type="submit">guardar</button>
    </form>
@endsection

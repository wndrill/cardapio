@extends('master')

@section('content')
<a href="{{ route('users.create') }}">Criar</a>
<hr>
    <h2>Users</h2>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->firstName}} ∣ <a href="{{ route('users.edit', ['user' => $user->id]) }}">edit</a> ∣ <a href="#">delete</a></li> 
        @endforeach
    </ul>
@endsection
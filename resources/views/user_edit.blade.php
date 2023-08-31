@extends('master')

@section('content')
    <h2 class="text-[2rem] text-slate-700 font-semibold mb-[2%]">Edit</h2>
    <hr>
    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif


    <form action="{{ route('food.update', ['id' => $food->id]) }}" method="POST" class="ufor mt-2 flex w-fit h-fit flex-col">
        @csrf
        <div class="flex w-full h-fit flex-row">
            <input type="hidden" name="_method" value="PUT">
            <div class="flex flex-col">
                <label for="name">Nome</label>
                <input id="name" name="name" type="text" value="{{ $food->name }}"
                    class="border px-2 flex flex-row justify-center items-center pt-1 rounded-sm mx-1">
            </div>
            <div class="flex flex-col">
                <label for="desc">Descrição</label>
                <textarea name="desc" id="desc" class="border px-2 flex flex-row justify-center items-center pt-1 rounded-sm mx-1">{{ $food->desc }}</textarea>
            </div>
            <div class="flex flex-col">
                <label for="prize">Preço</label>
                <input id="prize" name="prize" type="text" value="{{ $food->prize }}"
                    class="border px-2 flex flex-row justify-center items-center pt-1 rounded-sm mx-1">
            </div>
            <div class="flex flex-col">
                <label for="kind">Tipo</label>
                <input id="kind" name="kind" type="text" value="{{ $food->kind }}"
                    class="border px-2 flex flex-row justify-center items-center pt-1 rounded-sm mx-1">
            </div>
        </div>
        <button class="bg-emerald-500 w-fit px-2 py-1 mt-1 mx-2 rounded-md hover:bg-emerald-300 transition-colors" type="submit">alterar</button>
    </form>
@endsection

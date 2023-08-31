@extends('master')
@section('title', 'Restaurant Menu')

@section('content')
    <div class="menu mt-[5%]">
        <div class="pg-title mb-[2%] text-[3rem]">
            <h2 class="menu-group-heading font-semibold text-slate-700">Cardápio</h2>
        </div>
        <hr>
        <a href="{{ route('user.logout') }}" class="text-sky-500 hover:text-sky-300 underline transition-colors">desconectar</a>
        <div class="content mt-[1%] flex flex-col w-full h-fit">
            @foreach ($foods as $i)
                <div class="flex flex-col mb-[2rem]">
                    <div class="item-title flex flex-row w-full h-fit">
                        <h1 class=" mb-1 text-[1.5rem] capitalize">{{ $i->name }} - <span
                                class=" font-light text-red-500"> ${{ $i->prize }}</span></h1>
                    </div>
                    <div class="item-content flex flex-col w-full h-fit">
                        <div class=" flex flex-row w-full h-fit mb-1">
                            <p>
                                {{ $i->desc }}
                            </p>
                        </div>
                        <img src="https://fakeimg.pl/600x400" alt="imagem" class="w-fit rounded-md">
                    </div>
                    <div class="item-footer flex flex-row mt-1 px-2">
                        <a class="bg-emerald-500 rounded-md px-3 py-1 hover:bg-emerald-300 transition-colors" href="{{ route('food.edit', $i->id) }}">editar</a>
                        <div class="w-2"></div>
                        <a class="bg-orange-500 rounded-md px-3 py-1 hover:bg-orange-300 transition-colors" href="{{ route('food.destroy', $i->id) }}">apagar</a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- <div class="menu-group">
            <div class="menu-item">
                <img src="https://dummyimage.com/600x400/000/fff" alt="Black Placeholder Image" class="menu-item-img" />
                <div class="menu-item-text">
                    <h3 class="menu-item-heading">
                        <span class="menu-item-name">Bruschetta</span>
                        <span class="menu-item-price">$12.90</span>
                    </h3>
                    <p class="menu-item-desc">
                        Nunc efficitur felis vel mi efficitur, sed molestie sem
                        scelerisque. Fusce orci risus, congue eu mauris nec, pretium
                        tincidunt nulla.
                    </p>
                </div>
            </div>
            <div class="menu-item">
                <img src="https://dummyimage.com/600x400/ccc/fff" alt="Black Placeholder Image" class="menu-item-img" />
                <div class="menu-item-text">
                    <h3 class="menu-item-heading">
                        <span class="menu-item-name">Bruschetta</span>
                        <span class="menu-item-price">$12.90</span>
                    </h3>
                    <p class="menu-item-desc">
                        Nunc efficitur felis vel mi efficitur, sed molestie sem
                        scelerisque. Fusce orci risus, congue eu mauris nec, pretium
                        tincidunt nulla.
                    </p>
                </div>
            </div>
            <div class="menu-item">
                <img src="https://dummyimage.com/600x400/000/fff" alt="Black Placeholder Image" class="menu-item-img" />
                <div class="menu-item-text">
                    <h3 class="menu-item-heading">
                        <span class="menu-item-name">Bruschetta</span>
                        <span class="menu-item-price">$12.90</span>
                    </h3>
                    <p class="menu-item-desc">
                        Nunc efficitur felis vel mi efficitur, sed molestie sem
                        scelerisque. Fusce orci risus, congue eu mauris nec, pretium
                        tincidunt nulla.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <h2 class="menu-group-heading">Main Course</h2>
        <div class="menu-group">
            <div class="menu-item">
                <img src="https://dummyimage.com/600x400/ccc/fff" alt="Black Placeholder Image" class="menu-item-img" />
                <div class="menu-item-text">
                    <h3 class="menu-item-heading">
                        <span class="menu-item-name">Bruschetta</span>
                        <span class="menu-item-price">$12.90</span>
                    </h3>
                    <p class="menu-item-desc">
                        Nunc efficitur felis vel mi efficitur, sed molestie sem
                        scelerisque. Fusce orci risus, congue eu mauris nec, pretium
                        tincidunt nulla.
                    </p>
                </div>
            </div>
            <div class="menu-item">
                <img src="https://dummyimage.com/600x400/000/fff" alt="Black Placeholder Image" class="menu-item-img" />
                <div class="menu-item-text">
                    <h3 class="menu-item-heading">
                        <span class="menu-item-name">Bruschetta</span>
                        <span class="menu-item-price">$12.90</span>
                    </h3>
                    <p class="menu-item-desc">
                        Nunc efficitur felis vel mi efficitur, sed molestie sem
                        scelerisque. Fusce orci risus, congue eu mauris nec, pretium
                        tincidunt nulla.
                    </p>
                </div>
            </div>
            <div class="menu-item">
                <img src="https://dummyimage.com/600x400/ccc/fff" alt="Black Placeholder Image" class="menu-item-img" />
                <div class="menu-item-text">
                    <h3 class="menu-item-heading">
                        <span class="menu-item-name">Bruschetta</span>
                        <span class="menu-item-price">$12.90</span>
                    </h3>
                    <p class="menu-item-desc">
                        Nunc efficitur felis vel mi efficitur, sed molestie sem
                        scelerisque. Fusce orci risus, congue eu mauris nec, pretium
                        tincidunt nulla.
                    </p>
                </div>
            </div>
        </div> --}}
    </div>
@endsection

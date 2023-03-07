@extends('layouts.app')

@section('content')
<body>
    <div>
        <button class="btn btn-sekondary dropdown-toggle" type="button" id="dropdownMenuButton1">
            <a class="dropdown-item" href="{{url('/catalog')}}">Категории</a>
        </button>
        <ul class="dropdown-menu"aria-labelledby>=dropdownMenuButton1</ul>
        @foreach ($s as $q)
        <li> <a class="dropdown-item" href="{{ url('/catalog/filter') }}/{{ $s->name }}"</a></li>
        @endforeach

    </div>
        <div class="cards-item">
            @foreach ($a as $b)
                <div class="card-item">
                    <img src="{{ $b->img}}" class="card-img-top" alt="#">
                    <div class="card-body">
                    <h5 class="card-title">{{ $b->name }}</h5>
                    <p>
                    <h5 class="card-title">Цена:{{ $b->price }} rub</h5>
                    <p>
                    <p class="card-text">Описание:{{ $b->model }}</p>
                    <p>
                    <a href="/public/catalog/{{ $b -> id }}" class="btn btn-primary">Подробнее</a>
                    <a href="/public/bascet/{{ $b -> id }}" class="btn btn-primary">В корзину</a>
                    </div>
                </div>
            @endforeach
        </div>
</body>
</html>

@endsection

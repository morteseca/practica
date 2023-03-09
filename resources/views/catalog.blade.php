@extends('layouts.app')

@section('content')
<body>
    <div>
            <div class="catalog_sort">
                <p>Сортировка:</p>
                <div class="sort_">
                    По году:
                    <a class="btn btn-primary" href="{{ url('/catalog/sort/year/asc') }}">По возрастанию</a>
                    <a class="btn btn-primary" href="{{ url('/catalog/sort/year/desc') }}">По убыванию</a>
                </div>
                <div class="sort_">
                    По наименованию:
                    <a class="btn btn-primary" href="{{ url('/catalog/sort/name/asc') }}">По возрастанию</a>
                    <a class="btn btn-primary" href="{{ url('/catalog/sort/name/desc') }}">По убыванию</a>
                </div>
                <div class="sort_">
                    По цене:
                    <a class="btn btn-primary" href="{{ url('/catalog/sort/price/asc') }}">По возрастанию</a>
                    <a class="btn btn-primary"  href="{{ url('/catalog/sort/price/desc') }}">По убыванию</a>
                </div>
            </div>
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

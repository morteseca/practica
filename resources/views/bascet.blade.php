@extends('layouts.app')

@section('content')
<body>
    <h1>Корзина</h1>
        <div class="cards-item">
            @foreach ($p as $j)
                <div class="card-item">
                    <img src="{{ $j->products->img}}" class="card-img-top" alt="#">
                    <div class="card-body">
                    <h5 class="card-title">{{ $j->products->name }}</h5>
                    <h5 class="card-title">{{ $j->products->price }} rub</h5>
                    <p class="card-text">{{ $j->products->model }}</p>
                    <a href="/public/catalog/{{ $j ->products-> id }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            @endforeach
        </div>
</body>
</html>

@endsection
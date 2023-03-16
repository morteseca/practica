@extends('layouts.app')

@section('content')
<body>
    <div class="bascet"
        <p>Ваша корзина</p>
        </div>
        <div class="cards-item">
            @foreach ($p as $j)
                <div class="card-item">
                    <img src="{{ $j->products->img}}" class="card-img-top" alt="#">
                    <div class="card-body">
                    <h5 class="card-title">{{ $j->products->name }}</h5>
                    <p>
                    <h5 class="card-title">Цена:{{ $j->products->price }} rub</h5>
                    <p>
                    <p class="card-text">Описание:{{ $j->products->model }}</p>
                    <p>
                    <a href="/public/bascet/{{$j -> id}}/delete" class="btn btn-primary">Удалить</a>
                    <p class="card-text">Количество:{{ $j->quantity }}</p>
                    <form action="{{ route('cartUpadate', $j->id) }}" method="POST">
                            @csrf
                            <div>
                                <button type="submit" name="quantity" class="btn btn-primary" value="{{ $j->quantity - 1 }}">-</button>
                                <button type="submit" class="btn btn-primary" name="quantity" value="{{ $j->quantity + 1 }}">+</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
</body>
</html>

@endsection


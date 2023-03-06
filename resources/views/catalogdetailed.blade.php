@extends('layouts.app')

@section('content')
<body>
    <div class="cards-detail">
            <div class="card-item-deteil">
                <img src="{{ $a -> img}}" class="card-img-top" alt="#">
                <div class="card-body-deteil">
                <h5 class="card-title-deteil">{{ $a->name }}</h5>
                <p>
                <p class="card-text-deteil">Описание:{{ $a->model }}</p>
                <p>
                <h5 class="card-title-deteil">Цена:{{ $a->price }} rub</h5>
                <p>
                <p class="card-text-deteil">Страна производства:{{ $a->country }}</p>
                <p>
                <p class="card-text-deteil">Год выпуска:{{ $a->year }}</p>
                <p>
                <a href="{{ route ('bascet') }}" class="btn btn-primary">В корзину</a>
                
                </div>
            </div>
    </div>
</body>
</html>
@endsection

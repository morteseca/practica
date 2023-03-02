@extends('layouts.app')

@section('content')
<body>
        <div class="cards-item">
            @foreach ($a as $b)
                <div class="card-item">
                    <img src="{{ $b->img}}" class="card-img-top" alt="#">
                    <div class="card-body">
                    <h5 class="card-title">{{ $b->name }}</h5>
                    <h5 class="card-title">{{ $b->price }} rub</h5>
                    <p class="card-text">{{ $b->model }}</p>
                    <a href="/public/catalog/{{ $b -> id }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            @endforeach
        </div>
</body>
</html>

@endsection

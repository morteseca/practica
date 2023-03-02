@extends('layouts.app')

@section('content')
<body>
    <div class="cards-detail">
            <div class="card-item-deteil">
                <img src="{{ $a -> img}}" class="card-img-top" alt="#">
                <div class="card-body-deteil">
                <h5 class="card-title-deteil">{{ $a->name }}</h5>
                <h5 class="card-title-deteil">{{ $a->price }} rub</h5>
                <p class="card-text-deteil">{{ $a->model }}</p>
                </div>
            </div>
    </div>
</body>
</html>
@endsection

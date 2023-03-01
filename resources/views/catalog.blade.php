@extends('layouts.app')

@section('content')
<body>
        @foreach ($a as $b)
    <div class="card" style="width: 18rem;">
        <img src="{{ $b->img}}" class="card-img-top" alt="#">
        <div class="card-body">
          <h5 class="card-title">{{ $b->name }}</h5>
          <h5 class="card-title">{{ $b->price }} rub</h5>
          <p class="card-text">{{ $b->model }}</p>
          <a href="#" class="btn btn-primary">Подробнее </a>
        </div>
      </div>
</body>
</html>
@endforeach
@endsection
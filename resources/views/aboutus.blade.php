@extends('layouts.app')

@section('content')
    <div class="sliders"
        <h1>Девиз компании</h1>
        <p>Новинки компании</p>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            @foreach ($a as $b)
                @if ($loop -> first)
                    <div class="carousel-item active">
                        <img src="{{ $b->img }}" class="d-block w-100" alt="...">
                        <p class="corusel-item-name">{{ $b->name }}</p>
                    </div>
                @else
                    <div class="carousel-item">
                        <img src="{{ $b->img }}" class="d-block w-100" alt="...">
                        <p class="corusel-item-name">{{ $b->name }}</p>
                    </div>
                @endif

            @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </div>
@endsection

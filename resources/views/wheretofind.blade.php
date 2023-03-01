@extends('layouts.app')

@section('content')
    <section style="display:flex; flex-direction:column; align-items: center">
        <h1>Где мы находимся</h1>
        <img style="width:35%; height:auto;" src="../public/img/map.jpg" alt="*">
        <p>Ватутина 12</p>
        <p>+79991238627</p>
        <p>TryGames@mail.ru</p>

        <button class="submit"><a href="{{ route('home') }}">Вернуться на главную</a></button>
    </section>
@endsection

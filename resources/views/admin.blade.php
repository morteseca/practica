@extends('layouts.app')

@section('content')
<center><div class="forn-admin">
<div class="form">
<form class="form-horizontal" role="form" method="POST" action="{{route ('add-form') }}" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Имя товара</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="name" name="name">
    </div>
  </div>
  <div class="form-group">
    <label for="img`" class="col-sm-2 control-label">Изображение</label>
    <div class="col-sm-4">
      <input type="file" class="form-control" name="img">
    </div>
  </div>

  <div class="form-group">
    <label for="price" class="col-sm-2 control-label">Цена</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="price" name="price">
    </div>
  </div>

  <div class="form-group">
    <label for="country" class="col-sm-2 control-label">Страна</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="country" name="country">
    </div>
  </div>

  <div class="form-group">
    <label for="year" class="col-sm-2 control-label">Год</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="year" name="year">
    </div>
  </div>

  <div class="form-group">
    <label for="model" class="col-sm-2 control-label">Описание</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="model" name="model">
    </div>
  </div>

  <div class="form-group">
    <label for="category" class="col-sm-2 control-label">Категория</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="category" name="category">
    </div>
  </div>

   <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" >Отправить</button>
    </div>
  </div>
</form>
</div>
</center>

@endsection

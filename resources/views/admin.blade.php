@extends('layouts.app')

@section('content')
<div class="form">
<form class="form-horizontal" role="form" method="POST" action="{{route ('add-form') }}">
    @csrf
  <div class="form-group">
    <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Имя товара</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="name" name="name">
    </div>
  </div>
  <div class="form-group">
    <label for="file" class="col-sm-2 control-label">IMG</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="file">
    </div>
  </div>

  <div class="form-group">
    <label for="price" class="col-sm-2 control-label">price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="price" name="price">
    </div>
  </div>

  <div class="form-group">
    <label for="country" class="col-sm-2 control-label">Strana</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="country" name="country">
    </div>
  </div>

  <div class="form-group">
    <label for="year" class="col-sm-2 control-label">year</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="year" name="year">
    </div>
  </div>

  <div class="form-group">
    <label for="model" class="col-sm-2 control-label">opiasnie</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="model" name="model">
    </div>
  </div>

  <div class="form-group">
    <label for="category" class="col-sm-2 control-label">category</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="category" name="category">
    </div>
  </div>

   <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default btn-sm">отправить</button>
    </div>
  </div>
</form>
</div>
@endsection

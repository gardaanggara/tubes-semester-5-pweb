@extends('template')
@section('style')
<link rel="stylesheet" type="text/css" href="css/login.css">
@endsection
@section('content')
<div class="text-center">
  <h3>Sistem Pengelolaan Tilang</h3>
  <img class="gambar" src="image/polisi.png">
</div>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Masukan Username</label>
    <input type="text" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control">
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary mr-3">Login</button>
    <button type="button" class="btn btn-warning">Bantuan</button>
  </div>
</form>
@endsection

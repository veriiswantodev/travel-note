@extends('layouts.global')

@section('title')
    Tambah User
@endsection

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">User</li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-item-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
        </div>

        <div class="card-body">
          <form method="post" action="/user">
            @csrf

            <div class="form-group">
              <label for="nik">NIK</label>
              <input type="text" name="nik" class="form-control" id="nik" aria-describedby="nikhelp" placeholder="Masukan NIK">
            </div>

            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" name="name" class="form-control" id="name" aria-describedby="namehelp" placeholder="Masukan Nama">
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailhelp" placeholder="Masukan Email">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="role">Role</label>
              <select class="form-control" name="roles" id="role">
                <option selected>Pilih ...</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
              </select>
            </div>
            
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
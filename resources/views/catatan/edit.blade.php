@extends('layouts.global')

@section('title')
    Edit Perjalanan
@endsection

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Perjalanan</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Perjalanan</li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-item-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Edit Perjalanan</h6>
        </div>

        <div class="card-body">
          <form method="post" action="/perjalanan/{{$perjalanan->id}}/update">
            @csrf

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <div class="input-group"">
                    <input type="hidden" name="user_id" id="user_id" value="{{$perjalanan->id}}">
                    <input class="form-control" id="name" name="name" value="{{$perjalanan->user->name}}" disabled>                                           
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <div class="input-group">
                    <input type="tanggal" name="tanggal" value="{{$perjalanan->tanggal}}" class="form-control datepicker" id="tanggal" aria-describedby="tanggalhelp">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fas fa-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="jam">Jam</label>
                  <div class="input-group clockpicker">
                    <input type="jam" name="jam" class="form-control" value="{{$perjalanan->jam}}" id="exampleInputjam">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fas fa-clock"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Suhu</label>
                  <input type="suhu" name="suhu" class="form-control" id="exampleInputsuhu" value="{{$perjalanan->suhu}}">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="Lokasi">Lokasi</label>
              <textarea name="lokasi" id="lokasi" cols="15" rows="5" class="form-control">{{$perjalanan->lokasi}}</textarea>
            </div>
            
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('script')
    <script>
      $(document).ready(function(){
        $('.clockpicker').clockpicker({
          default: 'now',
          donetext: 'Done'
        });
      })

      $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
      });
    </script>
@endpush
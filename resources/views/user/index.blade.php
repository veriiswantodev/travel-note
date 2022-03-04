@extends('layouts.global')

@section('title')
    User
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
              <h6 class="m-0 font-weight-bold text-primary">User</h6>
            </div>
              <div class="table-responsive p-3">
                <table class="table align-item-center table-flush datatable" style="width: 100%;">
                  <thead>
                    <tr>
                      <th width="5%">No.</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Role</th>
                      <th width="10%">Aksi</th>
                    </tr>
                  </thead>
                </table>
              </div>
            
          </div>
        </div>
      </div>
    </div>
@endsection

@push('script')
    <script>
      let table;
      
      $( function() {
        table = $('.table').DataTable({
          proccesing: true,
          autowidth: false,
          ajax: {
            url: '{{route('user.data')}}'
          }, 
          columns: [
            {data: 'DT_RowIndex', searchable: false, sortbale: false},
            {data: 'nik'},
            {data: 'name'},
            {data: 'roles'},
            {data: 'aksi', searchable: false, sortable: false
            }
          ]
        });
      });

      function editForm(url){
        window.location.assign(url);
      }

      function deleteData(url){
        if(confirm('Yakin ingin manghapus data terpilih?')){
          $.post(url, {
              '_token': $('[name=csrf-token]').attr('content'),
              '_method': 'delete'
            })
            .done((response) =>{
              table.ajax.reload();
            })
            .fail((errors) => {
              alert('Gagal Menghapus data!!');
              return;
            })
          }
        }
    </script>
@endpush

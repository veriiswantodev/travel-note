<div class="modal fade" id="modal-user" tabindex="-1" aria-labelledby="modal-user" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="box-body table-responsive p-3">
                  <table class="table table-striped table-bordered" style="width: 100%;">
                    <thead>
                      <th width="5%">No</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Role</th>
                      <th width="15%"><i class="fa fa-cog"></i></th>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nik}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->roles}}</td>
                                <td>
                                    <button data-user_id="{{$item->id}}" data-user_nama="{{$item->name}}"  id="pilih" class="btn btn-sm btn-primary">
                                        <div class="fa fa-check-circle"> Pilih</div>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
          </div>
      </div>
  </div>
</div>



<div class="modal fade" id="tambahUser" tabindex="-1" role="dialog" aria-labelledby="tambahUserTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahUserTitle">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
      @if ($errors->any())
      <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
      </ul>
      @endif
    <form class="form-vertical" action="/user-page" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      {{method_field('PUT')}}
          <div class="form-group">
            <label class="col-sm-3 control-label">Nama</label>
            <input type="text" class="form-control" placeholder="nama user" name="name" id="name">
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Email</label>
            <input type="email" class="form-control" placeholder="mail@example.com" name="email" id="email">
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Phone</label>
            <input type="number" class="form-control" placeholder="ex: 0899xxxxxx" name="phone" id="phone">
          </div>
              
    </div>
      <div class="modal-footer">
        <a href="/user-page"><button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button></a>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div> 



  <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="tambahdataTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahdataTitle">Tambah Data Buku</h5>
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
    <form class="form-vertical" action="/admin-page" method="post" enctype="multipart/form-data">
      {{csrf_field()}}

          <div class="form-group">
            <label class="col-sm-3 control-label">Nama Buku</label>
            <input type="text" class="form-control" placeholder="nama buku" name="namaBuku" id="nama">
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Tipe Buku</label>
            <input type="number" class="form-control" placeholder="ex: 0001 input" name="tipeBuku" id="tipe">
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Penulis</label>
            <input type="text" class="form-control" placeholder="nama penulis" name="penulis" id="penulis">
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Penerbit</label>
            <input type="text" class="form-control" placeholder="penerbit" name="penerbit" id="penerbit">
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Tahun Terbit</label>
            <input type="date" class="form-control" placeholder="DD/MM/YYYY" name="tahunTerbit" id="tahun">
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Gambar</label>
            <input type="file" class="form-control" placeholder="penerbit" name="imageBuku" id="file">
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Deskripsi</label>
            <textarea class="form-control" rows="3" name="ringkasan"></textarea>
          </div>
              
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div> 

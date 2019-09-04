<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container my-3">
  @if ($errors->any())
      <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
      </ul>
      @endif
    <form class="form-vertical" action="/tes/{{$data->id}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
            <label class="col-sm-3 control-label">Nama Buku</label>
            <input type="text" class="form-control" placeholder="nama buku" name="namaBuku"  id="nama" value="{{$data->namaBuku}}">
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Tipe Buku</label>
            <input type="number" class="form-control" placeholder="ex: 0001 input" name="tipeBuku" id="tipe" value="{{$data->tipeBuku}}">
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Penulis</label>
            <input type="text" class="form-control" placeholder="nama penulis" name="penulis" id="penulis" value="{{$data->penulis}}">
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Penerbit</label>
            <input type="text" class="form-control" placeholder="penerbit" name="penerbit" id="penerbit" value="{{$data->penerbit}}">
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Tahun Terbit</label>
            <input type="date" class="form-control" placeholder="DD/MM/YYYY" name="tahunTerbit" id="tahun" value="{{$data->tahunTerbit}}">
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Gambar</label>
            <input type="file" class="form-control" placeholder="penerbit" name="imageBuku" id="file">
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Deskripsi</label>
            <textarea class="form-control" rows="3" name="ringkasan">{{$data->ringkasan}}</textarea>
          </div>
              
        <div class="grup-tombol float-right mr-2">
            <a href="/tes"><button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button></a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>


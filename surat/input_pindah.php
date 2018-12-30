<!doctype html>
<html>
    <head>
        <title>From data</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/dataTables.bootstrap.css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">

    </head>

    <style type="text/css">
    body {
      min-height: 200px;
      padding-top: 70px;
    }
    .navbar-inverse {
    background-color: #005401;
    border-color: #005401;
    }
    .navbar-inverse .navbar-nav>li>a {
    color: #FFFFFF;
    }

    .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>
    a:hover, .navbar-inverse .navbar-nav>.active>a:focus {
    color: #fff;
    background-color: #005401;
    }
    .jumbotron {
    padding-top: 10px;
    padding-bottom: 10px;
}

    .navbar-inverse .navbar-brand {
    color: #FFFFFF;
    }
   @media print {
      .noprint {
         display: none;
      }
   }
    </style>


    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-fire"></span>DESA SIRNAGALIH</a>
    </div>
  </div>
</div>
<body>
    <div class="container">
	<form method="post" action="spindah.php" class="form-horizontal" role="form" novalidate>
		<table cellpadding="3" cellspacing="0">


<div class="form-group">
      <label for="nik" class="col-sm-3 control-label">NIK</label>
        <div class="col-sm-3">
        <input type="text" class="form-control" id="nik" name="nik" required autofocus >
        </div>
    </div>
    
    <div class="form-group">
      <label for="id_keluarga" class="col-sm-3 control-label">Nama</label>
        <div class="col-sm-3">
        <input type="text" class="form-control" id="nama" name="nama"  required autofocus>
        </div>
    </div>

    <div class="form-group">
      <label for="wni" class="col-sm-3 control-label">Kewarganegaraan</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="wni" name="wni"  required>
      </div>
    </div>

    <div class="form-group">
      <label for="agama" class="col-sm-3 control-label">Agama</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="agama" name="agama"  required>
      </div>
    </div>

    <div class="form-group">
      <label for="stok" class="col-sm-3 control-label">Status Pernikahan</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="snikah" name="snikah"  required>
      </div>
    </div>

     <div class="form-group">
      <label for="stok" class="col-sm-3 control-label">Alamat</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="alamat" name="alamat"  required>
      </div>
    </div>

     <div class="form-group">
      <label for="stok" class="col-sm-3 control-label">Pindah ke</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="pindah" name="pindah" required>
      </div>
    </div>

    <div class="form-group">
      <label for="tgl" class="col-sm-3 control-label">Tanggal Pindah</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="tgl" name="tgl"  required>
      </div>
    </div>



	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-10">
			<button type="submit" name="tambah" class="btn btn-danger">Cetak</button>
		</div>
	</div>

</table>
	</form>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript">
</script>
</form>
</body>
</html>
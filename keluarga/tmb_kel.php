<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Desa sirnagalih</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-datetimepicker.min" rel="stylesheet">
	<link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type='text/javascript' src='../js/jquery.autocomplete.js'></script>
	<link rel="stylesheet" type="text/css" href="../js/jquery.autocomplete.css" />
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
    .navbar-inverse .navbar-brand {
    color: #FFFFFF;
    }
    .form-group {
    margin-bottom: 5px;
	}
	.form-horizontal .form-group {
    margin-right: auto;
    margin-left: auto;
	}
   @media print {
      .noprint {
         display: none;
      }
   }
    </style>

  </head>

  <body>
  

    <!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-fire"></span>Desa Sirnagalih</a>
    </div>

    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
      	<li><a href="../index.php">Home</a></li>
		</li>
      </ul>
    </div>
  </div>
</div>


<body>
    <div class="container">
	<form method="post" action="tmb_proseskel.php" class="form-horizontal" role="form">
		<table cellpadding="3" cellspacing="0">

		<div class="form-group">
			<label for="id_keluarga" class="col-sm-3 control-label">No-KK</label>
				<div class="col-sm-3">
				<input type="text" class="form-control" id="id_keluarga" name="id_keluarga" placeholder="isikan no ktp anda" required autofocus>
				</div>
		</div>

		<div class="form-group">
			<label for="nik" class="col-sm-3 control-label">nik</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="nik" name="nik" placeholder="" required>
			</div>
		</div>

		<div class="form-group">
			<label for="kepala_keluarga" class="col-sm-3 control-label">Kepala keluarga</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="kepala_keluarga" name="kepala_keluarga" placeholder="kepala kel" required>
			</div>
		</div>


		<div class="form-group">
			<label for="alamat" class="col-sm-3 control-label">Alamat</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="nama" name="alamat" placeholder="Alamat" required>
			</div>
		</div>

		<div class="form-group">
			<label for="rt" class="col-sm-3 control-label">Rt</label>
			<div class="col-sm-3">
				<select name="rt" class="form-control">
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="rw" class="col-sm-3 control-label">Rw</label>
			<div class="col-sm-3">
				<select name="rw" class="form-control">
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
				</select>
			</div>
		</div>
<div class="form-group">
			<label for="ekonomi" class="col-sm-3 control-label">Ekonomi</label>
			<div class="col-sm-3">
				<select name="ekonomi" class="form-control">
						<option value="kaya">kurang</option>
						<option value="sederhana">sederhana</option>
						<option value="kaya">kaya</option>
						<option value="sangat_kaya">sangat kaya</option>
				</select>
			</div>
		</div>
			
	
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-10">
		<a href="../index.php"><button type="button" class="btn btn-success">Beranda</button></a>
			<button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
		</div>
	</div>

</table>
	</form>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript">
</script>

</body>
</html>
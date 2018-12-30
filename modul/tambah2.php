<?php
ob_start();
session_start();
session_id();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Desa sirnagalih</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-datetimepicker.min" rel="stylesheet">
	<link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet">
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
	<form method="post" action="tmb_proses.php" class="form-horizontal" role="form" novalidate>
		<table cellpadding="3" cellspacing="0">


		<div class="form-group">
			<label for="id_penduduk" class="col-sm-3 control-label">No-ID</label>
				<div class="col-sm-3">
				<input type="text" class="form-control" id="id_penduduk" name="nik" disabled="" placeholder="" required autofocus>
				</div>
		</div>


		<div class="form-group">
				<label for="id_penduduk" class="col-sm-3 control-label">No-Nik</label>
				<div class="col-sm-3">
				<input type="text" class="form-control" id="id_penduduk" name="nik" placeholder="isikan no Nik" required autofocus>
				</div>
		</div>

		<div class="form-group">
			<label for="id_penduduk" class="col-sm-3 control-label">No-kk</label>
				<div class="col-sm-3">
				<input type="text" class="form-control" id="id_penduduk" name="kk" 
				value="<?php echo $_SESSION['anggota'];?>">
				</div>
		</div>

		<div class="form-group">
			<label for="nama" class="col-sm-3 control-label">Nama</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
			</div>
		</div>

		<div class="form-group">
			<label for="agama" class="col-sm-3 control-label">Agama</label>
			<div class="col-sm-3">
				<select name="agama" class="form-control">
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen</option>
						<option value="Budha">Budha</option>
						<option value="Hindu">Hindu</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="t_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="t_lahir" name="t_lahir" placeholder="Tempat lahir" required>
			</div>
		</div>

<div class="form-group">
  <label for="datepicker" class="col-sm-3 control-label">Tanggal lahir</label>
	<div class='col-sm-3'>
    	<div class="form-group">
			<div class='input-group date' id='datepicker'>
				<input type='date' name='tgl_lahir' class="form-control" />
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
			</div>
	<div class='col-sm-3'>
    	 </div>
    		</div>
   				</div>
 					 </div>
 		<script src="../js/jQuery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/moment.js"></script>
		<script src="../js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript">
			$(function () {
			$('#datepicker').datetimepicker({
					format: 'YYYY-MM-DD',
				});
				
			});
		</script>
		</div>


		<div class="form-group">
			<label for="j_kel" class="col-sm-3 control-label">Jenis kelamin</label>
			<div class="col-sm-3">
				<select name="j_kel" class="form-control">
						<option value="L">L</option>
						<option value="P">P</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="gol_darah" class="col-sm-3 control-label">Golongan Darah</label>
			<div class="col-sm-3">
				<select name="gol_darah" class="form-control">
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="O">O</option>
						<option value="AB">AB</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="w_negara" class="col-sm-3 control-label">Warga Negara</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="w_negara" name="w_negara" placeholder="warga negara" required>
			</div>
		</div>

		<div class="form-group">
			<label for="pendidikan" class="col-sm-3 control-label">Pendidikan</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="pendidikan" required>
			</div>
		</div>

		<div class="form-group">
			<label for="pekerjaan" class="col-sm-3 control-label">Pekerjaan</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="pekerjaan" required>
			</div>
		</div>

		<div class="form-group">
			<label for="s_nikah" class="col-sm-3 control-label">Status Kawin</label>
			<div class="col-sm-3">
				<select name="s_nikah" class="form-control">
						<option value="KAWIN">KAWIN</option>
						<option value="BELUM KAWIN">BELUM KAWIN</option>
						<option value="CERAI HIDUP">CERAI HIDUP</option>
						<option value="CERAI MATI">CERAI MATI</option>
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label for="hubkel" class="col-sm-3 control-label">Hubungan Keluarga</label>
			<div class="col-sm-3">
				<select name="hubkel" class="form-control">
						<option value="anak">Anak</option>
						<option value="isteri">Isteri</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label">Alamat Lengkap</label>
				<div class="col-sm-3">
					<textarea name="alamatl" class="form-control"> </textarea>
				</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-3 control-label">RT</label>
				<div class="col-sm-3">
					<input type="text" name="rt" class="form-control "required> 
				</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label">RW</label>
				<div class="col-sm-3">
					<input type="text" name="rw" class="form-control" required> 
				</div>
		</div>
			</div>
			<div class="form-group">
			<label class="col-sm-3 control-label">nama ayah</label>
				<div class="col-sm-3">
					<input type="text" name="nayah" class="form-control " required> 
				</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label">nama ibu</label>
				<div class="col-sm-3">
					<input type="text" name="nibu" class="form-control" required> 
				</div>
		</div>


		<div class="form-group">
			<label class="col-sm-3 control-label">ID KELUARGA</label>
				<div class="col-sm-3">
					<input type="text" name="id_keluarga" class="form-control" 
					value="<?php echo $_SESSION['shub'];?>"> 
				</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-3 control-label">PASPORT</label>
				<div class="col-sm-3">
					<input type="text" name="pas" class="form-control" required> 
				</div>
		</div>

<div class="form-group">
			<label class="col-sm-3 control-label">KITAP</label>
				<div class="col-sm-3">
					<input type="text" name="kitap" class="form-control" required> 
				</div>
		</div>


    <div class="form-group">
			<label class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<input type="text" name="statuspen" class="hidden" class="form-control "required>	
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
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
        <li><a href="tambah_penduduk.php">Tambah Penduduk</a></li>

      
        </li>
      </ul>
    </div>
  </div>
</div>
	
	
	<?php
	
	include('../koneksi.php');
	
	
	$id = $_GET['id'];
	
	
	$show = mysql_query("SELECT * FROM data WHERE id_penduduk='$id'");
	
	
	if(mysql_num_rows($show) == 0){
		
	
	}else{
	
		$data = mysql_fetch_array($show);	
	}
	?>
	
	<form action="edit_pendproses.php" method="POST" class="form-horizontal" role="form" novalidate="">	
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="3" cellspacing="0">


		<div class="form-group">
			<label for="id_penduduk" class="col-sm-2 control-label">ID Reg</label>
				<div class="col-sm-2">
				<input type="text" class="form-control" id="id_penduduk" name="id_penduduk" disabled='disable' value="<?php echo $data['id_penduduk']; ?>" required>
				</div>
		</div>
			<div class="form-group">
			<label for="nama" class="col-sm-2 control-label">NO-KK</label>
				<div class="col-sm-2">
				<input type="text" class="form-control" id="nama" name="kk" value="<?php echo $data['kk']; ?>" required>
			</div>
		</div>
		</div>
			<div class="form-group">
			<label for="nama" class="col-sm-2 control-label">Nik</label>
				<div class="col-sm-2">
				<input type="text" class="form-control" id="nama" name="nik" value="<?php echo $data['nik']; ?>" required>
			</div>
		</div>

		<div class="form-group">
			<label for="nama" class="col-sm-2 control-label">nama</label>
				<div class="col-sm-2">
				<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>
				</div>
		</div>

		<div class="form-group">
			<label for="agama" class="col-sm-2 control-label">agama</label>
			<div class="col-sm-2">
			<input type="text" class="form-control" id="agama" name="agama" value="<?php echo $data['agama']; ?>"  required>
			</div>
		</div>

		<div class="form-group">
			<label for="t_lahir" class="col-sm-2 control-label">tempat lahir</label>
				<div class="col-sm-2">
				<input type="text" class="form-control" id="t_lahir" name="t_lahir" value="<?php echo $data['t_lahir']; ?>" required>
				</div>
		</div>

	
		<div class="form-group">
			<label for="j_kel" class="col-sm-2 control-label">j kel</label>
			<div class="col-sm-2">
				<select name="j_kel" class="form-control">
						<option value="L"<?php if($data['j_kel'] == 'L'){ echo 'selected'; } ?>>L</option>
						<option value="P"<?php if($data['j_kel'] == 'P'){ echo 'selected'; } ?>>P</option>
						
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="gol_darah" class="col-sm-2 control-label">golongan darah</label>
			<div class="col-sm-2">
				<select name="gol_darah" class="form-control">
						<option value="A"<?php if($data['gol_darah'] == 'A'){ echo 'selected'; } ?>>A</option>
						<option value="B"<?php if($data['gol_darah'] == 'B'){ echo 'selected'; } ?>>B</option>
						<option value="O"<?php if($data['gol_darah'] == 'O'){ echo 'selected'; } ?>>o</option>
						<option value="AB"<?php if($data['gol_darah'] == 'AB'){ echo 'selected'; } ?>>AB</option>
						
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="w_negara" class="col-sm-2 control-label">negara</label>
			<div class="col-sm-2">
			<input type="text" class="form-control" id="w_negara" name="w_negara" value="<?php echo $data['w_negara']; ?>"  required>
			</div>
		</div>

		<div class="form-group">
			<label for="pendidikan" class="col-sm-2 control-label">pendidikan</label>
				<div class="col-sm-2">
				<input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?php echo $data['pendidikan']; ?>" required>
				</div>
		</div>

		<div class="form-group">
			<label for="pekerjaan" class="col-sm-2 control-label">pekerjaan</label>
			<div class="col-sm-2">
			<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>"  required>
			</div>
		</div>

			<div class="form-group">
			<label for="s_nikah" class="col-sm-2 control-label">status</label>
			<div class="col-sm-2">
				<select name="s_nikah" class="form-control">
						<option value="KAWIN"<?php if($data['s_nikah'] == 'KAWIN'){ echo 'selected'; } ?>>KAWIN</option>
						<option value="BELUM KAWIN"<?php if($data['s_nikah'] == 'BELUM KAWIN'){ echo 'selected'; } ?>>BELUM KAWIN</option>
						<option value="CERAI HIDUP"<?php if($data['s_nikah'] == 'CERAI HIDUP'){ echo 'selected'; } ?>>CERAI HIDUP</option>
						<option value="CERAI MATI"<?php if($data['s_nikah'] == 'CERAI MATI'){ echo 'selected'; } ?>>CERAI MATI</option>		
				</select>
			</div>
		</div>
		

			<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" name="simpan" class="btn btn-danger">Simpan</button>
			</div>
		</div>
		</table>
	</form>
</body>
</html>
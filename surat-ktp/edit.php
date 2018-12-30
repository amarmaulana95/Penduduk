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
	
	
	<?php
	
	include('../koneksi.php');
	
	
	$id = $_GET['id'];
	
	
	$show = mysql_query("SELECT * FROM ktp WHERE nik='$id'");
	
	
	if(mysql_num_rows($show) == 0){
		
	
	}else{
	
		$data = mysql_fetch_array($show);	
	}
	?>
	
	<form action="editktp.php" method="POST" class="form-horizontal" role="form">	
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="3" cellspacing="0">

		<div class="form-group">
			<label for="nik" class="col-sm-2 control-label">no ktp</label>
				<div class="col-sm-2">
				<input type="text" class="form-control" id="nik" name="nik" disabled='disable' value="<?php echo $data['nik']; ?>" required>
				</div>
		</div>

		<div class="form-group">
			<label for="nama" class="col-sm-2 control-label">nama</label>
				<div class="col-sm-2">
				<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>
				</div>
		</div>

		

			<div class="form-group">
			<label for="statusktp" class="col-sm-2 control-label">status</label>
			<div class="col-sm-2">
				<select name="statusktp" class="form-control">
						<option value="baru"<?php if($data['statusktp'] == 'baru'){ echo 'selected'; } ?>>baru</option>
						<option value="perpanjang"<?php if($data['statusktp'] == 'perpanjang'){ echo 'selected'; } ?>>perpanjang</option>
								
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
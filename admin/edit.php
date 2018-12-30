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
      <button type="button" class="navbar-toggle" r-toggle="collapse" r-target=".navbar-collapse">
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
	
	
	$show = mysql_query("SELECT * FROM admin WHERE id='$id'");
	
	
	if(mysql_num_rows($show) == 0){
		
	
	}else{
	
		$r = mysql_fetch_array($show);	
	}
	?>
	
	<form action="editp.php" method="POST" class="form-horizontal" role="form" novalidate="">	
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="3" cellspacing="0">


		<div class="form-group">
			<label for="id" class="col-sm-2 control-label">ID Reg</label>
				<div class="col-sm-2">
				<input type="text" class="form-control" id="id" name="id" disabled='disable' value="<?php echo $r['id']; ?>" required>
				</div>
		</div>
			<div class="form-group">
			<label for="nama" class="col-sm-2 control-label">nama</label>
				<div class="col-sm-2">
				<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $r['nama']; ?>" required>
			</div>
		</div>

		</div>
			<div class="form-group">
			<label for="nama" class="col-sm-2 control-label">tlp</label>
				<div class="col-sm-2">
				<input type="text" class="form-control" id="tlp" name="tlp" value="<?php echo $r['tlp']; ?>" required>
			</div>
		</div>

		<div class="form-group">
			<label for="nama" class="col-sm-2 control-label">Username</label>
				<div class="col-sm-2">
				<input type="text" class="form-control" id="username" name="username" value="<?php echo $r['username']; ?>" required>
				</div>
		</div>

		<div class="form-group">
			<label for="password" class="col-sm-2 control-label">password</label>
			<div class="col-sm-2">
			<input type="text" class="form-control" id="password" name="password" value="<?php echo $r['password']; ?>"  required>
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
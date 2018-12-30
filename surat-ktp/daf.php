<!DOCTYPE html>
<html lang="en">

	<head>

    <title>Desa sirnagalih</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/dataTables.bootstrap.css"/>
    <style type="text/css">
    body {
      min-height: 200px;
      padding-top: 70px;
    }.container {
    padding-right: 15px;
    margin-right: auto;
    margin-left: 50px;
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
    .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus {
    color: #fff;
    background-color: #005401;
    }
    td, th {
    padding: 0;
    text-align: center;
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
      	<li><a href="../index.php">Halaman Awal</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Administrator <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="./admin.php?hlm=user">Profil</a></li>
            <li><a href="./admin.php?hlm=user&sub=pass">Ganti Password</a></li>
            <li class="divider"></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>


	 <div class="container">
    <a class="noprint pull-right btn btn-default" target="blank" href="laporan.php">
  <i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;Cetak laporan</a>

	<h3>Daftar Permohonan KTP</h3>
	<table id="example2" class="table table-striped table-bordered dt-responsive nowrap" width="100%">
    	<thead>
		<tr>
      <th>NO</th>
      <th>Nama</th>
			<th>No.Nik</th>
			<th>alamat</th>
		  <th>Rt</th>
      <th>Rw</th>
      <th>Status</th>
      <th>OPSI</th>
		</tr>
		 </thead>
	<tbody>

		<?php
		include('../koneksi.php');
    $query = mysql_query("SELECT * FROM ktp ORDER BY nama DESC ") or die(mysql_error());
		if(mysql_num_rows($query) == 0){
		echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{
			$no = 1;
			while($data = mysql_fetch_array($query)){
				echo '<tr>';

					echo '<td>'.$no.'</td>';
          echo '<td>'.$data['nama'].'</td>';
					echo '<td>'.$data['nik'].'</td>';
          echo '<td>'.$data['alamatl'].'</td>';
          echo '<td>'.$data['rt'].'</td>';
          echo '<td>'.$data['rw'].'</td>';
          echo '<td>'.$data['statusktp'].'</td>';
          echo '<td>
           <a href="cetakulang.php?id='.$data['nik'].'">
          <span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
          <a href="edit.php?id='.$data['nik'].'">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
          <a href="hps.php?id='.$data['nik'].'" onclick="return confirm(\'Yakin?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>';
          echo '</tr>';
				  $no++;
		    }
		  }
		?>
	</table>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../datatables/jquery.dataTables.js"></script>
        <script src="../datatables/dataTables.bootstrap.js"></script>
        <script src="../js/dataTables.jquery.min.js"></script>
        <script src="../js/bootstrapt.js"></script>
  <script type="text/javascript">
            $(function() {
                $("#example2").dataTable();
            });
        </script>
</body>
</html>

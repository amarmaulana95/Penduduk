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
	<h3 align="center">Daftar Kematian</h3><hr>
	<table id="example2" class="table table-striped table-bordered dt-responsive nowrap" width="100%">
    	<thead>
		<tr>
      <th>No</th>

      <th>Nik</th>
      <th>Nama</th>
      <th>Kelamin</th>
      <th>Umur</th>
			<th>alamat</th>
		  <th>Rt</th>
      <th>Rw</th>
      <th>Tgl Kematian</th>
      <th>Hari</th>
      <th>di</th>
      <th>Ket.Kematian</th>
      <th>OPSI</th>
		</tr>
		 </thead>
	<tbody>
		
		<?php
		include('../koneksi.php');
    include('../fungsi_indotgl.php');

    $query = mysql_query("SELECT * FROM `mati` INNER JOIN `data` ON mati.id_penduduk = data.id_penduduk") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
		echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;	
			while($data = mysql_fetch_array($query)){	

      $tgl = tgl_indo($data['tgl']);
				echo '<tr>';
          echo '<td>'.$no.'</td>';	

          echo '<td>'.$data['nik'].'</td>';
          echo '<td>'.$data['nama'].'</td>';
          echo '<td>'.$data['j_kel'].'</td>'; 
          echo '<td>'.$data['umur'].'</td>';
          echo '<td>'.$data['alamatl'].'</td>';
          echo '<td>'.$data['rt'].'</td>';
          echo '<td>'.$data['rw'].'</td>';
          echo '<td>'.$tgl.'</td>'; 
          echo '<td>'.$data['hari'].'</td>'; 
          echo '<td>'.$data['di'].'</td>'; 
          echo '<td>'.$data['ket'].'</td>'; 
          echo '<td>
          <a href="hapus.php?id='.$data['id_penduduk'].'" onclick="return confirm(\'Data akan di hapus OK/CANCLE?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>';
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
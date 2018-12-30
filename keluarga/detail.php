<?php
ob_start();
session_start();

include('../koneksi.php');
include('../fungsi_indotgl.php');

?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <title>Desa sirnagalih</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
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
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

  
<div class="container">
<?php
      $id = $_GET['id'];
      $_SESSION['shub'] = $id;
      $sql_1 = mysql_query("SELECT * FROM `data` INNER JOIN `kk_anggota` ON data.id_keluarga = kk_anggota.id_keluarga WHERE data.id_keluarga ='$id' AND hubkel LIKE '%ayah'  ") or die(mysql_error());
      $s1 = mysql_fetch_array($sql_1);
        echo '<tr>';
          echo '<h1><b><td><center>No-KARTU KELUARGA '.$s1['kk'].'</td></center></b></h1>'; 

      ?>
  <center><h2>Kepala Keluarga</h2></center>
    <table id="example2" class="table table-bordered table-striped">
      <thead>
         <tr>
           <th>NO-Reg</th>
           <th>Nik</th>
           <th>Nama Kepala-Keluarga</th>
           <th>cetak</th>

          </tr>
      </thead>

    <?php
      $id = $_GET['id'];
      $_SESSION['shub'] = $id;
      $sql_1 = mysql_query("SELECT * FROM `data` INNER JOIN `kk_anggota` ON data.id_keluarga = kk_anggota.id_keluarga WHERE data.id_keluarga ='$id' AND hubkel LIKE '%ayah'  ") or die(mysql_error());
      $s1 = mysql_fetch_array($sql_1);
        echo '<tr>';
          echo '<td>'.$s1['id_keluarga'].'</td>'; 
          echo '<td>'.$s1['nik'].'</td>'; 
          echo '<td>'.$s1['nama'].'</td>';

          echo '<td>
           <a href="cetak.php?id='.$s1['id_keluarga'].'">
           <span class="glyphicon glyphicon-print" aria-hidden="true"></span></a></td>';
          echo '</tr>';

      ?>
     </table>
<p>&nbsp;</p>

<center><h2>Anggota Keluarga</h2></center>
<a href="../modul/tambah2.php">
<span class="glyphicon glyphicon-plus" aria-hidden="true">  TAMBAH ANGGOTA KELUARGA</span></a>
<p>&nbsp;</p>
<a href="../modul/inputlahir.php">
<span class="glyphicon glyphicon-plus" aria-hidden="true"> TAMBAH ANGGOTA KELUARGA + SURAT LAHIR</span></a>
<p>&nbsp;</p>

<table id="example2" class="table table-bordered table-striped">
      <thead>
    <tr>
      <th>NO</th>
      <th>KTP</th>
      <th>NAMA</th>
      <th>AGAMA</th>
      <th>KELAHIRAN</th>
      <th>TGL-LAHIR</th>
      <th>KELAMIN</th>
      <th>HUBUNGAN KELUARGA</th>
      <th>ALAMAT RT/RW</th>
    </tr>
     </thead>
  <tbody>



<?php
$id_keluarga = $s1['id_keluarga'];
$sql_2 = mysql_query("SELECT * FROM `data` WHERE id_keluarga = '$id_keluarga' ORDER BY nama ASC");
$s2 = mysql_num_rows($sql_2);

if($s2 < 1){  
      
      echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
      
    }else{  
      $no = 1;  
      while($data = mysql_fetch_array($sql_2)){
     $tgl_lahir = tgl_indo($data['tgl_lahir']);
        echo '<tr>';
          echo '<tr>';
          echo '<td>'.$no.'</td>';  
          echo '<td>'.$data['id_penduduk'].'</td>'; 
          echo '<td>'.$data['nama'].'</td>';  
          echo '<td>'.$data['agama'].'</td>'; 
          echo '<td>'.$data['t_lahir'].'</td>';
          echo '<td>'.$tgl_lahir.'</td>'; 
          echo '<td>'.$data['j_kel'].'</td>'; 
          echo '<td>'.$data['hubkel'].'</td>';
          echo '<td>'.$data['alamatl'].'</td>';
          echo '</tr>';
        
        $no++;  
        
      }
      
    }
    echo "<tr>Jumlah Anggota keluarga <b>". $s2."</b></tr>";
    ?>
  </table>


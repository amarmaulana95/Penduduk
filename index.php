

<!DOCTYPE html>
<html lang="en">
  <head>

  <title>Desa sirnagalih</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet"  media="screen">
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
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
    .navbar-inverse .navbar-brand {
    color: #FFFFFF;
    }
    .navbar-inverse .navbar-nav>.active>
    a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus {
    color: #fff;
    background-color: #005401;

  }
  img {
    border: 0;
    margin-top: -70px;
    margin-right: -90px;
    margin-left: -80px;
  }
   @media print {
      .noprint {
         display: none;
      }
   }
    </style>

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
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">FORM PENDUDUK<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="modul/tampil.php">DATA PENDUDUK</a></li>
            <li><a href="keluarga/daf_keluarga.php">DATA KELUARGA</a></li>
            <li><a href="surat/daftar.php">DATA PINDAHAN</a></li>
            <li><a href="surat-kematian/datamati.php">DATA KEMATIAN</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">FORM PENGAJUAN<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="surat-ktp/kktp.php">DATA KTP</li>
            <li><a href="surat-kematian/kematian.php">KEMATIAN</a></li>
            <li><a href="surat/pindah.php">PINDAHAN</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Administrator <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="admin/tampil.php">Profil</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

    
    <div class="container">
    <img src="fpdf/logo.png" height="350px" width="350px" 
      align="left"/>
      <div class="jumbotron">
        <h2>Selamat Datang di Sistem Informasi Kelurahan Desa Sirnagalih</h2>
        <h2>Sistem Ini di Buat Untuk Mempermudah & Mengelola data Kependudukan</h2>
      </div>
        </div> <!-- /container -->

<?php 
    include('cek-login.php');

    ?>
      <?php 
      if (!empty($_GET['message']) && $_GET['message'] == 'success') {
         echo '<h3>Berhasil menambah data!</h3>';

    }

    ?>
    <!-- Bootstrap core JavaScript, Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      
    </script>
  </body>

</html>

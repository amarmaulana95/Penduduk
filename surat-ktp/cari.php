<!doctype html>
<html>
    <head>
        <title>From data</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/dataTables.bootstrap.css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../js/jquery.min.js"></script>
        <script src="../css/jquery.min.js"></script>
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

<?php
include "../koneksi.php";
$q=$_POST['q'];
$query=mysql_query("select * from data where nik like '%".$q."%'");
$row=mysql_num_rows($query);
$data=mysql_fetch_array($query);
if ($row > 0)
{
 ?> 
        <div class="control-group">
                <label class="control-label" for="desa"ID</label>
                  <div class="controls">
                    <input type="hidden" id="desa" name="id" class="form-control">
                  </div>
              </div>

             <div class="control-group">
                <label class="control-label" for="desa">Nik Penduduk</label>
                  <div class="controls">
                    <input type="hidden" id="desa" name="nik" class="form-control" value="<?php echo $data['nik'] ?>">
                    <input type="text" id="desa" class="form-control" value="<?php echo $data['nik'] ?>" disabled>
                  </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="nama">Nama</label>
                  <div class="control">
                    <input type="hidden" id="desa" name="nama" class="form-control" value="<?php echo $data['nama'] ?>">
                    <input type="text" id="desa" name="nama" class="form-control" value="<?php echo $data['nama'] ?>" disabled>
                  </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="kk">No.KK</label>
                  <div class="control">
                    <input type="hidden" id="desa" name="kk" class="form-control" value="<?php echo $data['kk'] ?>">
                    <input type="text" id="desa" name="kk" class="form-control" value="<?php echo $data['kk'] ?>" disabled>
                  </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="nama">Alamat</label>
                  <div class="control">
                    <input type="hidden" id="desa" name="alamatl" class="form-control" value="<?php echo $data['alamatl'] ?>">
                    <input type="text" id="desa" class="form-control" value="<?php echo $data['alamatl'] ?>" disabled>
                  </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="nama">RT</label>
                  <div class="control">
                    <input type="hidden" id="desa" name="rt" class="form-control" value="<?php echo $data['rt'] ?>">
                    <input type="text" id="desa" class="form-control" value="<?php echo $data['rt'] ?>" disabled>
                  </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="nama">RW</label>
                  <div class="control">
                    <input type="hidden" id="desa" name="rw" class="form-control" value="<?php echo $data['rw'] ?>">
                    <input type="text" id="desa" class="form-control" value="<?php echo $data['rw'] ?>" disabled>
                  </div>
              </div>
 <?php
}
else{
    echo "Data tidak ditemukan!";
}
?>
</html>

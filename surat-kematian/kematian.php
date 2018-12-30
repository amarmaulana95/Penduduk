<!doctype html>
<html>
    <head>
        <title>From data</title>
        <link href="../css/bootstrap-datetimepicker.min" rel="stylesheet">
        <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/dataTables.bootstrap.css"/>
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


<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-fire"></span>DESA SIRNAGALIH</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="datamati.php">FORM DATA KEMATIAN</a></li>
      </ul>
    </div>
  </div>
</div>
<body>

    <div class="container">
	   <form method="post" action="proses.php" class="form-horizontal" role="form" novalidate>
      <table cellpadding="3" cellspacing="0">

<body>
<script type="text/javascript">
 $(document).ready(function() {
  <!-- event textbox keyup
  $("#cari").keyup(function() {
   var strcari = $("#cari").val(); 
   if (strcari != "") 
   {
    $("#hasil").html("") 
    
    $.ajax({
     type:"post",
     url:"cari.php",
     data:"q="+ strcari,
     success: function(data){
      $("#hasil").html(data);
     }
    });
   }
  });
    });
</script>

  
    <div class="form-group col-sm-4">
      <label for="desa" class="col-sm-6 control-group">Cari Berdasarkan Nama</label>
        <div class="col-sm-12">
        <input type="text" class="form-control" id="cari" name="cari" required autofocus>
          <div id="hasil">
          </div>
        </div>
    </div>
    
 
   
    <br>
    <div class="input-group col-sm-4">
        <span class="input-group-addon" id="desa" >Umur</span>
        <input type="text" class="form-control" id="desa" name="umur" required autofocus>
    </div>
    <br>


<div class="input-group col-sm-7">
  <span class="input-group-addon" id="desa" >Tanggal Kematian</span>
      <div class="input-group">
        <div class='input-group date' id='datepicker2'>
          <input type='date' name='tgl' class="form-control"/>
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
      </div>
  <div class='input-group col-sm-7'>
        </div>
          </div>
           </div>
    <script src="../js/jQuery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/moment.js"></script>
    <script src="../js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
      $(function () {
      $('#datepicker2').datetimepicker({
          format: 'YYYY-DD-MM',
        });
        
      });
    </script>
    </div>

    <br>
    <div class="input-group col-sm-4">
      <span class="input-group-addon">Hari</span> 
        <select  id="desa" name="hari"  class="form-control">
            <option value="senin">Senin</option>
            <option value="selasa">Selasa</option>
            <option value="rabu">Rabu</option>
            <option value="kamis">Kamis</option>
            <option value="jumat">Jumat</option>
            <option value="sabtu">Sabtu</option>
            <option value="minggu">Minggu</option>
        </select>
    </div>
    <br>

  <br>
    <div class="input-group col-sm-4">
      <span class="input-group-addon" id="desa" >di</span>        
      <input type="text" class="form-control" id="desa" name="di" required autofocus>
    </div>
    <br>

      <div class="input-group col-sm-4">
        <span class="input-group-addon" id="desa" >Ket.kematian</span> 
        <textarea name="ket" class="form-control"> </textarea> 
    </div>

<br>
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-10">
			<button type="submit" name="tambah" class="btn btn-warning">Simpan</button>
		</div>
	</div>

<a class="btn" href="index.php" align="center">
<span class="glyphicon glyphicon-arrow-left" style="margin-left: 450px"></span>Kembali</a>


</table>
	</form>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript">
    </script>
  </form>
</body>
</html>
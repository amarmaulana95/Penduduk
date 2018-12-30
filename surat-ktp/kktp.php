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
        <li><a href="daf.php">FORM DATA PERMOHONAN</a></li>
      </ul>
    </div>
  </div>
</div>
<body>

    <div class="container">
	   <form method="post" action="sktp.php" class="form-horizontal" role="form" novalidate>
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

  <div class="form-group">
      <label for="gol_darah" class="col-sm-3 control-label" placeholder="Jenis Permohonan">Permohonan KTP</label>
      <div class="col-sm-3">
        <select name="statusktp" placeholder="Jenis Permohonan" class="form-control">
            <option></option>
            <option value="baru">BARU</option>
            <option value="perpanjang">PERPANJAN</option>
        </select>
      </div>
    </div>

  <div class="form-group">
      <label for="desa" class="col-sm-3 control-label">Cari Berdasarkan NIK</label>
        <div class="col-sm-3">
        <input type="text" class="form-control" id="cari" name="cari" autocomplete=”off” required autofocus>
        <div id="hasil"></div>
        </div>
    </div>

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-10">
			<button type="submit" name="tambah" class="btn btn-danger">Cetak</button>
		</div>
	</div>

<a class="btn" href="index.php" align="center">
<span class="glyphicon glyphicon-arrow-left" style="margin-left: 450px"></span> Kembali</a>


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
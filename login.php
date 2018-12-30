<?php

include('koneksi.php');
?>
<?php
session_start();

if (!empty($_SESSION['username'])) {
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Desa</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	body {
	  padding-top: 40px;
	  padding-bottom: 40px;
	  background-color: #00756a;
	}

	.form-signin {
	  max-width: 330px;
	  padding: 15px;
	  margin: 0 auto;
	}
	.form-signin .form-signin-heading,
	.form-signin .checkbox {
	  margin-bottom: 10px;
	}
	.form-signin .checkbox {
	  font-weight: normal;
	}
	.form-signin .form-control {
	  position: relative;
	  height: auto;
	  -webkit-box-sizing: border-box;
		 -moz-box-sizing: border-box;
			  box-sizing: border-box;
	  padding: 10px;
	  font-size: 16px;

	}
	body {
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #009688;
}
	.form-signin .form-control:focus {
	  z-index: 2;
	}
	.form-signin input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-right-radius: 0;
	  border-bottom-left-radius: 0;
	}
	.form-signin input[type="password"] {
	  margin-bottom: 10px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
	.btn-primary, .btn-primary:hover {
		background-image: linear-gradient(#005401, #005401 6%, #005401);
		border: 1px solid #005401;
	}
	</style>
	
  </head>

  <body>

    <div class="container">
	<?php 

if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '<center><h3>Username dan Password salah!</h3></center>';
	} else if ($_GET['error'] == 2) {
		echo '<h3>Username belum diisi!</h3>';
	} else if ($_GET['error'] == 3) {
		echo '<h3>Password belum diisi!</h3>';
	} else if ($_GET['error'] == 4) {
		echo '<h3>Username dan Password tidak terdaftar!</h3>';
	}
}
?>
      <form class="form-signin" method="post" action="otentikasi.php" role="form" novalidate="">
		
        <h2 class="form-signin-heading"><span class="glyphicon glyphicon-fire"></span>login</h2>
        <input type="text" name="username" title="harus di isi" class="form-control" placeholder="Username" autocomplete="off" required autofocus>
        <input type="password" name="password" class="form-control" title="isi yang benar" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
      </form>
	<?php
	
	?>
    </div> <!-- /container -->
	
	<!-- Bootstrap core JavaScript, Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript">
		$(".alert-message").alert().delay(3000).slideUp('slow');
	</script>
  </body>
</html>
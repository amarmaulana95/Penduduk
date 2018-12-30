<?php

	if(isset($_GET['id'])){
	include("../koneksi.php");
	$id = $_GET['id'];
	$cek = mysql_query("SELECT id FROM admin WHERE id='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM admin WHERE id='$id'");
		header("location:tampil.php");
	}
}
?>
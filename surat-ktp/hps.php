<?php

if(isset($_GET['id'])){
	include("../koneksi.php");
	$id = $_GET['id'];
	$cek = mysql_query("SELECT nik FROM ktp WHERE nik='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){

	}else{
	$del = mysql_query("DELETE FROM ktp WHERE nik='$id'");
		header("location:daf.php");		
	}
}
?>

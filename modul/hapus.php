<?php

	if(isset($_GET['id'])){
	include("../koneksi.php");
	$id = $_GET['id'];
	$cek = mysql_query("SELECT id_penduduk FROM data WHERE id_penduduk='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM data WHERE id_penduduk='$id'");
		header("location:tampil.php");
	}
}
?>
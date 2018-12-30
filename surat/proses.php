<?php


if(isset($_POST['tambah'])){
	include('../koneksi.php');

	$idsurat = $_POST['idsurat'];

	$id_penduduk = $_POST['id_penduduk'];	

	$kode = $_POST['kode'];		
	$tujuan		= $_POST['tujuan'];
	
	$input = mysql_query("INSERT INTO pindah(idsurat,kode,id_penduduk,tujuan) VALUES
	('$idsurat','$kode','$id_penduduk','$tujuan')") or die(mysql_error());

	mysql_query("UPDATE `projek`.`data` SET `statuspen` = 'Pindah' WHERE `data`.`id_penduduk` = '$id_penduduk' ");

		
		header("location:daftar.php");
}
?>
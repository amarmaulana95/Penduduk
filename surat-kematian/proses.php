<?php


if(isset($_POST['tambah'])){
	include('../koneksi.php');
	$id		= $_POST['id'];
	$id_penduduk = $_POST['id_penduduk'];
	$nik = $_POST['nik'];
	$umur	= $_POST['umur'];
	$tgl	= $_POST['tgl'];
	$hari	= $_POST['hari'];
	$di	= $_POST['di'];
	$ket	= $_POST['ket'];
	
	$input = mysql_query("INSERT INTO mati VALUES
	('$id', '$id_penduduk', '$nik', '$umur', '$tgl', '$hari', '$di', '$ket')") or die(mysql_error());

	mysql_query("UPDATE `projek`.`data` SET `statuspen` = 'meninggal' WHERE `data`.`id_penduduk` = '$id_penduduk' ");

	if($input){

		header("location:datamati.php");
	}
}

?>
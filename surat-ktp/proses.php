<?php


if(isset($_POST['tambah'])){
	include('../koneksi.php');

	$id		= $_POST['id'];	
	$nama		= $_POST['nama'];	
	$id_penduduk = $_POST['id_penduduk'];
	$kk = $_POST['kk'];	
	$alamatl	= $_POST['alamatl'];
	$rt	= $_POST['rt'];
	$rw	= $_POST['rw'];
	$statusktp	= $_POST['statusktp'];
	
	$input = mysql_query("INSERT INTO ktp(id,nama,id_penduduk,kk,alamatl,rt,rw,statusktp) VALUES
	('$id', '$nama', '$id_penduduk', '$kk', '$alamatl', '$rt', '$rw', '$statusktp')") or die(mysql_error());



}

?>
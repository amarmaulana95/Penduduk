<?php

if(isset($_POST['simpan'])){
	include("../koneksi.php");
	$id         = $_POST['id'];	
	$nama		= $_POST['nama'];	
	$statusktp	= $_POST['statusktp'];
	$update = mysql_query("UPDATE ktp SET nama='$nama', statusktp='$statusktp' WHERE nik='$id'") or die(mysql_error());
	if($update){
		echo 'Data berhasil di simpan! ';		
		echo '<a href="daf.php?id='.$id.'">Kembali</a>';	
		}else{
		echo 'Gagal menyimpan data! ';		
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	
	}
}else{	
	echo '<script>window.history.back()</script>';
}
?>
<?php

if(isset($_POST['simpan'])){
	
	
	include("../koneksi.php");

	$id         = $_POST['id'];	
	$nama		= $_POST['nama'];
	$tlp		= $_POST['tlp'];
	$username		= $_POST['username'];	
	$password	= $_POST['password'];
	
	
	$update = mysql_query("UPDATE admin SET nama='$nama', tlp='$tlp', username='$username', password='$password'") or die(mysql_error());
	

	if($update){
		
		echo 'Data berhasil di Ubah! ';		
		echo '<a href="tampil.php?id='.$id.'">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="editp.php?id='.$id.'">Kembali</a>';	
	}

}else{	

	
	echo '<script>window.history.back()</script>';

}
?>
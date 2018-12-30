<?php


if(isset($_POST['tambah'])){
	
	
	include('../koneksi.php');
	
	
	$id = $_POST['id'];	
	$nama = $_POST['nama'];	
	$tlp = $_POST['tlp'];	
	$username	= $_POST['username'];	
	$password	= $_POST['password'];
	

$input = mysql_query("INSERT INTO admin VALUES ('$id', '$nama', '$tlp', '$username', '$password')") or die(mysql_error());
	
	if($input){ 
				echo 'Data berhasil di tambahkan! ';		
		echo '<a href="tampil.php">Kembali</a>';	
	}else{
		
		echo 'Gagal menambahkan data! ';		
		echo '<a href="tambah.php">Kembali</a>';	
		
	}

}else{	

	
	echo '<script>window.history.back()</script>';

}
?>
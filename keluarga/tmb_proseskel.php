<?php


if(isset($_POST['tambah'])){
	
	
	include('../koneksi.php');
	
	
	$id_keluarga = $_POST['id_keluarga'];	
	$nik = $_POST['nik'];	
	$kepala_keluarga = $_POST['kepala_keluarga'];	
	$alamat	= $_POST['alamat'];	
	$rw	= $_POST['rt'];
	$rt	= $_POST['rw'];	
	$ekonomi = $_POST['ekonomi'];

$input = mysql_query("INSERT INTO keluarga VALUES ('$id_keluarga', '$nik', '$kepala_keluarga', '$alamat', '$rt', '$rw', '$ekonomi')") or die(mysql_error());
	
	if($input){ 
				echo 'Data berhasil di tambahkan! ';		
		echo '<a href="daf_keluarga.php">Kembali</a>';	
	}else{
		
		echo 'Gagal menambahkan data! ';		
		echo '<a href="tmb_kel.php">Kembali</a>';	
		
	}

}else{	

	
	echo '<script>window.history.back()</script>';

}
?>
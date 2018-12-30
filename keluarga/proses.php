<?php


if(isset($_POST['tambah'])){
	
	
	include('../koneksi.php');
	
	
	//$id_keluarga = $_POST['id_keluarga'];	
		//$id_penduduk = $_POST['id_penduduk'];	


$input = mysql_query("INSERT INTO keluarga VALUES (NULL)") or die(mysql_error());
	
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
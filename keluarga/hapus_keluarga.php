<?php

if(isset($_GET['id'])){
	
	
	include("../koneksi.php");
	
	
	$id = $_GET['id'];
	
	
	$cek = mysql_query("SELECT id_keluarga FROM kk_anggota WHERE id_keluarga='$id'") or die(mysql_error());
	
	
	if(mysql_num_rows($cek) == 0){
		
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		
		$del = mysql_query("DELETE FROM kk_anggota WHERE id_keluarga='$id'");
		
		
		if($del){
			
			echo 'Data Berhasil hapus! ';		
			echo '<a href="daf_keluarga.php">Kembali</a>';	
			
		}else{
			
			echo 'Gagal menghapus data! ';		
			echo '<a href="index.php">Kembali</a>';	
		
		}
		
	}
	
}else{
	
	echo '<script>window.history.back()</script>';
	
}
?>
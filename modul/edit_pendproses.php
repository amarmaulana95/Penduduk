<?php

if(isset($_POST['simpan'])){
	
	
	include("../koneksi.php");

	$id         = $_POST['id'];	
	$kk		= $_POST['kk'];
	$nik		= $_POST['nik'];
	$nama		= $_POST['nama'];	
	$agama		= $_POST['agama'];	
	$t_lahir	= $_POST['t_lahir'];
	$j_kel		= $_POST['j_kel'];
	$gol_darah	= $_POST['gol_darah'];	
	$w_negara	= $_POST['w_negara'];	
	$pendidikan	= $_POST['pendidikan'];
	$pekerjaan	= $_POST['pekerjaan'];	
	$s_nikah	= $_POST['s_nikah'];	
	
	
	$update = mysql_query("UPDATE data SET  kk='$kk', nik='$nik', nama='$nama', agama='$agama', t_lahir='$t_lahir', j_kel='$j_kel', gol_darah='$gol_darah', w_negara='$w_negara', pendidikan='$pendidikan', pekerjaan='$pekerjaan', s_nikah='$s_nikah' WHERE id_penduduk='$id'") or die(mysql_error());
	

	if($update){
		
		echo 'Data berhasil di simpan! ';		
		echo '<a href="tampil.php?id='.$id.'">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="edit_pend.php?id='.$id.'">Kembali</a>';	
	}

}else{	

	
	echo '<script>window.history.back()</script>';

}
?>
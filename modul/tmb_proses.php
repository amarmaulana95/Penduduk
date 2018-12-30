<?php

ob_start();
session_start();

if(isset($_POST['tambah'])){
	
	
	include('../koneksi.php');
	
	
	//$id_penduduk= $_POST['id_penduduk'];
	$nik		= $_POST['nik'];	
	$kk		= $_POST['kk'];		
	$nama		= $_POST['nama'];	
	$agama		= $_POST['agama'];	
	$t_lahir	= $_POST['t_lahir'];
	$tgl_lahir	= $_POST['tgl_lahir'];	
	$j_kel		= $_POST['j_kel'];
	$gol_darah	= $_POST['gol_darah'];	
	$w_negara	= $_POST['w_negara'];	
	$pendidikan	= $_POST['pendidikan'];
	$pekerjaan	= $_POST['pekerjaan'];	
	$s_nikah	= $_POST['s_nikah'];
	$hubkel		= $_POST['hubkel'];
	$alamatl	= $_POST['alamatl'];
	$rt	= $_POST['rt'];
	$rw	= $_POST['rw'];

    $nayah  = $_POST['nayah'];
    $nibu  = $_POST['nibu'];
	$pas	= $_POST['pas'];
	$kitap	= $_POST['kitap'];
	$id_keluarga = $_POST['id_keluarga'];
	$statuspen =$_POST['statuspen'];

    $_SESSION['idk'] = $_POST['id_keluarga'];
    $_SESSION['anggota'] = $_POST['kk'];
    if ($hubkel == 'ayah') {

    $input = mysql_query("INSERT INTO data VALUES
	(NULL, '$nik', '$kk', '$nama', '$agama', '$t_lahir', '$tgl_lahir', '$j_kel', 
	'$gol_darah', '$w_negara', '$pendidikan', '$pekerjaan', '$s_nikah', '$hubkel', '$alamatl', '$rt', '$rw', '$nayah', '$nibu', '$pas', '$kitap',
	'$id_keluarga', '$statuspen')") or die(mysql_error());
	header("location:tampil.php");

    }else{ 
	$input = mysql_query("INSERT INTO data VALUES
	(NULL, '$nik', '$kk', '$nama', '$agama', '$t_lahir', '$tgl_lahir', '$j_kel', 
	'$gol_darah', '$w_negara', '$pendidikan', '$pekerjaan', '$s_nikah', '$hubkel', '$alamatl', '$rt', '$rw', '$nayah', '$nibu', '$pas', '$kitap',
	'$id_keluarga', '$statuspen')") or die(mysql_error());

	$input2 = mysql_query("INSERT INTO kk_anggota VALUES 
	(NULL, '$id_keluarga', '$kk' )") or die(mysql_error());

	 header("location:tambah2.php");

    }
	
	
	


	

}

?>
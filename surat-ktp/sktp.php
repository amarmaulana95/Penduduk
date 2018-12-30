<?php
include "../koneksi.php";
require('../fpdf/fpdf.php');


//Create a new PDF file
$pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
//$pdf->Image('../foto/logo.png',10,10,-175);

$pdf->SetFont('Arial','B',9);

            $pdf->SetX(35);
            $pdf->MultiCell(140.80,5.20,'FORMULIR PERMOHONAN TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA',0,'C');
            $pdf->ln(1);

	$id		= $_POST['id'];	
	$nama		= $_POST['nama'];	
	$kk = $_POST['kk'];
	$nik = $_POST['nik'];	
	$alamatl	= $_POST['alamatl'];
	$rt	= $_POST['rt'];
	$rw	= $_POST['rw'];
	$statusktp	= $_POST['statusktp'];
	
	$input = mysql_query("INSERT INTO ktp VALUES
	('$id','$nama', '$nik', '$kk', '$alamatl', '$rt', '$rw', '$statusktp')") or die(mysql_error());

$column_id = "";
$column_permohonan = "";
$column_nama = "";
$column_kk = "";
$column_nik = "";
$column_alamatl = "";
$column_rt = "";
$column_rw = "";



$column_id = $column_id.$id."\n";
$column_nama = $column_nama.$nama."\n";
$column_kk = $column_kk.$kk. "\n";
$column_nik = $column_nik.$nik. "\n";
$column_alamatl = $column_alamatl.$alamatl."\n";
$column_rt = $column_rt.$rt. "\n";
$column_rw = $column_rw.$rw. "\n";
	
//Fields Name position

$KD_Fields_Name_position = 5;
$Y_Fields_Name_position = 20;
$A_Fields_Name_position = 40;
$B_Fields_Name_position = 45;
$C_Fields_Name_position = 50;
$D_Fields_Name_position = 55;
$E_Fields_Name_position = 60;
$F_Fields_Name_position = 70;
$G_Fields_Name_position = 77;
$H_Fields_Name_position = 84;
$I_Fields_Name_position = 91;
$J_Fields_Name_position = 99;
$K_Fields_Name_position = 99;

$FOTO_Fields_Name_position = 110;
$CAPJ_Fields_Name_position = 110;
$ttd_Fields_Name_position = 110;
$ttd1_Fields_Name_position = 102;
$ttd2_Fields_Name_position = 120;
$ttd3_Fields_Name_position = 130;
$ttd4_Fields_Name_position = 160;



$pdf->SetFont('Arial','B',8);
$pdf->Ln();

$pdf->SetY($KD_Fields_Name_position);
$pdf->SetX(185);
$pdf->Cell(15,5,'F-1.21',1,0,'C',0); //KET

$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(10);
$pdf->Cell(190,15,'Perhatian !   Harap di isi dengan baik, Lalu setelah formulir di tandatangani , harap di serahkan kembali ke Kantor Desa/Kelurahan.',1,0,'C',0); //KET


//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,230,290);
//Bold Font for Field Name
$pdf->SetFont('Arial','',9);
$pdf->Ln();

$pdf->SetY($A_Fields_Name_position);
$pdf->SetX(10);
$pdf->Cell(20,8,'PROVINSI 																																													:',0,'C',1);

$pdf->SetY($B_Fields_Name_position);
$pdf->SetX(10);
$pdf->Cell(20,8,'PEMERINTAH KABUPATEN/KOTA 					:',0,'C',1);

$pdf->SetY($C_Fields_Name_position);
$pdf->SetX(10);
$pdf->Cell(20,8,'KECAMATAN 																																			     :',0,'C',1);

$pdf->SetY($D_Fields_Name_position);
$pdf->SetX(10);
$pdf->Cell(20,8,'DESA 																												   																				 :',0,'C',1);


$pdf->SetY($E_Fields_Name_position);
$pdf->SetX(9);
$pdf->Cell(20,8,' PERMOHONAN KTP     																							 :',0,'C',1);

$pdf->Ln();
$pdf->SetY($F_Fields_Name_position);
$pdf->SetX(10);
$pdf->Cell(40,6,'                        Nama Lengkap 																			               :',1,0,'C',0);
$pdf->SetY($G_Fields_Name_position);
$pdf->SetX(10);
$pdf->Cell(40,6,'     																			NO.KK 																												                   :',1,0,'C',0);
$pdf->SetY($H_Fields_Name_position);
$pdf->SetX(10);
$pdf->Cell(40,6,'																							 NIK																																																				 :',1,0,'C',0);
$pdf->SetY($I_Fields_Name_position);
$pdf->SetX(10);
$pdf->Cell(40,6,'      			            		Alamat 																																								 					  :',1,0,'C',0);

$pdf->SetY($J_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(10,5,'RT ',1,0,'C',0);
$pdf->SetY($K_Fields_Name_position);
$pdf->SetX(115);
$pdf->Cell(10,5,'RW ',1,0,'C',0);
$pdf->SetY($FOTO_Fields_Name_position);
$pdf->SetX(10);
$pdf->Cell(30,30,'Foto (2x3) ',1,0,'C',0);
$pdf->SetY($CAPJ_Fields_Name_position);
$pdf->SetX(40);
$pdf->Cell(30,30,'Cap Jempol ',1,0,'C',0);
$pdf->SetY($ttd_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(50,25,'Tanda tangan',1,0,'C',0);

$pdf->SetY($ttd1_Fields_Name_position);
$pdf->SetX(120);
$pdf->Cell(50,25,'(Pemohon)',0,'C',0);

$pdf->SetY($ttd2_Fields_Name_position);
$pdf->SetX(130);
$pdf->Cell(50,25,'(.....................................)',0,'C',0);

$pdf->SetY($ttd3_Fields_Name_position);
$pdf->SetX(60);
$pdf->Cell(50,25,'Camat 	.........................',0,'C',0);

$pdf->SetY($ttd3_Fields_Name_position);
$pdf->SetX(140);
$pdf->Cell(50,25,'Kepala Desa/Lurah	: AMAT SUPARTA',0,'C',0);

$pdf->SetY($ttd4_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(55,25,'[NIP.................................................................]',0,'C',0);

$pdf->SetY($ttd4_Fields_Name_position);
$pdf->SetX(140);
$pdf->Cell(55,25,'[NIP.................................................................]',0,'C',0);

//Table position, under Fields Name
$Y_Table_Position = 150;
$M_Table_Position = 41;
$N_Table_Position = 46;
$O_Table_Position = 51;
$P_Table_Position = 56;
$Q_Table_Position = 62;
$R_Table_Position = 70;
$S_Table_Position = 77;
$T_Table_Position = 84;
$U_Table_Position = 91;
$V_Table_Position = 99;
$W_Table_Position = 99;

//Now show the columns
$pdf->SetFont('Arial','',10);


$pdf->SetY($M_Table_Position);
$pdf->SetX(100);
$pdf->MultiCell(100,5,'Jawa Barat',1,'C');

$pdf->SetY($N_Table_Position);
$pdf->SetX(100);
$pdf->MultiCell(100,5,'Bogor',1,'C');

$pdf->SetY($O_Table_Position);
$pdf->SetX(100);
$pdf->MultiCell(100,5,'Tamansari',1,'C');

$pdf->SetY($P_Table_Position);
$pdf->SetX(100);
$pdf->MultiCell(100,5,'Sirnagalih',1,'C');



$pdf->SetY($Q_Table_Position);
$pdf->SetX(70);
$pdf->MultiCell(30,5,$_POST['statusktp'],1,'C');

$pdf->SetY($R_Table_Position);
$pdf->SetX(70);
$pdf->Cell(130,5,$column_nama,1,'C');


$pdf->SetY($S_Table_Position);
$pdf->SetX(70);
$pdf->Cell(90,5,$column_kk,1,'C');

$pdf->SetY($T_Table_Position);
$pdf->SetX(70);
$pdf->Cell(90,5,$column_nik,1,'C');

$pdf->SetY($U_Table_Position);
$pdf->SetX(70);
$pdf->Cell(130,5,$column_alamatl,1,'C');

$pdf->SetY($V_Table_Position);
$pdf->SetX(82);
$pdf->MultiCell(25,5,$column_rt,1,'C');

$pdf->SetY($W_Table_Position);
$pdf->SetX(127);
$pdf->MultiCell(25,5,$column_rw,1,'C');


$pdf->Output();
?>
 
<?php
include('../koneksi.php');
include('../fungsi_indotgl.php');
require('../fpdf/fpdf.php');
?>

<?php
$id = $_GET['id'];
$result=mysql_query("SELECT * FROM `data` INNER JOIN `kk_anggota` ON data.id_keluarga = kk_anggota.id_keluarga 
                    where data.id_keluarga ='$_GET[id]' GROUP BY id_penduduk ") or die(mysql_error());

$column_id_penduduk = "";
$column_nik= "";
$column_nama = "";
$column_agama = "";
$column_t_lahir = "";
$column_tgl_lahir = "";
$column_j_kel = "";
$column_gol_darah = "";
$column_w_negara = "";
$column_pas = "";
$column_kitap = "";
$column_pendidikan = "";
$column_pekerjaan = "";
$column_s_nikah = "";
$column_hubkel = "";
$column_id_keluarga= "";
$column_nayah = "";
$column_nibu = "";

while($row = mysql_fetch_array($result))

{
    $id_penduduk = $row["id_penduduk"];
    $nama = $row["nama"];
    $agama = $row["agama"];
    $t_lahir = $row["t_lahir"];
    $tgl_lahir = tgl_indo($row['tgl_lahir']);
    $j_kel = $row["j_kel"];
    $gol_darah = $row["gol_darah"];
    $w_negara = $row["w_negara"];
    $pas = $row["pas"];
    $kitap = $row["kitap"];
    $pendidikan = $row["pendidikan"];
    $pekerjaan = $row["pekerjaan"];
    $s_nikah = $row["s_nikah"];
    $hubkel = $row["hubkel"];
    $id_keluarga = $row["id_keluarga"];
    $nik = $row["nik"];
    $nayah = $row["nayah"];
    $nibu = $row["nibu"];



$column_id_penduduk = $column_id_penduduk.$id_penduduk. "\n";
$column_nama = $column_nama.$nama."\n";
$column_agama = $column_agama.$agama."\n";
$column_t_lahir = $column_t_lahir.$t_lahir. "\n";
$column_tgl_lahir = $column_tgl_lahir.$tgl_lahir. "\n";
$column_j_kel = $column_j_kel.$j_kel. "\n";
$column_gol_darah = $column_gol_darah.$gol_darah. "\n";
$column_w_negara = $column_w_negara.$w_negara."\n";
$column_pas = $column_pas.$pas."\n";
$column_kitap = $column_kitap.$kitap."\n";
$column_pendidikan = $column_pendidikan.$pendidikan."\n";
$column_pekerjaan = $column_pekerjaan.$pekerjaan."\n";
$column_s_nikah = $column_s_nikah.$s_nikah."\n";
$column_hubkel = $column_hubkel.$hubkel."\n";
$column_id_keluarga= $column_id_keluarga.$id_keluarga."\n";

$column_nik= $column_nik.$nik."\n";
$column_nayah= $column_nayah.$nayah."\n";
$column_nibu= $column_nibu.$nibu."\n";
 

//Create a new PDF file
$pdf = new FPDF('L','mm',array(210,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
//$pdf->Image('../foto/logo.png',10,10,-175);

$pdf->SetFont('Arial','B',13);
$pdf->Image('../fpdf/baldes.jpg',5,5,20,20);

            $pdf->SetX(35);
            $pdf->MultiCell(120.10,5.20,'DESA SIRNAGALIH KECAMATAN TAMANSARI',0,'L');
            
            $pdf->SetX(35);
            $pdf->MultiCell(90.5,5.10,'Pemerintah Kota Bogor',0,'L');
            
            $pdf->Line(2,25.2,291.5,25.2);
            $pdf->SetLineWidth(0.5);
            $pdf->Line(3,25.3,291.5,25.3);

    
            
            $pdf->SetLineWidth(0.10);



}

//Fields Name position

$KODE_Fields_Name_position = 15;
$KK_Fields_Name_position = 25;
$Y_Fields_Name_position = 60;
$Z_Fields_Name_position = 105;
$A_Fields_Name_position = 35;
$B_Fields_Name_position = 40;
$C_Fields_Name_position = 45;
$D_Fields_Name_position = 50;
$E_Fields_Name_position = 70;
$dok_Fields_Name_position = 110;
$pas_Fields_Name_position = 113;
$kitap_Fields_Name_position = 113;
$ayah_Fields_Name_position = 113;
$ibu_Fields_Name_position = 113;
$a_Fields_Name_position = 68;
$b_Fields_Name_position = 121;


$pdf->SetFont('Arial','',12);
$pdf->SetY($KODE_Fields_Name_position);
$pdf->SetX(250);
$pdf->Cell(25,8,'K-320130093',0,'C',1);


$pdf->SetFont('Arial','B',13);
$pdf->SetY($KK_Fields_Name_position);
$pdf->SetX(125);
$pdf->Cell(25,8,'KARTU KELUARGA',0,'C',1);

$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','B',9);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(50,8,'Nama',1,0,'C',1);
$pdf->SetX(55);
$pdf->Cell(35,8,'Nik',1,0,'C',1);
$pdf->SetX(90);
$pdf->Cell(30,8,'Jenis Kelamin',1,0,'C',1);
$pdf->SetX(120);
$pdf->Cell(30,8,'Kelahiran',1,0,'C',1);
$pdf->SetX(150);
$pdf->Cell(35,8,'Tanggal Lahir',1,0,'C',1);
$pdf->SetX(185);
$pdf->Cell(25,8,'Agama',1,0,'C',1);
$pdf->SetX(210);
$pdf->Cell(40,8,'Pendidikan',1,0,'C',1);
$pdf->SetX(250);
$pdf->Cell(40,8,'Pekerjaan',1,0,'C',1);

$pdf->SetY($A_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(30,8,'kepala Keluarga',0,'C',1);

$pdf->SetY($B_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(30,8,'Alamat',0,'C',1);

$pdf->SetY($C_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(30,8,'Rt/Rw',0,'C',1);

$pdf->SetY($D_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(30,8,'Desa / Kelurahan',0,'C',1);

$pdf->SetY($Z_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(30,16,'S-perkawinan',1,0,'C',1);

$pdf->SetY($Z_Fields_Name_position);
$pdf->SetX(35);
$pdf->Cell(45,16,'Hubungan Pernikahan',1,0,'C',1);
$pdf->SetY($Z_Fields_Name_position);
$pdf->SetX(80);
$pdf->Cell(40,16,'Kewarganegaraan',1,0,'C',1);



$pdf->SetY($Z_Fields_Name_position);
$pdf->SetX(120);
$pdf->Cell(80,8,'Dokumen Imigrasi',1,0,'C',1);

$pdf->SetY($pas_Fields_Name_position);
$pdf->SetX(120);
$pdf->Cell(40,8,'No.Paspor',1,0,'C',1);

$pdf->SetY($kitap_Fields_Name_position);
$pdf->SetX(160);
$pdf->Cell(40,8,'No.KITAS/KITAP',1,0,'C',1);

$pdf->SetY($Z_Fields_Name_position);
$pdf->SetX(200);
$pdf->Cell(90,8,'Nama Orang Tua',1,0,'C',1);

$pdf->SetY($ayah_Fields_Name_position);
$pdf->SetX(200);
$pdf->Cell(45,8,'Nama Ayah',1,0,'C',1);

$pdf->SetY($ibu_Fields_Name_position);
$pdf->SetX(245);
$pdf->Cell(45,8,'Nama Ibu',1,0,'C',1);




$pdf->SetY($A_Fields_Name_position);
$pdf->SetX(230);
$pdf->Cell(30,8,'Kecamatan',0,'R',1);

$pdf->SetY($B_Fields_Name_position);
$pdf->SetX(230);
$pdf->Cell(30,8,'Kabupaten',0,'R',1);

$pdf->SetY($C_Fields_Name_position);
$pdf->SetX(230);
$pdf->Cell(30,8,'Kode Pos',0,'R',1);

$pdf->SetY($D_Fields_Name_position);
$pdf->SetX(230);
$pdf->Cell(30,8,'Provinsi',0,'R',1);


$pdf->SetY($A_Fields_Name_position);
$pdf->SetX(250);
$pdf->Cell(30,8,':',0,'R',1);

$pdf->SetY($B_Fields_Name_position);
$pdf->SetX(250);
$pdf->Cell(30,8,':',0,'R',1);

$pdf->SetY($C_Fields_Name_position);
$pdf->SetX(250);
$pdf->Cell(30,8,':',0,'R',1);

$pdf->SetY($D_Fields_Name_position);
$pdf->SetX(250);
$pdf->Cell(30,8,':',0,'R',1);



$pdf->SetY($A_Fields_Name_position);
$pdf->SetX(55);
$pdf->Cell(30,8,':',0,'R',1);

$pdf->SetY($B_Fields_Name_position);
$pdf->SetX(55);
$pdf->Cell(30,8,':',0,'R',1);

$pdf->SetY($C_Fields_Name_position);
$pdf->SetX(55);
$pdf->Cell(30,8,':',0,'R',1);

$pdf->SetY($D_Fields_Name_position);
$pdf->SetX(55);
$pdf->Cell(30,8,':',0,'R',1);



$pdf->SetY($a_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(50,7,'(1)',1,0,'C',1);
$pdf->SetY($a_Fields_Name_position);
$pdf->SetX(55);
$pdf->Cell(35,7,'(2)',1,0,'C',1);
$pdf->SetY($a_Fields_Name_position);
$pdf->SetX(90);
$pdf->Cell(30,7,'(3)',1,0,'C',1);
$pdf->SetY($a_Fields_Name_position);
$pdf->SetX(120);
$pdf->Cell(30,7,'(4)',1,0,'C',1);
$pdf->SetY($a_Fields_Name_position);
$pdf->SetX(150);
$pdf->Cell(35,7,'(5)',1,0,'C',1);
$pdf->SetY($a_Fields_Name_position);
$pdf->SetX(185);
$pdf->Cell(25,7,'(6)',1,0,'C',1);
$pdf->SetY($a_Fields_Name_position);
$pdf->SetX(210);
$pdf->Cell(40,7,'(7)',1,0,'C',1);
$pdf->SetY($a_Fields_Name_position);
$pdf->SetX(250);
$pdf->Cell(40,7,'(8)',1,0,'C',1);
$pdf->SetY($b_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(30,7,'(9)',1,0,'C',1);
$pdf->SetY($b_Fields_Name_position);
$pdf->SetX(35);
$pdf->Cell(45,7,'(10)',1,0,'C',1);
$pdf->SetY($b_Fields_Name_position);
$pdf->SetX(80);
$pdf->Cell(40,7,'(11)',1,0,'C',1);
$pdf->SetY($b_Fields_Name_position);
$pdf->SetX(120);
$pdf->Cell(40,7,'(12)',1,0,'C',1);
$pdf->SetY($b_Fields_Name_position);
$pdf->SetX(160);
$pdf->Cell(40,7,'(13)',1,0,'C',1);
$pdf->SetY($b_Fields_Name_position);
$pdf->SetX(200);
$pdf->Cell(45,7,'(14)',1,0,'C',1);
$pdf->SetY($b_Fields_Name_position);
$pdf->SetX(245);
$pdf->Cell(45,7,'(15)',1,0,'C',1);


$pdf->Ln();


//Table position, under Fields Name
$Y_Table_Position = 75;
$Z_Table_Position = 128;
$amat_Table_Position = 170;

$pdf->SetFont('Arial','',8);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(50,5,$column_nama,1,'C');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(55);
$pdf->MultiCell(35,5,$column_nik,1,'C');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(90);
$pdf->MultiCell(30,5,$column_j_kel,1,'C');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(120);
$pdf->MultiCell(30,5,$column_t_lahir,1,'C');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(150);
$pdf->MultiCell(35,5,$column_tgl_lahir,1,'C');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(185);
$pdf->MultiCell(25,5,$column_agama,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(210);
$pdf->MultiCell(40,5,$column_pendidikan,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(250);
$pdf->MultiCell(40,5,$column_pekerjaan,1,'C');


$pdf->SetY($Z_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(30,5,$column_s_nikah,1,'C');

$pdf->SetY($Z_Table_Position);
$pdf->SetX(35);
$pdf->MultiCell(45,5,$column_hubkel,1,'C');

$pdf->SetY($Z_Table_Position);
$pdf->SetX(80);
$pdf->MultiCell(40,5,$column_w_negara,1,'C');

$pdf->SetY($Z_Table_Position);
$pdf->SetX(120);
$pdf->MultiCell(40,5,$column_pas,1,'C');

$pdf->SetY($Z_Table_Position);
$pdf->SetX(160);
$pdf->MultiCell(40,5,$column_kitap,1,'C');

$pdf->SetY($Z_Table_Position);
$pdf->SetX(200);
$pdf->MultiCell(45,5,$column_nayah,1,'C');

$pdf->SetY($Z_Table_Position);
$pdf->SetX(245);
$pdf->MultiCell(45,5,$column_nibu,1,'C');
            
            $pdf->SetY($amat_Table_Position);
            $pdf->SetX(10);
            $pdf->SetFont('Arial','B',10);
            $pdf->MultiCell(180.10,5.10,'Kepala Keluarga ',0,'C');
            $pdf->ln();
            $pdf->SetY($amat_Table_Position);
            $pdf->SetX(50);
            $pdf->SetFont('Arial','B',10);
            $pdf->MultiCell(180.10,5.10,'(......................................... )',0,'C');
            $pdf->SetY($amat_Table_Position);
            $pdf->SetX(110);
            $pdf->SetFont('Arial','B',10);
            $pdf->MultiCell(180.10,5.10,'Kepala Dinas Dan Pencatatan sipil ',0,'C');
            $pdf->ln();
            $pdf->SetY($amat_Table_Position);
            $pdf->SetX(170);
            $pdf->SetFont('Arial','B',10);
            $pdf->MultiCell(180.10,5.10,'(......................................... )',0,'C');
            $pdf->ln();

?>

<?php
$id = $_GET['id'];
$result=mysql_query("SELECT * FROM `data` INNER JOIN `kk_anggota` ON data.id_keluarga = kk_anggota.id_keluarga 
                    where data.id_keluarga ='$_GET[id]' AND hubkel='ayah' GROUP BY id_penduduk ") or die(mysql_error());

$column_id_penduduk = "";
$column_nik= "";
$column_nama = "";
$column_agama = "";
$column_t_lahir = "";
$column_tgl_lahir = "";
$column_j_kel = "";
$column_gol_darah = "";
$column_w_negara = "";
$column_pas = "";
$column_kitap = "";
$column_pendidikan = "";
$column_pekerjaan = "";
$column_s_nikah = "";
$column_hubkel = "";
$column_alamatl = "";
$column_rt = "";
$column_rw = "";
$column_id_keluarga= "";
$column_nayah = "";
$column_nibu = "";

while($row = mysql_fetch_array($result))

{
    $id_penduduk = $row["id_penduduk"];
    $nama = $row["nama"];
    $agama = $row["agama"];
    $t_lahir = $row["t_lahir"];
    $tgl_lahir = tgl_indo($row['tgl_lahir']);
    $j_kel = $row["j_kel"];
    $gol_darah = $row["gol_darah"];
    $w_negara = $row["w_negara"];
    $pas = $row["pas"];
    $kitap = $row["kitap"];
    $pendidikan = $row["pendidikan"];
    $pekerjaan = $row["pekerjaan"];
    $s_nikah = $row["s_nikah"];
    $hubkel = $row["hubkel"];
    $alamatl = $row["alamatl"];
    $rt = $row["rt"];
    $rw = $row["rw"];
    $id_keluarga = $row["id_keluarga"];
    $nik = $row["nik"];
    $nayah = $row["nayah"];
    $nibu = $row["nibu"];



$column_id_penduduk = $column_id_penduduk.$id_penduduk. "\n";
$column_nama = $column_nama.$nama."\n";
$column_agama = $column_agama.$agama."\n";
$column_t_lahir = $column_t_lahir.$t_lahir. "\n";
$column_tgl_lahir = $column_tgl_lahir.$tgl_lahir. "\n";
$column_j_kel = $column_j_kel.$j_kel. "\n";
$column_gol_darah = $column_gol_darah.$gol_darah. "\n";
$column_w_negara = $column_w_negara.$w_negara."\n";
$column_pas = $column_pas.$pas."\n";
$column_kitap = $column_kitap.$kitap."\n";
$column_pendidikan = $column_pendidikan.$pendidikan."\n";
$column_pekerjaan = $column_pekerjaan.$pekerjaan."\n";
$column_s_nikah = $column_s_nikah.$s_nikah."\n";
$column_hubkel = $column_hubkel.$hubkel."\n";
$column_alamatl = $column_alamatl.$alamatl."\n";
$column_rt = $column_rt.$rt."\n";
$column_rw = $column_rw.$rw."\n";

$column_id_keluarga= $column_id_keluarga.$id_keluarga."\n";
$column_nik= $column_nik.$nik."\n";
$column_nayah= $column_nayah.$nayah."\n";
$column_nibu= $column_nibu.$nibu."\n";
} 


$pdf->SetFont('Arial','B',9);

$pdf->SetY($A_Fields_Name_position);
$pdf->SetX(60);
$pdf->Cell(30,8,$column_nama,0,'R',1);
$pdf->SetY($B_Fields_Name_position);
$pdf->SetX(59);
$pdf->Cell(30,8,$column_alamatl,0,'R',1);
$pdf->SetY($C_Fields_Name_position);
$pdf->SetX(60);
$pdf->Cell(30,8,$column_rt,0,'R',1);
$pdf->SetY($C_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(30,8,$column_rw,0,'R',1);
$pdf->SetY($C_Fields_Name_position);
$pdf->SetX(68);
$pdf->Cell(30,8,'/',0,'R',1);
$pdf->SetY($D_Fields_Name_position);
$pdf->SetX(60);
$pdf->Cell(30,8,'Sirnagalih',0,'R',1);
$pdf->SetY($A_Fields_Name_position);
$pdf->SetX(255);
$pdf->Cell(30,8,'Tamansari',0,'R',1);
$pdf->SetY($B_Fields_Name_position);
$pdf->SetX(255);
$pdf->Cell(30,8,'Bogor',0,'R',1);
$pdf->SetY($C_Fields_Name_position);
$pdf->SetX(255);
$pdf->Cell(30,8,'16610',0,'R',1);
$pdf->SetY($D_Fields_Name_position);
$pdf->SetX(255);
$pdf->Cell(30,8,'Jawa Barat',0,'R',1);

?>


<?php
$id = $_GET['id'];
$result=mysql_query("SELECT * FROM `data` INNER JOIN `kk_anggota` ON data.id_keluarga = kk_anggota.id_keluarga WHERE data.id_keluarga ='$_GET[id]' GROUP BY id LIMIT 1 ") or die(mysql_error());
$column_kk = "";
while($row = mysql_fetch_array($result))
{
    $kk = $row["kk"];
    $column_kk = $column_kk.$kk."\n";
}
$no_Fields_Name_position = 30;
$pdf->SetFont('Arial','B',12);
$pdf->SetY($no_Fields_Name_position);
$pdf->SetX(128);
$pdf->Cell(25,8,$column_kk,0,'C',1);


?>

<?php
$id = $_GET['id'];
$result=mysql_query("SELECT * FROM `data` INNER JOIN `kk_anggota` ON data.id_keluarga = kk_anggota.id_keluarga WHERE data.id_keluarga ='$_GET[id]' AND hubkel='ayah' GROUP BY nama") or die(mysql_error());

$column_nama = "";

while($row = mysql_fetch_array($result))

{
    $nama = $row["nama"];
    $column_nama = $column_nama.$nama."\n";
}

$n_Fields_Name_position = 180;

$pdf->SetFont('Arial','B',9);
$pdf->SetY($n_Fields_Name_position);
$pdf->SetX(123);
$pdf->Cell(25,8,$column_nama,0,'C',1);

            $pdf->SetX(110);
            $pdf->SetFont('Arial','B',10);
            $pdf->MultiCell(180.10,5.10,'',0,'C');
            $pdf->ln();
$pdf->Output();
?>
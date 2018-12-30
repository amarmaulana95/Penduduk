<?php
include ("../koneksi.php");
require ('fpdf/fpdf.php');


$result=mysql_query("SELECT * FROM pindah INNER JOIN data ON pindah.id_penduduk = data.id_penduduk WHERE data.id_penduduk='$_GET[id]' GROUP BY nik") or die(mysql_error());

$column_idsurat = "";
$column_id_penduduk = "";
$column_nik = "";
$column_nama = "";
$column_kk = "";
$column_alamatl = "";
$column_kode = "";
$column_rt = "";
$column_rw = "";
$column_tujuan = "";
 
 while($row = mysql_fetch_array($result))
{

    $idsurat = $row["idsurat"];
    $id_penduduk = $row["id_penduduk"];
    $nik = $row["nik"];

    $kode = $row["kode"];
    $nama = $row["nama"];
    $kk = $row["kk"];
    $alamatl = $row["alamatl"];
    $rt = $row["rt"];
    $rw = $row["rw"];

    $tujuan = $row["tujuan"];

$column_idsurat = $column_idsurat.$idsurat. "\n";
$column_id_penduduk = $column_id_penduduk.$id_penduduk. "\n";
$column_nik = $column_nik.$nik. "\n";

$column_kode = $column_kode.$kode. "\n";
$column_nama = $column_nama.$nama."\n";
$column_kk= $column_kk.$kk."\n";
$column_alamatl = $column_alamatl.$alamatl."\n";
$column_rt = $column_rt.$rt. "\n";
$column_rw= $column_rw.$rw. "\n";
$column_tujuan = $column_tujuan.$tujuan. "\n";


}


$pdf = new FPDF("P","mm","A4");
$pdf->AddPage();

$pdf->SetFont('Arial','B',13);
      
      $pdf->Image('../fpdf/baldes.jpg',10,7,25,25);

            $pdf->SetX(35);
            $pdf->MultiCell(120.10,5.20,'DESA SIRNAGALIH KECAMATAN TAMANSARI',0,'L');
            
            $pdf->SetX(35);
            $pdf->MultiCell(90.5,5.10,'Pemerintah Kota Bogor',0,'L');
            
            $pdf->SetFont('Arial','B',10);
            $pdf->SetX(35);
            $pdf->MultiCell(90.5,5.10,'Desa Sirnagalih NO.05',0,'L');

            $pdf->SetLineWidth(1);
            $pdf->Line(10,31.5,195.5,31.29);
            $pdf->SetLineWidth(0);
            $pdf->Line(10,32.5,195.5,32.38);
      

            $pdf->SetX(35);
            $pdf->MultiCell(140.10,40.20,'SURAT KETERANGAN PINDAH KELUAR',0,'C');
            $pdf->SetLineWidth(0);
            $pdf->Line(75,48.5,135.5,48.5);
            $pdf->SetY(35);
            $pdf->MultiCell(190.10,33.20,$column_kode,0,'C');

            $pdf->ln(1);

            $pdf->SetFont('Arial','',10);
            $pdf->MultiCell(180.10,5.10,'Yang bertanda tangan di bawah ini, Kepala Desa Sirnagalih, Kecamatan Tamansari, Kbupaten Bogor menerangkan dengan sebenarnya bahwa orang tersebut dibawah ini. : ',0,'C');
            $pdf->ln(10);


$ko_Fields_Name_position = 40;
$Y_Fields_Name_position = 90;
$A_Fields_Name_position = 95;
$B_Fields_Name_position = 100;
$C_Fields_Name_position = 105;
$D_Fields_Name_position = 110;
$E_Fields_Name_position = 115;
$F_Fields_Name_position = 120;
$G_Fields_Name_position = 125;

$pdf->SetFillColor(110,230,290);
//Bold Font for Field Name
$pdf->SetFont('Arial','',10);

$pdf->SetY($A_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Nik.Penduduk',0,'C',1);

$pdf->SetY($B_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(30,8,'Nama',0,'C',1);

$pdf->SetY($C_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(40,8,'No.kk',0,'C',1);

$pdf->SetY($D_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Alamat',0,'C',1);

$pdf->SetY($E_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Rt',0,'C',1);

$pdf->SetY($F_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Rw',0,'C',1);

$pdf->SetY($G_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Alamat Tujuan',0,'C',1);

$pdf->SetFillColor(110,230,290);
//Bold Font for Field Name
$pdf->SetFont('Arial','',12);

$pdf->SetY($A_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(50,8,':',0,'C',1);

$pdf->SetY($B_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(30,8,':',0,'C',1);

$pdf->SetY($C_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(40,8,':',0,'C',1);

$pdf->SetY($D_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(50,8,':',0,'C',1);

$pdf->SetY($E_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(50,8,':',0,'C',1);

$pdf->SetY($F_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(50,8,':',0,'C',1);

$pdf->SetY($G_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(50,8,':',0,'C',1);


$KODE_Table_Position = 40;
$Y_Table_Position = 90;
$A_Table_Position = 95;
$B_Table_Position = 100;
$C_Table_Position = 105;
$D_Table_Position = 110;
$E_Table_Position = 115;
$F_Table_Position = 120;
$G_Table_Position = 125;


$pdf->SetFont('Arial','',10);


$pdf->SetY($A_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_nik,0,'C');

$pdf->SetY($B_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_nama,0,'C');

$pdf->SetY($C_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_kk,0,'C');

$pdf->SetY($D_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_alamatl,0,'C');

$pdf->SetY($E_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_rt,0,'C');

$pdf->SetY($F_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_rw,0,'C');

$pdf->SetY($G_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_tujuan,0,'C');

$pdf->ln(15);

            $pdf->MultiCell(140.10,5.10,'Demikian Surat Keterangan ini diberikan, untuk digunakan sebagaimana mestinya.',0,'R');
            $pdf->ln(20);

            $pdf->SetX(80);
            $pdf->SetFont('Arial','',10);
            $pdf->MultiCell(180.10,5.10,'Desa Sirnagalih',0,'C');
            $pdf->SetX(80);
            $pdf->SetFont('Arial','',10);
            $pdf->MultiCell(180.10,5.10,'Kepala Desa Sirnagalih',0,'C');
            $pdf->ln(30);

            $pdf->SetX(80);
            $pdf->SetFont('Arial','B',10);
            $pdf->MultiCell(180.10,5.10,'Amat Suparta ',0,'C');
            $pdf->MultiCell(180.10,5.10,'NIP : 14000678875899 ',0,'R');
            $pdf->ln();

            $pdf->Output();
 
            ?>
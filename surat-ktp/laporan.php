<?php
include '../koneksi.php';
require('../fpdf/fpdf.php');

$pdf = new FPDF("P","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('../fpdf/baldes.jpg',1,1,2,2);
$pdf->SetX(3);            
$pdf->MultiCell(15.5,0.5,'PEMERINTAH DESA SIRNAGALIH',0,'L');
$pdf->SetX(3);
$pdf->MultiCell(15.5,0.5,'DESA SIRNAGALIH N0.05',0,'L');    
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(2);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(17,0.7,"Laporan Pengajuan KTP",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(17,0.7,'Yang bertanda tangan di bawah ini, Staff Penduuduk Desa Sirnagalih, Kecamatan Tamansari, Kabupaten Bogor menerangkan dengan sebenarnya Laporan Data Pengajuan KTP : ',0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'NIK', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'NAMA', 1, 0, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysql_query("SELECT * from ktp ");
while($lihat=mysql_fetch_array($query)){
    $pdf->ln();
    $pdf->Cell(1, 0.8, $no , 1, 0, 'C');
    $pdf->Cell(4, 0.8, $lihat['nik'],1, 0, 'C');
    $pdf->Cell(5, 0.8, $lihat['nama'], 1, 0,'C');

    $no++;
}
$pdf->ln(2);
$pdf->MultiCell(15,0.7,'TTD',0,'R');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(16,0.7,'ANDRI TARUNA',0,'R');
            $pdf->SetLineWidth(0);
            $pdf->Line(6,5,15,5);
            $pdf->SetY(90);

$pdf->Output();

?>


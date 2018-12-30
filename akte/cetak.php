<?php
include "../koneksi.php";
require ('../fpdf/fpdf.php');

    
    
    $column_id_penduduk = "";
    $column_nama = "";
    $column_tgl_lahir = "";
    $column_id_keluarga = "";


    
    $nik        = $_POST['nik'];    
    $kk     = $_POST['kk'];     
    $nama       = $_POST['nama'];   
    $agama      = $_POST['agama'];  
    $t_lahir    = $_POST['t_lahir'];
    $tgl_lahir  = $_POST['tgl_lahir'];  
    $j_kel      = $_POST['j_kel'];
    $gol_darah  = $_POST['gol_darah'];  
    $w_negara   = $_POST['w_negara'];   
    $pendidikan = $_POST['pendidikan'];
    $pekerjaan  = $_POST['pekerjaan'];  
    $s_nikah    = $_POST['s_nikah'];
    $hubkel     = $_POST['hubkel'];
    $alamatl    = $_POST['alamatl'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $pas    = $_POST['pas'];
    $kitap  = $_POST['kitap'];
    $id_keluarga  = $_POST['id_keluarga'];
    $statuspen =$_POST['statuspen'];


$input = mysql_query("INSERT INTO data VALUES
    (NULL, '$nik', '$kk', '$nama', '$agama', '$t_lahir', '$tgl_lahir', '$j_kel', 
    '$gol_darah', '$w_negara', '$pendidikan', '$pekerjaan', '$s_nikah', '$hubkel', '$alamatl', '$rt', '$rw', '$pas', '$kitap',
       '$id_keluarga', '$statuspen')") or die(mysql_error());


$column_nama = $column_nama.$nama. "\n";
$column_tgl_lahir = $column_tgl_lahir.$tgl_lahir. "\n";


//Create a new PDF file
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
            $pdf->MultiCell(90.5,5.10,'JL. Ciapus, Telpon : 0895344666241',0,'L');
            
            $pdf->SetX(35);
            $pdf->MultiCell(90.5,5.10,'website : www.belum-ada.go.id ',0,'L');

            $pdf->SetLineWidth(1);
            $pdf->Line(10,31.5,195.5,31.29);
            $pdf->SetLineWidth(0);
            $pdf->Line(10,32.5,195.5,32.38);
      

            $pdf->SetX(35);
            $pdf->MultiCell(140.10,30.20,'SURAT KETERANGAN KELAHIRAN',0,'C');
            $pdf->SetLineWidth(0);
            $pdf->Line(75,48.5,135.5,48.5);
            $pdf->SetY(35);
            $pdf->MultiCell(190.10,33.20,'',0,'C');
            $pdf->ln(1);

            $pdf->SetFont('Arial','',10);
            $pdf->MultiCell(180.10,5.10,'Yang bertanda tangan di bawah ini, Kepala Desa Sirnagalih, Kecamatan Tamansari, Kabupaten Bogor menerangkan Bahwa terdaftar seorang anak yang bernama : ',0,'C');
            $pdf->ln(10);


    



$Y_Fields_Name_position = 90;
$A_Fields_Name_position = 95;
$tgl_Fields_Name_position = 100;
$B_Fields_Name_position = 105;

$C_Fields_Name_position = 110;
$D_Fields_Name_position = 125;
$E_Fields_Name_position = 130;
$F_Fields_Name_position = 140;
$G_Fields_Name_position = 145;

$pdf->SetFillColor(110,230,290);
//Bold Font for Field Name


    $pdf->ln(10);
            $pdf->SetFont('Arial','B',11);
            $pdf->SetX(20);
            $pdf->SetY(90);
            $pdf->MultiCell(120.10,5.10,'Keterangan Anak',0,'');
    $pdf->ln(10);


$pdf->SetFont('Arial','',10);
$pdf->SetY($A_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Nama',0,'C',1);

$pdf->SetY($tgl_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Tanggal Lahir',0,'C',1);

$pdf->SetY($B_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(30,8,'alamat keluarga',0,'C',1);

$pdf->SetY($C_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(40,8,'No.kk',0,'C',1);

    $pdf->ln(10);
            $pdf->SetFont('Arial','B',11);
            $pdf->SetX(20);
            $pdf->SetY(120);
            $pdf->MultiCell(120.10,5.10,'Keterangan Ayah',0,'');
    $pdf->ln(10);


$pdf->SetFont('Arial','',10);
$pdf->SetY($D_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Ayah',0,'C',1);
$pdf->SetY($E_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Nik.Ayah',0,'C',1);


   $pdf->ln(10);
            $pdf->SetFont('Arial','B',11);
            $pdf->SetX(20);
            $pdf->SetY(137);
            $pdf->MultiCell(120.10,5.10,'Keterangan Ibu',0,'');
    $pdf->ln(10);


$pdf->SetFont('Arial','',10);
$pdf->SetY($F_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Ibu',0,'C',1);

$pdf->SetY($G_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Nik.Ibu',0,'C',1);



$pdf->SetFillColor(110,230,290);
//Bold Font for Field Name
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(35,8,'',0,'C',1);

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

$Y_Table_Position = 90;

$A_Table_Position = 95;
$tgl_Table_Position = 100;
$B_Table_Position = 105;

$C_Table_Position = 110;
$D_Table_Position = 125;
$E_Table_Position = 130;
$F_Table_Position = 140;
$G_Table_Position = 145;


$pdf->SetFont('Arial','',10);

$pdf->SetY($A_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_nama,0,'C');

$pdf->SetY($tgl_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_tgl_lahir,0,'C');

$pdf->SetY($C_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_id_keluarga,0,'C');
////////////////////////////////////////////////////////////





            $pdf->ln(30);
            $pdf->SetX(20);
            $pdf->Cell(140.10,5.10,'Demikian Surat Keterangan Lahir ini di buat dengan penuh tanggung jawab dan dengan sebenarnya.',0,'');
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
 

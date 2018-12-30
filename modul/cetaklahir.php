<?php
ob_start();
session_start();
include "../koneksi.php";
require ('../fpdf/fpdf.php');
?>

<?php
    
    
    $column_id_penduduk = "";
    $column_nama = "";
    $column_tgl_lahir = "";
    $column_kk = "";
    $column_id_keluarga = "";
    $column_hubkel = "";
    $column_nik = "";
    $column_nayah = "";
    $column_nibu = "";

    
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

    $nayah  = $_POST['nayah'];
    $nibu  = $_POST['nibu'];
    $id_keluarga  = $_POST['id_keluarga'];
    $statuspen =$_POST['statuspen'];


        $input = mysql_query("INSERT INTO data VALUES
    (NULL, '$nik', '$kk', '$nama', '$agama', '$t_lahir', '$tgl_lahir', '$j_kel', 
    '$gol_darah', '$w_negara', '$pendidikan', '$pekerjaan', '$s_nikah', '$hubkel', '$alamatl', '$rt', '$rw', '$nayah', '$nibu', '$pas', '$kitap',
       '$id_keluarga', '$statuspen')") or die(mysql_error());


$column_nama = $column_nama.$nama. "\n";
$column_tgl_lahir = $column_tgl_lahir.$tgl_lahir. "\n";
$column_kk = $column_kk.$kk. "\n";
$column_nik = $column_nik.$nik. "\n";
$column_hubkel = $column_hubkel.$hubkel. "\n";

$column_nayah = $column_nayah.$nayah. "\n";

$column_nibu = $column_nibu.$nibu. "\n";

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
            $pdf->MultiCell(90.5,5.10,'DESA SIRNAGALIH NO-05',0,'L');
            

            $pdf->SetLineWidth(1);
            $pdf->Line(10,31.5,195.5,31.29);
            $pdf->SetLineWidth(0);
            $pdf->Line(10,32.5,195.5,32.38);
      

            $pdf->SetX(35);
            $pdf->MultiCell(140.10,40.20,'SURAT KETERANGAN KELAHIRAN',0,'C');
            $pdf->SetLineWidth(0);
            $pdf->Line(75,48.5,135.5,48.5);
            $pdf->SetY(35);
            $pdf->MultiCell(190.10,33.20,'Nomor '.$_POST['kd'],0,'C');
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
$F_Fields_Name_position = 135;
$G_Fields_Name_position = 140;
$H_Fields_Name_position = 145;
$I_Fields_Name_position = 150;
$J_Fields_Name_position = 155;
$K_Fields_Name_position = 160;

$L_Fields_Name_position = 175;

$M_Fields_Name_position = 180;
$N_Fields_Name_position = 185;
$O_Fields_Name_position = 190;
$P_Fields_Name_position = 195;
$Q_Fields_Name_position = 200;
$R_Fields_Name_position = 205;
$S_Fields_Name_position = 210;

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

    $pdf->ln(20);
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
$pdf->SetY($F_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Tanggal lahir',0,'C',1);
$pdf->SetY($G_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Pekerjaan',0,'C',1);
$pdf->SetY($H_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Alamat',0,'C',1);
$pdf->SetY($I_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Agama',0,'C',1);
$pdf->SetY($J_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'RT',0,'C',1);
$pdf->SetY($K_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'RW',0,'C',1);


   $pdf->ln(10);
            $pdf->SetFont('Arial','B',11);
            $pdf->SetX(20);
            $pdf->SetY(170);
            $pdf->MultiCell(120.10,5.10,'Keterangan Ibu',0,'');
    $pdf->ln(10);


$pdf->SetFont('Arial','',10);
$pdf->SetY($L_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Nama',0,'C',1);

$pdf->SetY($M_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Nik.Ibu',0,'C',1);
$pdf->SetY($N_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Tanggal lahir',0,'C',1);

$pdf->SetY($O_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Pekerjaan',0,'C',1);
$pdf->SetY($P_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Agama',0,'C',1);
$pdf->SetY($Q_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'Alamat',0,'C',1);

$pdf->SetY($R_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'RT',0,'C',1);

$pdf->SetY($S_Fields_Name_position);
$pdf->SetX(20);
$pdf->Cell(50,8,'RW',0,'C',1);





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
$pdf->SetY($H_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(50,8,':',0,'C',1);

$pdf->SetY($I_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(30,8,':',0,'C',1);

$pdf->SetY($J_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(40,8,':',0,'C',1);

$pdf->SetY($K_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(50,8,':',0,'C',1);

$pdf->SetY($L_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(50,8,':',0,'C',1);

$pdf->SetY($M_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(50,8,':',0,'C',1);

$pdf->SetY($N_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(50,8,':',0,'C',1);
$pdf->SetY($O_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(50,8,':',0,'C',1);

$pdf->SetY($P_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(30,8,':',0,'C',1);

$pdf->SetY($Q_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(40,8,':',0,'C',1);

$pdf->SetY($R_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(50,8,':',0,'C',1);

$pdf->SetY($S_Fields_Name_position);
$pdf->SetX(70);
$pdf->Cell(50,8,':',0,'C',1);




$Y_Table_Position = 90;

$A_Table_Position = 95;
$tgl_Table_Position = 100;
$B_Table_Position = 105;

$C_Table_Position = 110;
$D_Table_Position = 125;
$E_Table_Position = 130;
$F_Table_Position = 135;
$G_Table_Position = 140;
$H_Table_Position = 145;
$I_Table_Position = 150;
$J_Table_Position = 155;

$K_Table_Position = 160;
$L_Table_Position = 175;
$M_Table_Position = 180;
$N_Table_Position = 185;
$O_Table_Position = 190;
$P_Table_Position = 195;
$Q_Table_Position = 200;
$R_Table_Position = 205;
$S_Table_Position = 210;






$pdf->SetFont('Arial','',10);

$pdf->SetY($A_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_nama,0,'C');

$pdf->SetY($tgl_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_tgl_lahir,0,'C');

$pdf->SetY($C_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_kk,0,'C');
////////////////////////////////////////////////////////////
            


?>


<?php
$id_keluarga=$_POST['id_keluarga'];
$result=mysql_query("SELECT * FROM data INNER JOIN kk_anggota ON data.id_keluarga = kk_anggota.id_keluarga WHERE 
    data.id_keluarga = '$id_keluarga' AND hubkel LIKE '%ayah%' GROUP BY id_penduduk ") or die(mysql_error());

$column_nama = "";
$column_nik = "";
$column_tgl_lahir = "";
$column_pekerjaan = "";
$column_agama = "";
$column_alamatl = "";
$column_rt = "";
$column_rw = "";
 while($row = mysql_fetch_array($result))
{

    $nama = $row["nama"];
    $nik = $row["nik"];
    $tgl_lahir = $row["tgl_lahir"];
    $pekerjaan = $row["pekerjaan"];
    $agama = $row["agama"];
    $alamatl = $row["alamatl"];
    $rt = $row["rt"];
    $rw = $row["rw"];


$column_nama = $column_nama.$nama."\n";
$column_nik = $column_nik.$nik."\n";
$column_tgl_lahir = $column_tgl_lahir.$tgl_lahir."\n";
$column_pekerjaan = $column_pekerjaan.$pekerjaan."\n";
$column_agama = $column_agama.$agama."\n";
$column_alamatl = $column_alamatl.$alamatl."\n";
$column_rt = $column_rt.$rt."\n";
$column_rw = $column_rw.$rw."\n";



}
$pdf->SetFont('Arial','',10);

$pdf->SetY($D_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_nama,0,'C');

$pdf->SetY($E_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_nik,0,'C');

$pdf->SetY($F_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_tgl_lahir,0,'C');

$pdf->SetY($G_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_pekerjaan,0,'C');

$pdf->SetY($H_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_alamatl,0,'C');

$pdf->SetY($I_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_agama,0,'C');


$pdf->SetY($J_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_rt,0,'C');

$pdf->SetY($K_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_rw,0,'C');

?>




<?php
$id_keluarga=$_POST['id_keluarga'];
$result=mysql_query("SELECT * FROM data INNER JOIN kk_anggota ON data.id_keluarga = kk_anggota.id_keluarga WHERE 
    data.id_keluarga = '$id_keluarga' AND hubkel LIKE '%isteri%' GROUP BY id_penduduk ") or die(mysql_error());

$column_nama = "";
$column_nik = "";
$column_tgl_lahir = "";
$column_pekerjaan = "";
$column_agama = "";
$column_alamatl = "";
$column_rt = "";
$column_rw = "";
 while($row = mysql_fetch_array($result))
{

    $nama = $row["nama"];
    $nik = $row["nik"];
    $tgl_lahir = $row["tgl_lahir"];
    $pekerjaan = $row["pekerjaan"];
    $agama = $row["agama"];
    $alamatl = $row["alamatl"];
    $rt = $row["rt"];
    $rw = $row["rw"];


$column_nama = $column_nama.$nama."\n";
$column_nik = $column_nik.$nik."\n";
$column_tgl_lahir = $column_tgl_lahir.$tgl_lahir."\n";
$column_pekerjaan = $column_pekerjaan.$pekerjaan."\n";
$column_agama = $column_agama.$agama."\n";
$column_alamatl = $column_alamatl.$alamatl."\n";
$column_rt = $column_rt.$rt."\n";
$column_rw = $column_rw.$rw."\n";




}
$pdf->SetFont('Arial','',10);

$pdf->SetY($L_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_nama,0,'C');

$pdf->SetY($M_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_nik,0,'C');

$pdf->SetY($N_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_tgl_lahir,0,'C');

$pdf->SetY($O_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_pekerjaan,0,'C');

$pdf->SetY($P_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_alamatl,0,'C');
$pdf->SetY($Q_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_agama,0,'C');
$pdf->SetY($R_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_rt,0,'C');
$pdf->SetY($S_Table_Position);
$pdf->SetX(73);
$pdf->Cell(35,8,$column_rw,0,'C');


            $pdf->ln(15);
            $pdf->SetX(20);
            $pdf->Cell(140.10,5.10,'Demikian Surat Keterangan Lahir ini di buat dengan penuh tanggung jawab dan dengan sebenarnya.',0,'');
            $pdf->ln(10);

            $pdf->SetX(80);
            $pdf->SetFont('Arial','',10);
            $pdf->MultiCell(180.10,5.10,'Desa Sirnagalih',0,'C');
            $pdf->SetX(80);
            $pdf->SetFont('Arial','',10);
            $pdf->MultiCell(180.10,5.10,'Kepala Desa Sirnagalih',0,'C');
            $pdf->ln(20);

            $pdf->SetX(80);
            $pdf->SetFont('Arial','B',10);
            $pdf->MultiCell(180.10,5.10,'Amat Suparta ',0,'C');
            $pdf->ln();

            $pdf->Output();
 
?>

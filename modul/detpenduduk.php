<?php 
include '../header.php';
?>
<!DOCTYPE html>
<html lang="en">

  <center style="margin-left: 450px"><h1>DETAIL</h1></center>
<a class="btn" href="tampil.php" align="center">
<span class="glyphicon glyphicon-arrow-left" style="margin-left: 450px"></span> Kembali</a>

<?php
include'../koneksi.php';
$id=$_GET['id'];
$det=mysql_query("select * from data where id_penduduk='$id'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	?>					
	<table class="table table-striped table-bordered dt-responsive nowrap" align="center" style="margin-left: 450px">
		<tr>
			<td>NO.Nik</td>
			<td><?php echo $d['id_penduduk'] ?></td>
		</tr>
		<tr>
			<td>NO.KK</td>
			<td><?php echo $d['id_keluarga'] ?></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td><?php echo $d['nama'] ?></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td><?php echo $d['agama'] ?></td>
		</tr>
		<tr>
			<td>Tempat</td>
			<td><?php echo $d['t_lahir'] ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><?php echo $d['tgl_lahir'] ?></td>
		</tr>
		<tr>
			<td>Alamat RT/RW</td>
			<td><?php echo $d['alamatl'] ?></td>
		</tr>
		<tr>
			<td>RT</td>
			<td><?php echo $d['rt'] ?></td>
		</tr>
		<tr>
			<td>RW</td>
			<td><?php echo $d['rw'] ?></td>
		</tr>
		<tr>
			<td>Jenis kelamin</td>
			<td><?php echo $d['j_kel'] ?></td>
		</tr>
		<tr>
			<td>Golongan Darah</td>
			<td><?php echo $d['gol_darah'] ?></td>
		</tr>
		<tr>
			<td>Warganegara</td>
			<td><?php echo $d['w_negara'] ?></td>
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td><?php echo $d['pendidikan'] ?></td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td><?php echo $d['pekerjaan'] ?></td>
		</tr>
		<tr>
			<td>Status Kawin</td>
			<td><?php echo $d['s_nikah'] ?></td>
		</tr>
		<tr>
			<td>Hubungan Keluarga</td>
			<td><?php echo $d['hubkel'] ?></td>
		</tr>
	</table>
	<?php 
}
?>

<?php include '../footer.php'; ?>
</html>
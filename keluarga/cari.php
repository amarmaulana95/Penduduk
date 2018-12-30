<?php 
include "../koneksi.php";
$q=$_POST['q'];
$query=mysql_query("select * from data where id_penduduk like '%".$q."%'");
$row=mysql_num_rows($query);
$data=mysql_fetch_array($query);
if ($row > 0) 
{
 ?>
              <div class="control-group">
                <label class="control-label" for="desa">kepala keluarga</label>
                  <div class="control">
                    <input type="hidden" id="desa" name="id_penduduk" class="form-control" value="<?php echo $data['id_penduduk'] ?>">
                    <input type="text" id="desa" name="id_penduduk" class="form-control" value="<?php echo $data['id_penduduk'] ?>" disabled>
                  </div>
              

 <?php
}
else{
    echo "Data tidka ditemukan!";
}
?>

</html>
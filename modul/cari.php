<?php 
include "../koneksi.php";
$q=$_POST['q'];
$query=mysql_query("SELECT * FROM keluarga WHERE id_keluarga LIKE '%".$q."%'");
$row=mysql_num_rows($query);
$data=mysql_fetch_array($query);
if ($row > 0) 
{
 ?>
              <div class="control-group">
                <label class="control-label" for="id_keluarga">kepala keluarga</label>
                  <div class="control">
                    <input type="hidden" id="desa" name="id_keluarga" class="form-control" value="<?php echo $data['id_keluarga'] ?>">
                    <input type="text" id="desa" name="id_keluarga" class="form-control" value="<?php echo $data['id_keluarga'] ?>" disabled>
                  </div>
              
              

 <?php
}
else{
    echo "Data tidka ditemukan!";
}
?>

</html>
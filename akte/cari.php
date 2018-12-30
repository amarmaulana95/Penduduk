<?php 
include "../koneksi.php";
$q=$_POST['q'];
$query=mysql_query("SELECT * FROM `kk_anggota` INNER JOIN `data` ON kk_anggota.id_keluarga = data.id_keluarga WHERE kk_anggota.kk LIKE '%".$q."%'");
$row=mysql_num_rows($query);
$data=mysql_fetch_array($query);
if ($row > 0) 
{
 ?>
              <div class="control-group">
                <label class="control-label" for="id_keluarga">No.Kartu Keluarga</label>
                  <div class="control">
                    <input type="hidden" id="desa" name="id_keluarga" class="form-control" value="<?php echo $data['id_keluarga'] ?>">
                    <input type="text" id="desa" name="id_keluarga" class="form-control" value="<?php echo $data['id_keluarga'] ?>" disabled>
                    <input type="text" class="form-control" id="ayah" name="id_keluarga" placeholder="Mohon ketik ulang nama" required>   
                  </div>

                  <div class="control-group">
                <label class="control-label" for="id_keluarga">NIK- KEPALA KELUARGA</label>
                  <div class="control">
                    <input type="hidden" id="desa" name="nik" class="form-control" value="<?php echo $data['nik'] ?>">
                    <input type="text" id="desa" name="nik" class="form-control" value="<?php echo $data['nik'] ?>" disabled>
                  </div>

              <div class="control-group">
                <label class="control-label" for="id_keluarga">AYAH</label>
                  <div class="control">
                    <input type="hidden" id="desa" name="nama" class="form-control" value="<?php echo $data['nama'] ?>">
                    <input type="text" id="desa" name="nama" class="form-control" value="<?php echo $data['nama'] ?>" disabled>
                  </div>

              <div class="control-group">
                <label class="control-label" for="id_keluarga">ibu</label>
                  <div class="control">
                    <input type="hidden" id="desa" name="nama" class="form-control" value="<?php echo $data['nama'] ?>">
                    <input type="text" id="desa" name="nama" class="form-control" value="<?php echo $data['nama'] ?>" disabled>
                  </div>
          
                    <br>
                     <div class="input-group col-sm-12">
                     <span class="input-group-addon" id="desa" >Alamat Lengkap</span> 
                     <textarea name="alamatkel" class="form-control"> </textarea> 
                    </div>

 <?php


}
else{
    echo "Data tidka ditemukan!";
}
?>

</html>


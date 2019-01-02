<?php 
ob_start();

$id = $_GET['id'];

$query = "SELECT * FROM  tm_data_kk where id_kk = '$id'";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_array($result);


?>
               <form method="post">
                    <div class="form-group">
                        <label class="control-label"> Nama Kepala Keluarga</label>
                        <input type="text" class="form-control" name="nama_kk" value="<?php echo $row['nama_kk'] ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $row['tempat_lahir'] ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $row['tgl_lahir'] ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                    <fieldset disabled>
                        <select name="jk" class="form-control">
                            <option value="1" <?php if($row['jk']==1){echo 'selected';} ?>>Laki-laki</option>
                            <option value="2" <?php if($row['jk']==2){echo 'selected';} ?>>Perempuan</option>
                        </select>
                    </fieldset>
                    </div>
                    <div class="form-group">
                    <fieldset disabled>
                        <select name="agama" class="form-control">
                            <option value="1" <?php if($row['agama']==1){echo 'selected';} ?>>Islam</option>
                            <option value="2" <?php if($row['agama']==2){echo 'selected';} ?>>Kristen</option>
                            <option value="3" <?php if($row['agama']==3){echo 'selected';} ?>>Hindu</option>
                            <option value="4" <?php if($row['agama']==4){echo 'selected';} ?>>Budha</option>
                        </select>
                    </fieldset>
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Pendidikan</label>
                        <input type="text" class="form-control" name="pendidikan"  value="<?php echo $row['pendidikan'] ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan"  value="<?php echo $row['pekerjaan'] ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nomor KK</label>
                        <input type="text" class="form-control" name="nokk"  value="<?php echo $row['nokk'] ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> KTP</label>
                        <input type="text" class="form-control" name="ktp"  value="<?php echo $row['ktp'] ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Jumlah Anggota</label>
                        <input type="text" class="form-control" name="jml_anggota"  value="<?php echo $row['jml_anggota'] ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Alamat</label>
                        <input type="text" class="form-control" name="alamat"  value="<?php echo $row['alamat'] ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Keterangan Tetap</label>
                        <input type="text" class="form-control" name="tetap"  value="<?php echo $row['tetap'] ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Keterangan Luar</label>
                        <input type="text" class="form-control" name="luar"  value="<?php echo $row['luar'] ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Keterangan Kontrak</label>
                        <input type="text" class="form-control" name="kontrak"  value="<?php echo $row['kontrak'] ?>" readonly="readonly">
                    </div>
                   
                </form>
<?php 

$viewkk = ob_get_clean();
?>


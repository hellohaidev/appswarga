<?php 
ob_start();

$id = $_GET['id'];

if(isset($_POST['update'])){

    $nama_kk = mysqli_real_escape_string($link,$_POST['nama_kk']);
    $tempat_lahir = mysqli_real_escape_string($link,$_POST['tempat_lahir']);
    $tgl_lahir = mysqli_real_escape_string($link,$_POST['tgl_lahir']);
    $jk = mysqli_real_escape_string($link,$_POST['jk']);
    $agama = mysqli_real_escape_string($link,$_POST['agama']);
    $pendidikan = mysqli_real_escape_string($link,$_POST['pendidikan']);
    $pekerjaan = mysqli_real_escape_string($link,$_POST['pekerjaan']);
    $nokk = mysqli_real_escape_string($link,$_POST['nokk']);
    $ktp = mysqli_real_escape_string($link,$_POST['ktp']);
    $jml_anggota = mysqli_real_escape_string($link,$_POST['jml_anggota']);
    $alamat = mysqli_real_escape_string($link,$_POST['alamat']);
    $tetap = mysqli_real_escape_string($link,$_POST['tetap']);
    $luar = mysqli_real_escape_string($link,$_POST['luar']);
    $kontrak = mysqli_real_escape_string($link,$_POST['kontrak']);


    $queryUpdate = mysqli_query($link,"UPDATE tm_data_kk
                                    SET tm_data_kk.nama_kk='$nama_kk',
                                    tm_data_kk.tempat_lahir='$tempat_lahir',
                                    tm_data_kk.tgl_lahir='$tgl_lahir',
                                    tm_data_kk.jk='$jk',
                                    tm_data_kk.agama='$agama',
                                    tm_data_kk.pendidikan='$pendidikan',
                                    tm_data_kk.pekerjaan='$pekerjaan',
                                    tm_data_kk.nokk='$nokk',
                                    tm_data_kk.ktp='$ktp',
                                    tm_data_kk.jml_anggota='$jml_anggota',
                                    tm_data_kk.alamat='$alamat',
                                    tm_data_kk.tetap='$tetap',
                                    tm_data_kk.luar='$luar',
                                    tm_data_kk.kontrak='$kontrak'
                                    WHERE id_kk = '$id' ");
    if($queryUpdate){
        echo '<script>alert("ok");window.location.assign("http://localhost/wargaapps/page.php?page=homekk")</script>';
    }
    else {
        echo '<script>alert("gagal");window.location.assign("http://localhost/wargaapps/page.php?page=homekk")</script>';
    }
}
else {

$query = "SELECT * FROM  tm_data_kk where id_kk = '$id'";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_array($result);


?>
               <form method="post">
                    <div class="form-group">
                        <label class="control-label"> Nama Kepala Keluarga</label>
                        <input type="text" class="form-control" name="nama_kk" value="<?php echo $row['nama_kk'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $row['tempat_lahir'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $row['tgl_lahir'] ?>">
                    </div>
                    <div class="form-group">
                        <select name="jk" class="form-control">
                            <option value="1" <?php if($row['jk']==1){echo 'selected';} ?>>Laki-laki</option>
                            <option value="2" <?php if($row['jk']==2){echo 'selected';} ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="agama" class="form-control">
                            <option value="1" <?php if($row['agama']==1){echo 'selected';} ?>>Islam</option>
                            <option value="2" <?php if($row['agama']==2){echo 'selected';} ?>>Kristen</option>
                            <option value="3" <?php if($row['agama']==3){echo 'selected';} ?>>Hindu</option>
                            <option value="4" <?php if($row['agama']==4){echo 'selected';} ?>>Budha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Pendidikan</label>
                        <input type="text" class="form-control" name="pendidikan"  value="<?php echo $row['pendidikan'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan"  value="<?php echo $row['pekerjaan'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nomor KK</label>
                        <input type="text" class="form-control" name="nokk"  value="<?php echo $row['nokk'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> KTP</label>
                        <input type="text" class="form-control" name="ktp"  value="<?php echo $row['ktp'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Jumlah Anggota</label>
                        <input type="text" class="form-control" name="jml_anggota"  value="<?php echo $row['jml_anggota'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Alamat</label>
                        <input type="text" class="form-control" name="alamat"  value="<?php echo $row['alamat'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Keterangan Tetap</label>
                        <input type="text" class="form-control" name="tetap"  value="<?php echo $row['tetap'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Keterangan Luar</label>
                        <input type="text" class="form-control" name="luar"  value="<?php echo $row['luar'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Keterangan Kontrak</label>
                        <input type="text" class="form-control" name="kontrak"  value="<?php echo $row['kontrak'] ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info"  name="update">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    </div>
                </form>
<?php 
}
$editkk = ob_get_clean();
?>


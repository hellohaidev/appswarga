<?php 
ob_start();

$id = $_GET['id'];

if(isset($_POST['update'])){

    $nama = mysqli_real_escape_string($link,$_POST['nama']);
    $nokk = mysqli_real_escape_string($link,$_POST['nokk']);
    $nik = mysqli_real_escape_string($link,$_POST['nik']);
    $tempatlahir = mysqli_real_escape_string($link,$_POST['tempat_lahir']);
    $tgllahir = mysqli_real_escape_string($link,$_POST['tgl_lahir']);
    $pekerjaan = mysqli_real_escape_string($link,$_POST['pekerjaan']);
    $hubkeluarga = mysqli_real_escape_string($link,$_POST['hub_keluarga']);
    $luar = mysqli_real_escape_string($link,$_POST['luar']);
    $pindah = mysqli_real_escape_string($link,$_POST['pindah']);
    $wafat = mysqli_real_escape_string($link,$_POST['wafat']);

    $queryUpdate = mysqli_query($link,"UPDATE tm_data_warga 
                                    SET tm_data_warga.nama='$nama',
                                    tm_data_warga.nokk='$nokk',
                                    tm_data_warga.nik='$nik',
                                    tm_data_warga.tempat_lahir='$tempatlahir',
                                    tm_data_warga.tgl_lahir='$tgllahir',
                                     tm_data_warga.pekerjaan='$pekerjaan',
                                    tm_data_warga.hub_keluarga='$hubkeluarga',
                                    tm_data_warga.luar='$luar',
                                    tm_data_warga.pindah='$pindah',
                                    tm_data_warga.wafat='$wafat'
                                    WHERE id_warga = '$id' ");
    if($queryUpdate){
        echo '<script>alert("ok");window.location.assign("http://localhost/wargaapps/page.php?page=homewarga")</script>';
    }
    else {
        echo '<script>alert("gagal");window.location.assign("http://localhost/wargaapps/page.php?page=homewarga")</script>';
    }
}
else {

$query = "SELECT * FROM  tm_data_warga where id_warga = '$id'";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_array($result);


?>
 <form method="post">
                    <div class="form-group">
                        <label class="control-label"> Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $row['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> No KK</label>
                        <input type="text" class="form-control" name="nokk" value="<?php echo $row['nokk'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> NIK</label>
                        <input type="text" class="form-control" name="nik" value="<?php echo $row['nik'] ?>">
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
                        <label class="control-label"> Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" value="<?php echo $row['pekerjaan'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Hubungan Keluarga</label>
                        <input type="text" class="form-control" name="hub_keluarga" value="<?php echo $row['hub_keluarga'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Keterangan Luar</label>
                        <input type="text" class="form-control" name="luar" value="<?php echo $row['luar'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Keterangan Pindah</label>
                        <input type="text" class="form-control" name="pindah" value="<?php echo $row['pindah'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Keterangan Wafat</label>
                        <input type="text" class="form-control" name="wafat" value="<?php echo $row['wafat'] ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info"  name="update">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    </div>
                </form>
<?php 
}
$edit = ob_get_clean();
?>


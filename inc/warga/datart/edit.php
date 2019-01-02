<?php 
ob_start();

$id = $_GET['id'];

if(isset($_POST['update'])){

    $nama = mysqli_real_escape_string($link,$_POST['nama']);
    $alamat = mysqli_real_escape_string($link,$_POST['alamat']);
    $rt = mysqli_real_escape_string($link,$_POST['rt']);
    $rw = mysqli_real_escape_string($link,$_POST['rw']);
    $kelurahan = mysqli_real_escape_string($link,$_POST['kelurahan']);
    $kecamatan = mysqli_real_escape_string($link,$_POST['kecamatan']);
    $propinsi = mysqli_real_escape_string($link,$_POST['propinsi']);
    $alamat_sekret = mysqli_real_escape_string($link,$_POST['alamat_sekret']);
    $nama_rw = mysqli_real_escape_string($link,$_POST['nama_rw']);
    $kop_surat = mysqli_real_escape_string($link,$_POST['kop_surat']);
    $profil = mysqli_real_escape_string($link,$_POST['profil']);



    $queryUpdate = mysqli_query($link,"UPDATE tm_data_rt 
                                    SET tm_data_rt.nama='$nama',
                                    tm_data_rt.alamat='$alamat',
                                    tm_data_rt.rt='$rt',
                                    tm_data_rt.rw='$rw',
                                    tm_data_rt.kelurahan='$kelurahan',
                                    tm_data_rt.kecamatan='$kecamatan',
                                    tm_data_rt.propinsi='$propinsi',
                                    tm_data_rt.alamat_sekret='$alamat_sekret',
                                    tm_data_rt.nama_rw='$nama_rw',
                                    tm_data_rt.kop_surat='$kop_surat',
                                    tm_data_rt.profil='$profil'
                                    WHERE id_rt = '$id' ");
    if($queryUpdate){
        echo '<script>alert("ok");window.location.assign("http://localhost/wargaapps/page.php?page=homert")</script>';
    }
    else {
        echo '<script>alert("gagal");window.location.assign("http://localhost/wargaapps/page.php?page=homert")</script>';
    }
}
else {

$query = "SELECT * FROM  tm_data_rt where id_rt = '$id'";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_array($result);


?>
                <form method="post">
                    <div class="form-group">
                        <label class="control-label"> Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $row['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> RT</label>
                        <input type="text" class="form-control" name="rt" value="<?php echo $row['rt'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> RW</label>
                        <input type="text" class="form-control" name="rw" value="<?php echo $row['rw'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Kelurahan</label>
                        <input type="text" class="form-control" name="kelurahan" value="<?php echo $row['kelurahan'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" value="<?php echo $row['kecamatan'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Propinsi</label>
                        <input type="text" class="form-control" name="propinsi" value="<?php echo $row['propinsi'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat Sekretaris</label>
                        <input type="text" class="form-control" name="alamat_sekret" value="<?php echo $row['alamat_sekret'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Nama Ketua RW</label>
                        <input type="text" class="form-control" name="nama_rw" value="<?php echo $row['nama_rw'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Kop Surat</label>
                        <input type="text" class="form-control" name="kop_surat" value="<?php echo $row['kop_surat'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Profil Singkat</label>
                        <input type="text" class="form-control" name="profil" value="<?php echo $row['profil'] ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info"  name="update">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    </div>
                </form>
<?php 
}
$editrt = ob_get_clean();
?>


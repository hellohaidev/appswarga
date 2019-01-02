<?php 
ob_start();

if(isset($_POST['save'])){

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

    $queryInsert = mysqli_query($link,"insert into tm_data_kk_kontrak
                                (nama_kk,tempat_lahir,tgl_lahir,jk,agama,pendidikan,pekerjaan,nokk,ktp,jml_anggota,alamat,tetap,luar,kontrak)
                             values('$nama_kk','$tempat_lahir','$tgl_lahir','$jk','$agama','$pendidikan',
                                    '$pekerjaan','$nokk','$ktp','$jml_anggota','$alamat','$tetap','$luar','$kontrak')");
    
    if($queryInsert){
        echo '<script>alert("ok");window.location.assign("http://localhost/wargaapps/page.php?page=homekkkontrak")</script>';
        
    }
    else {
        echo '<script>alert("gagal oiiii");window.location.assign("http://localhost/wargaapps/page.php?page=homekkkontrak")</script>';
    }


}




?>

        <button type="button" class="btn btn-info" style="margin-bottom:30px;" data-toggle="modal" data-target="#myModal2">+ Data</button>
    
    
        <table class="table table-bordered display" id="data" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kepala Keluarga</th>
                    <th>Nomor KK</th>
                    <th>Actions</th>
                </tr>
                
            </thead>
            <tbody>
            <?php
                $querySelect = mysqli_query($link,"select * from tm_data_kk_kontrak");
                
                    $no = 1;
                    while($row = mysqli_fetch_array($querySelect)){
            ?>
            
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama_kk']; ?></td>
                    <td><?php echo $row['nokk']; ?></td>
                    <td>
                        <a href="?page=editkkkontrak&id=<?php echo $row['id_kk_kontrak'] ?>" class="btn btn-info">Edit</a>  <a href="?page=deletekkkontrak&id=<?php echo $row['id_kk_kontrak'] ?>" class="btn btn-danger">Delete</a>  <a href="?page=viewkkkontrak&id=<?php echo $row['id_kk_kontrak'] ?>" class="btn btn-primary">View</a>
                    </td>
                    
                </tr>
            <?php 
                    }
                
            ?>
            </tbody>
        </table>
    


    <!--Adding data with modal-->


    <div class="modal" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">


            <div class="modal-header">
                <h4 class="modal-title">Form Data KK</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>


            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label class="control-label"> Nama Kepala Keluarga</label>
                        <input type="text" class="form-control" name="nama_kk" placeholder="input nama">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="input tempat lahir">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" placeholder="input tanggal lahir">
                    </div>
                    <div class="form-group">
                        <select name="jk" class="form-control">
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="agama" class="form-control">
                            <option value="1">Islam</option>
                            <option value="2">Kristen</option>
                            <option value="3">Hindu</option>
                            <option value="4">Budha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Pendidikan</label>
                        <input type="text" class="form-control" name="pendidikan" placeholder="input Pendidikan">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" placeholder="input Pekerjaan">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nomor KK</label>
                        <input type="text" class="form-control" name="nokk" placeholder="input Nomor KK">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> KTP</label>
                        <input type="text" class="form-control" name="ktp" placeholder="input KTP">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Jumlah Anggota</label>
                        <input type="text" class="form-control" name="jml_anggota" placeholder="input Jumlah Anggota">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="input Alamat">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Keterangan Tetap</label>
                        <input type="text" class="form-control" name="tetap" placeholder="input kterangan tetap ">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Keterangan Luar</label>
                        <input type="text" class="form-control" name="luar" placeholder="input keterangan luar">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Keterangan Kontrak</label>
                        <input type="text" class="form-control" name="kontrak" placeholder="input keterangan kontrak ">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info"  name="save">Simpan</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    </div>
                </form>
            </div>


            
            </div>
        </div>
    </div>

<?php 
$homepindah = ob_get_clean();
?>
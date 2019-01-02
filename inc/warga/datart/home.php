<?php 
ob_start();

if(isset($_POST['save'])){

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

    $queryInsert = mysqli_query($link,"insert into tm_data_rt 
                                (nama,alamat,rt,rw,kelurahan,kecamatan,propinsi,alamat_sekret,nama_rw,kop_surat,profil)
                             values('$nama','$alamat','$rt','$rw','$kelurahan','$kecamatan',
                                    '$propinsi','$alamat_sekret','$nama_rw','$kop_surat','$profil')");
    
    if($queryInsert){
        echo '<script>alert("ok");window.location.assign("http://localhost/wargaapps/page.php?page=homert")</script>';
        
    }
    else {
        echo '<script>alert("gagal oiiii");window.location.assign("http://localhost/wargaapps/page.php?page=homert")</script>';
    }


}




?>

        <button type="button" class="btn btn-info" style="margin-bottom:30px;" data-toggle="modal" data-target="#myModal2">+ Data</button>
    
    
        <table class="table table-bordered display" id="data" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>RT / RW</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Propinsi</th>
                    <th>Alamat Sekretaris</th>
                    <th>Nama Ketua RW</th>
                    <th>Kop Surat</th>
                    <th>Profil Singkat</th>
                    <th>Actions</th>
                </tr>
                
            </thead>
            <tbody>
            <?php
                $querySelect = mysqli_query($link,"select * from tm_data_rt");
                
                    $no = 1;
                    while($row = mysqli_fetch_array($querySelect)){
            ?>
            
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['rt'] . '/' . $row['rw']  ; ?></td>    
                    <td><?php echo $row['kelurahan']; ?></td>
                    <td><?php echo $row['kecamatan']; ?></td>
                    <td><?php echo $row['propinsi']; ?></td>
                    <td><?php echo $row['alamat_sekret']; ?></td>
                    <td><?php echo $row['nama_rw']; ?></td>
                    <td><?php echo $row['kop_surat']; ?></td>
                    <td><?php echo $row['profil']; ?></td>
                    
                    <td>
                        <a href="?page=editrt&id=<?php echo $row['id_rt'] ?>" class="btn btn-info">Edit</a> || <a href="?page=deletert&id=<?php echo $row['id_rt'] ?>" class="btn btn-danger">Delete</a>
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
                <h4 class="modal-title">Form Data RT</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>


            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label class="control-label"> Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="input nama">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="input alamat">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> RT</label>
                        <input type="text" class="form-control" name="rt" placeholder="input RT">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> RW</label>
                        <input type="text" class="form-control" name="rw" placeholder="input RW">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Kelurahan</label>
                        <input type="text" class="form-control" name="kelurahan" placeholder="input Kelurahan">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" placeholder="input Kecamatan">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Propinsi</label>
                        <input type="text" class="form-control" name="propinsi" placeholder="input Propinsi">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat Sekretaris</label>
                        <input type="text" class="form-control" name="alamat_sekret" placeholder="input Alamat Sekretaris">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Nama Ketua RW</label>
                        <input type="text" class="form-control" name="nama_rw" placeholder="input Ketua RW">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Kop Surat</label>
                        <input type="text" class="form-control" name="kop_surat" placeholder="input Kop Surat">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Profil Singkat</label>
                        <input type="text" class="form-control" name="profil" placeholder="input Profil Singkat ">
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
$homert = ob_get_clean();
?>
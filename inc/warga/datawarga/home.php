<?php 
ob_start();

if(isset($_POST['save'])){

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

    $queryInsert = mysqli_query($link,"insert into tm_data_warga (nama,nokk,nik,tempat_lahir,tgl_lahir,pekerjaan,hub_keluarga,luar,pindah,wafat)
                             values('$nama','$nokk','$nik','$tempatlahir','$tgllahir','$pekerjaan','$hubkeluarga','$luar','$pindah','$wafat')");
    
    if($queryInsert){
        echo '<script>alert("ok");window.location.assign("http://localhost/wargaapps/page.php?page=homewarga")</script>';
        
    }
    else {
        echo '<script>alert("gagal oiiii");window.location.assign("http://localhost/wargaapps/page.php?page=homewarga")</script>';
    }


}




?>

        <button type="button" class="btn btn-info" style="margin-bottom:30px;" data-toggle="modal" data-target="#myModal">+ Data</button>
    
    
        <table class="table table-bordered display" id="data" width="100%">
            <thead>
                <tr>
                    <th style="vertical-align:top;" rowspan="2">No</th>
                    <th style="vertical-align:top;" rowspan="2">Nama</th>
                    <th style="vertical-align:top;" rowspan="2">No KK</th>
                    <th style="vertical-align:top;" rowspan="2">NIK</th>
                    <th style="vertical-align:top;" rowspan="2">Tempat dan Tanggal Lahir</th>
                    <th style="vertical-align:top;" rowspan="2">Pekerjaan</th>
                    <th style="vertical-align:top;" rowspan="2">Hubugan Keluarga</th>
                    <th class="text-center" colspan="3">Keterangan</th>
                    <th style="vertical-align:top;" rowspan="2">Actions</th>
                </tr>
                <tr>
                    <th>Luar</th>
                    <th>Pindah</th>
                    <th>Wafat</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $querySelect = mysqli_query($link,"select * from tm_data_warga");
                
                    $no = 1;
                    while($row = mysqli_fetch_array($querySelect)){
            ?>
            
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['nokk']; ?></td>
                    <td><?php echo $row['nik']; ?></td>
                    <td><?php echo $row['tempat_lahir'] . ',' . $row['tgl_lahir'] ; ?></td>
                    <td><?php echo $row['pekerjaan']; ?></td>
                    <td><?php echo $row['hub_keluarga']; ?></td>
                    <td><?php echo $row['luar']; ?></td>
                    <td><?php echo $row['pindah']; ?></td>
                    <td><?php echo $row['wafat']; ?></td>
                    
                    <td>
                        <a href="?page=edit&id=<?php echo $row['id_warga'] ?>" class="btn btn-info">Edit</a> || <a href="?page=delete&id=<?php echo $row['id_warga'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                    
                </tr>
            <?php 
                    }
                
            ?>
            </tbody>
        </table>
    


    <!--Adding data with modal-->


    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">


            <div class="modal-header">
                <h4 class="modal-title">Form Data Warga</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>


            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label class="control-label"> Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="input nama">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> No KK</label>
                        <input type="text" class="form-control" name="nokk" placeholder="input nomor KK">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> NIK</label>
                        <input type="text" class="form-control" name="nik" placeholder="input NIK">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="input Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" placeholder="input Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" placeholder="input Pekerjaan">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Hubungan Keluarga</label>
                        <input type="text" class="form-control" name="hub_keluarga" placeholder="input Hubungan Keluarga">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Keterangan Luar</label>
                        <input type="text" class="form-control" name="luar" placeholder="input Keterangan Luar">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Keterangan Pindah</label>
                        <input type="text" class="form-control" name="pindah" placeholder="input Keterangan Pindah">
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Keterangan Wafat</label>
                        <input type="text" class="form-control" name="wafat" placeholder="input Keterangan Wafat">
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
$homewarga = ob_get_clean();
?>
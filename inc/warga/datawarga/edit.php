<?php 
ob_start();

if(isset($_POST['update'])){

}
else {


?>
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
                        <button type="submit" class="btn btn-info"  name="update">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    </div>
                </form>
<?php 
}
$edit = ob_get_clean();
?>


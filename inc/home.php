<?php 
ob_start();

$statistikWarga = mysqli_query($link,"SELECT COUNT(*) as jumlah from tm_data_warga");
$ds = mysqli_fetch_array($statistikWarga);

?>


<div class="row">


    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info text-white">Statistik RT</div>
            <div class="card-body">0</div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">Statistik Warga</div>
            <div class="card-body"><?php echo $ds['jumlah']; ?></div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-warning text-white">Statistik KK</div>
            <div class="card-body">0</div>
        </div>
    </div>

</div>


        
<?php 
$home = ob_get_clean();
?>
<?php 

ob_start();

$id = $_GET['id'];
$query = mysqli_query($link,"delete from tm_data_warga where id_warga='$id'");

if($query){
    echo '<script>alert("ok");window.location.assign("http://localhost/wargaapps/page.php?page=homewarga")</script>';
}
else {
    echo '<script>alert("gagal oiiii");window.location.assign("http://localhost/wargaapps/page.php?page=homewarga")</script>';
}

?>
<?php 
$delete = ob_get_clean();
?>
<?php 

ob_start();

$id = $_GET['id'];
$query = mysqli_query($link,"delete from tm_data_kk_kontrak where id_kk_kontrak='$id'");

if($query){
    echo '<script>alert("ok");window.location.assign("http://localhost/wargaapps/page.php?page=homekkkontrak")</script>';
}
else {
    echo '<script>alert("gagal oiiii");window.location.assign("http://localhost/wargaapps/page.php?page=homekkkontrak")</script>';
}

?>
<?php 
$deletekkkontrak = ob_get_clean();
?>
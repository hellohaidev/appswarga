<?php 

ob_start();

$id = $_GET['id'];
$query = mysqli_query($link,"delete from tm_data_kk_tetap where id_kk_tetap='$id'");

if($query){
    echo '<script>alert("ok");window.location.assign("http://localhost/wargaapps/page.php?page=homekktetap")</script>';
}
else {
    echo '<script>alert("gagal oiiii");window.location.assign("http://localhost/wargaapps/page.php?page=homekktetap")</script>';
}

?>
<?php 
$deletekktetap = ob_get_clean();
?>
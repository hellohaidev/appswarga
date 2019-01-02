<?php 

ob_start();

$id = $_GET['id'];
$query = mysqli_query($link,"delete from tm_data_rt where id_rt='$id'");

if($query){
    echo '<script>alert("ok");window.location.assign("http://localhost/wargaapps/page.php?page=homert")</script>';
}
else {
    echo '<script>alert("gagal oiiii");window.location.assign("http://localhost/wargaapps/page.php?page=homert")</script>';
}

?>
<?php 
$deletert = ob_get_clean();
?>
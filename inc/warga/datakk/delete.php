<?php 

ob_start();

$id = $_GET['id'];
$query = mysqli_query($link,"delete from tm_data_kk where id_kk='$id'");

if($query){
    echo '<script>alert("ok");window.location.assign("http://localhost/wargaapps/page.php?page=homekk")</script>';
}
else {
    echo '<script>alert("gagal oiiii");window.location.assign("http://localhost/wargaapps/page.php?page=homekk")</script>';
}

?>
<?php 
$deletekk = ob_get_clean();
?>
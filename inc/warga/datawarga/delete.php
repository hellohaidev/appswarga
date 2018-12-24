<?php 

ob_start();

$id = $_GET['id'];
$query = mysqli_query($link,"delete from tm_progress where id_progres='$id'");

if($query){
    echo '<script>alert("ok");window.location.assign("http://localhost/komida/pie/crud/")</script>';
}
else {
    echo '<script>alert("gagal");window.location.assign("http://localhost/komida/pie/crud/")</script>';
}

?>
<?php 
$delete = ob_get_clean();
?>
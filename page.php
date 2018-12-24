<?php 
session_start();
error_reporting('E_ALL^E_NOTICE');

if(empty($_SESSION)){
    header('location:index.php');
}
elseif(isset($_POST['logout'])){
    session_destroy();
    header('location:index.php');
}
else {
    include 'lib/db.php';
    include 'nav.php';
    
if(isset($_POST['save'])){
    $member = $_POST['member'];
    $client = $_POST['client'];
    $disbursed = $_POST['disbursed'];
    $repaid = $_POST['repaid'];
    $out = $_POST['outstanding'];
    $saving = $_POST['saving'];
    $par = $_POST['par'];
    $branch = $_POST['branch'];
    $staff = $_POST['staff'];
    $male = $_POST['male'];
    $female = $_POST['female'];
    $child = $_POST['childs'];
    $tahun = date('Y');
    

    $query = "insert into tm_progress (member,client,disbursed,repaid,outstanding,saving,par,branch,staff,male,female,childs,tahun) 
            values('$member','$client','$disbursed','$repaid','$out','$saving','$par','$branch','$staff','$male','$female','$child','$tahun')";
    $result = mysqli_query($link,$query);
    if($result){
        echo '<script>alert("sukses");window.location.assign("http://localhost/komida/pie/crud/")</script>';
    }
    else {
        echo '<script>alert("gagal");window.location.assign("http://localhost/komida/pie/crud/")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Papan Informasi Elektronik</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTable.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/> -->
    <link rel="stylesheet" type="text/css" href="assets/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet"> 
    
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Navbar</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Warga
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Data RT</a>
        <a class="dropdown-item" href="#">Data Warga</a>
        <a class="dropdown-item" href="#">Data KK</a>
      </div>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      
    </ul>
    <form method="post">
                <button type="submit" name="logout" class="btn btn-danger">Logout</button>
    </form>
  </div> 
</nav>

<div class="container">    
    
    <div style="margin-top:20px;">
        <?php echo $content; ?>
    </div>


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquerydataTable.js"></script>
    <script src="assets/js/popper.js"></script>
    <!-- <script src="assets/js/dataTable.js"></script> -->
    <script src="assets/js/dataTable.js"></script>
    <script>
        $(document).ready(function() {
            $('#data').DataTable({
                scrollX : true
            });
        });
    </script>
</div>
</body>
</html>
<?php 
}
?>
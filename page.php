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
    include '../lib/db.php';
    include './nav.php';
    
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
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/dataTable.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/> -->
    <link rel="stylesheet" type="text/css" href="../assets/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet"> 
    
</head>
<body>
<div class="container-fluid">

    <div class="text-center">
        <a href="http://localhost/komida/pie/crud/">
            <img src="../assets/img/logo.png"> <br>
            <form method="post">
                <button type="submit" name="logout" class="btn btn-danger">Logout</button>
            </form>
        </a>
    </div>

    <div class="container-fluid">
            <?php echo $content; ?>
    </div>


    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Form Target December <?php echo date('Y') ?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
            <form class="form-horizontal" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="member" placeholder="Isi Member"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="client" placeholder="Isi Client"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="disbursed" placeholder="Isi Disbursed"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="repaid" placeholder="Isi Repaid"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="outstanding" placeholder="Isi Outstanding"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="saving" placeholder="Isi Saving"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="par" placeholder="Isi Par"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="branch" placeholder="Isi Branch"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="staff" placeholder="Isi Staff"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="male" placeholder="Isi Male"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="female" placeholder="Isi Female"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="childs" placeholder="Isi Child"/>
                </div>
                
                <div class="form-group">
                    <input type="submit" name="save" class="btn btn-primary" value="Simpan"/>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>    
                </div>
             </form>  
            </div>
            </div>
        </div>
    </div>



    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquerydataTable.js"></script>
    <script src="../assets/js/popper.js"></script>
    <!-- <script src="../assets/js/dataTable.js"></script> -->
    <script src="../assets/js/dataTable.js"></script>
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
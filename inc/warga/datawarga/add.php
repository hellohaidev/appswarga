<?php 
include '../lib/db.php';

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
        echo '<script>alert("sukses")</script>';
    }
    else {
        echo '<script>alert("gagal")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Data</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/style.css"/>
    
</head>
<body>
    <div class="container">
        <h1>ADD DATA</h1>
        <div class="row">
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
                </div>
             </form>   
        </div>

    

      
    </div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/popper.js"></script>
    </body>
</html>
<?php
ob_start();
$id = $_GET['id'];
if(isset($_POST['update'])){

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

    $query = "update tm_progress 
                set 
                member = '$member',
                client= '$client',
                disbursed = '$disbursed',
                repaid = '$repaid',
                outstanding  = '$out',
                saving = '$saving',
                par = '$par',
                branch = '$branch',
                staff = '$staff',
                male = '$male',
                female = '$female',
                childs = '$child'
                where tm_progress.id_progres = '$id' ";

    $result = mysqli_query($link,$query);
    if($result){
        echo '<script>alert("ok");window.location.assign("http://localhost/komida/pie/crud/")</script>';
    }
    else {
        echo '<script>alert("gagal");window.location.assign("http://localhost/komida/pie/crud/")</script>';
    }

}
else {
    $query = mysqli_query($link,"select * from tm_progress where tm_progress.id_progres='$id'");
    $row = mysqli_fetch_array($query);
?>
<style>
    #shadow {
        -moz-box-shadow:    3px 3px 5px 6px #ccc;
        -webkit-box-shadow: 3px 3px 5px 6px #ccc;
        box-shadow:         3px 3px 5px 6px #ccc;
        background-color:#33cc34;
        color:#fff;
        font-weight : bold;
        font-family: 'Roboto Mono', monospace;
    }
    
</style>
<div class="container" style="margin-top : 20px;">
    <form class="form-horizontal" method="post">
        <div class="row">   
                
            <div class="col-md-6" id="shadow">
                <div class="form-group">
                <label class="control-label">Member</label>
                    <input type="text" class="form-control" name="member" value="<?php echo $row['member'] ?>"/>
                </div>
                <div class="form-group">
                <label class="control-label">Client</label>
                    <input type="text" class="form-control" name="client" value="<?php echo $row['client'] ?>"/>
                </div>
                <div class="form-group">
                <label class="control-label">Disbursed</label>
                    <input type="text" class="form-control" name="disbursed" value="<?php echo $row['disbursed'] ?>"/>
                </div>
                <div class="form-group">
                <label class="control-label">Repaid</label>
                    <input type="text" class="form-control" name="repaid" value="<?php echo $row['repaid'] ?>"/>
                </div>
                <div class="form-group">
                <label class="control-label">Outstanding</label>
                    <input type="text" class="form-control" name="outstanding" value="<?php echo $row['outstanding'] ?>"/>
                </div>
                <div class="form-group">
                <label class="control-label">Saving</label>
                    <input type="text" class="form-control" name="saving" value="<?php echo $row['saving'] ?>"/>
                </div>
                
            </div>

            <div class="col-md-6" id="shadow">
                <div class="form-group">
                <label class="control-label">Par</label>
                    <input type="text" class="form-control" name="par" value="<?php echo $row['par'] ?>"/>
                </div>
                <div class="form-group">
                <label class="control-label">Branch</label>
                    <input type="text" class="form-control" name="branch" value="<?php echo $row['branch'] ?>"/>
                </div>
                <div class="form-group">
                <label class="control-label">Staff</label>
                    <input type="text" class="form-control" name="staff" value="<?php echo $row['staff'] ?>"/>
                </div>
                <div class="form-group">
                <label class="control-label">Male</label>
                    <input type="text" class="form-control" name="male" value="<?php echo $row['male'] ?>"/>
                </div>
                <div class="form-group">
                <label class="control-label">Female</label>
                    <input type="text" class="form-control" name="female" value="<?php echo $row['female'] ?>"/>
                </div>
                <div class="form-group">
                <label class="control-label">Childs</label>
                    <input type="text" class="form-control" name="childs" value="<?php echo $row['childs'] ?>"/>
                </div>
                
                
            </div>
        
            <div class="form-group" style="margin-top:20px;">
                    <input type="submit" name="update" class="btn btn-primary" value="Update"/>
                    <a href="?page=home" class="btn btn-success">Kembali</a>
                </div>
            </div>
        
    </form>
 </div>
<?php
} 
$edit = ob_get_clean();
?>
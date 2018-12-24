<?php 
ob_start();
?>


<div class="row">

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Header</div>
            <div class="card-body">Basic card</div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Header</div>
            <div class="card-body">Basic card</div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Header</div>
            <div class="card-body">Basic card</div>
        </div>
    </div>

</div>


        
<?php 
$home = ob_get_clean();
?>
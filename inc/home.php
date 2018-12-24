<?php 
ob_start();
?>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-bottom:20px;">+ Data</button>
    
                <table class="table table-bordered display" id="data" width="100%"> 
                <thead>
                    <tr>
                        <th style="vertical-align:top;" rowspan="2">Member</th>
                        <th style="vertical-align:top;" rowspan="2">Client</th>
                        <th style="vertical-align:top;" rowspan="2">Disbursed</th>
                        <th style="vertical-align:top;" rowspan="2">Repaid</th>
                        <th style="vertical-align:top;" rowspan="2">Outstanding</th>
                        <th style="vertical-align:top;" rowspan="2">Saving</th>
                        <th style="vertical-align:top;" rowspan="2">Par</th>
                        <th style="vertical-align:top;" rowspan="2">Branch</th>
                        <th style="text-align:center;" colspan="4">Total</th>
                        <th style="vertical-align:top;" rowspan="2">Tahun</th>
                        <th style="vertical-align:top;" rowspan="2">Action</th>
                        
                    </tr>
                    <tr>
                        <th>Staff</tH>
                        <th>Male</tH>
                        <th>Female</tH>
                        <th>Child Of Member</tH>
                    </tr>   
                </thead>    
                <tbody>
                    <?php 
                        $query = "select * from tm_progress";
                        $result = mysqli_query($link,$query);
                        while($row = mysqli_fetch_array($result)){
                    
                    ?>
                        <tr>
                            <td><?php echo $row['member'] ?></td>
                            <td><?php echo $row['client'] ?></td>
                            <td><?php echo $row['disbursed'] ?></td>
                            <td><?php echo $row['repaid'] ?></td>
                            <td><?php echo $row['outstanding'] ?></td>
                            <td><?php echo $row['saving'] ?></td>
                            <td><?php echo $row['par'] ?>%</td>
                            <td><?php echo $row['branch'] ?></td>
                            <td><?php echo $row['staff'] ?></td>
                            <td><?php echo $row['male'] ?></td>
                            <td><?php echo $row['female'] ?></td>
                            <td><?php echo $row['childs'] ?></td>
                            <td><?php echo $row['tahun'] ?></td>
                            <td>
                                <a href="?page=edit&id=<?php echo $row['id_progres'] ?>">Edit</a> ||
                                <a href="?page=delete&id=<?php echo $row['id_progres'] ?>">Delete</a>
                            </td>
                        </tr>

                    <?php 
                        }
                    ?>
                </tbody>

            </table>

        
       

        
<?php 
$home = ob_get_clean();
?>
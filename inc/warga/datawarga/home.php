<?php 
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
        <button type="button" class="btn btn-primary">+ Data</button>
    
    
        <table class="table table-bordered display" id="data" width="100%">
            <thead>
                <tr>
                    <th style="vertical-align:top;" rowspan="2">No</th>
                    <th style="vertical-align:top;" rowspan="2">Nama</th>
                    <th style="vertical-align:top;" rowspan="2">No KK</th>
                    <th style="vertical-align:top;" rowspan="2">Tempat dan Tanggal Lahir</th>
                    <th style="vertical-align:top;" rowspan="2">Pekerjaan</th>
                    <th class="text-center" colspan="3">Keterangan</th>
                    <th style="vertical-align:top;" rowspan="2">Actions</th>
                </tr>
                <tr>
                    <th>Luar</th>
                    <th>Pindah</th>
                    <th>Wafat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>s</td>
                    <td>s</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>
                        <a href="#" class="btn btn-info">Edit</a> || <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                    
                </tr>
            </tbody>
        </table>
    
</body>
</html>

<?php 
$home = ob_get_clean();
?>
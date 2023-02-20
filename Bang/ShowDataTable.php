
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$Tk_Mk =  array('ThanhTam'=>'VoThanhTam','Nai'=>'DangMuiNai');

?>
    <table class="table">
        <thead>
            <tr>
                <th>Ten tai Khoan</th>
                <th>Mat khau</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                foreach ($variable as $key => $value) {
                $i=1;
                <td scope="row"><?php echo$i ?></td>
                <td>.$key</td>
                <td>.$value</td>
                $i++;
            }
            ?>
            </tr>
            
        </tbody>
    </table>
 
</table>


</body>
</html>
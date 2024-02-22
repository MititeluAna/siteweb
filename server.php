<?php

include 'connect.php';
?>

<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset ="UTF-8">
    <title>Update stire</title>
</head>

<style>
    
    th, td{
        padding : 10px;
        top: 30px;
    }

    th{
        background : #995050;
        color : white;
    }
    
    td{
        background : #bda0a0;
    }
</style>

<body>

<table class ="jos">
        <tr>
            <th>ID </th>
            <th>Nume </th>
            <th>Prenume </th>
            <th>Email </th>
            <th>Continut stire</th>  
        </tr>
        
        <?php
            $stiri = mysqli_query($connect,"SELECT * FROM `stiri`");
            $stiri = mysqli_fetch_all($stiri);
            foreach($stiri as $stire){
                ?>

                <tr>
                    <td><?= $stire[0] ?></td>
                    <td><?= $stire[1] ?></td>
                    <td><?= $stire[2] ?></td>
                    <td><?= $stire[3] ?></td>
                    <td><?= $stire[4] ?></td>

                    
                    <td><a style="color: green;" href="update.php?id=<?= $stire[0] ?>">Update</a></td>
                    <td><a style="color: black;" href="delete.php?id=<?= $stire[0] ?>">Delete</a></td>   
                    
                </tr>

                <?php
            }
        ?>

    </table>

</body>
</html>
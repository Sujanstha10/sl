<?php
    include 'connection.php';
    $query = "SELECT *FROM `publication`";

    $data=$conn->query($query);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<style>
    .edit{
        color:green;
    }
    .delete{
        color:red;
    }
</style>
<body>
    <table class="table" border=2px>
        <thead>
            <tr>
                <th>name</th>
                <th>address</th>
            </tr>
        </thead>   
        </tbody>
            <?php
                while($res= mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $res['name'] ?></td>
                <td><?php echo $res['address'] ?></td>
                 <td> <a class="edit" href="publicationUpdate.php?id=<?php echo $res['id']; ?>"> Edit </a> </td>
                <td> <a class="delete" href="publicationDelete.php?id=<?php echo $res['id']; ?>"> Delete </a> </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
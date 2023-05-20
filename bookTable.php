<?php
    include 'connection.php';
    $query = "SELECT *FROM `books`";

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
                <th>ISBN.N</th>
                <th>title</th>
                <th>category</th>
                <th>price</th>
                <th>PublicationId</th>
            </tr>
        </thead>   
        </tbody>
            <?php
                while($res= mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $res['ISBN'] ?></td>
                <td><?php echo $res['title'] ?></td>
                <td><?php echo $res['category'] ?></td>
                <td><?php echo $res['price'] ?></td>
                <td><?php echo $res['publicationId'] ?></td>
                 <td> <a class="edit" href="bookUpdate.php?id=<?php echo $res['id']; ?>"> Edit </a> </td>
                <td> <a class="delete" href="bookDelete.php?id=<?php echo $res['id']; ?>"> Delete </a> </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
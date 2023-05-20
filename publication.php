<?php
    include 'connection.php';

    if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $address=$_POST['address'];

    


        $query= "INSERT INTO `publication` (`name`,`address`) 
                VALUES ( '$name','$address')";

        if(mysqli_query($conn,$query))
        {
        echo "<script>alert('New record inserted')</script>";
        }
        else
        {
            echo "error".mysqli_error($conn);
        }
        }
        mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>form</title>
</head>
<body>
    <form method="POST" action="#">
        <label for="">Name:</label>
        <input type="text" name="name"><br><br>



        <label for="">Address:</label>
        <input type="text" name="address"><br><br>


        <button type="submit" name="submit">Submit</button>
    </form>


</body>
</html>
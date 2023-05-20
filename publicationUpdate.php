<?php
require('connection.php');
$id=$_REQUEST['id'];
$query = "SELECT * from publication where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

print_r($row);


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $address=$_POST['address'];



    echo $name;
    echo $address;




$query= "UPDATE publication SET 
name='$name',
address='$address,

 WHERE id='$id'
";

if(mysqli_query($conn,$query))
{
echo "<script>alert('New record inserted')</script>";
}
else
{
    echo "error".mysqli_error($conn);
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>form</title>
</head>
<body>
    <form method="POST" action="#">
        <label for="">name:</label>
        <input type="text" name="name" value="<?php echo $row["name"] ?>" /><br>

         <label for="">address:</label>
        <input type="text" name="address" value="<?php echo $row["address"] ?>"><br><br>


        <button type="submit" name="submit" >Submit</button>
    </form>


</body>
</html>
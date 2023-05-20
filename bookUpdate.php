<?php
require('connection.php');
$id=$_REQUEST['id'];
$query = "SELECT * from books where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

print_r($row);


if(isset($_POST['submit'])){
    $ISBN=$_POST['ISBN'];
    $title=$_POST['title'];
    $category=$_POST['category'];
    $price=$_POST['price'];
    $publicationId=$_POST['publicationId'];


    echo $ISBN;
    echo $title;
    echo $category;
    echo $price;
    echo $publicationId;




$query= "UPDATE books SET
ISBN='$ISBN',
title='$title',
category='$category',
price='$price',
publicationId='$publicationId'
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
        <label for="">ISBN:</label>
        <input type="number" name="ISBN" value="<?php echo $row["ISBN"] ?>" /><br>

         <label for="">title:</label>
        <input type="text" name="title" value="<?php echo $row["title"] ?>"><br><br>

        <label for="">category:</label>
        <input type="text" name="category" value="<?php echo $row["category"] ?>"/><br>

        <label for="">price:</label>
        <input type="number" name="price" value="<?php echo $row["price"] ?>"/><br>

        <label for="">PublicationId:</label>
        <select name="publicationId">
    <option value="">Select PublicationId</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
  
</select>

        <button type="submit" name="submit" >Submit</button>
    </form>


</body>
</html>
<?php
include "connection.php";
$pattern="/^[a-zA-Z]*$/";
if (isset($_POST["submit"] )) {
	$ISBN = $_POST["ISBN"];
	$title = $_POST["title"];
	$category = $_POST["category"];
	$price = $_POST["price"];
	$publicationId = $_POST["publicationId"];
echo $ISBN;
	if(preg_match($pattern,$category) && preg_match($pattern,$title)  ){
		
	$query = "INSERT INTO books (ISBN,title,category,price,publicationId) 
	values ('$ISBN','$title','$category','$price','$publicationId')";

if ($conn->query($query)){
   echo "Inserted successfully";
}
else {
   echo $conn->error;
}
		
}else{
	
	echo "Please enter valid data";
	}
}



?>

 
<!DOCTYPE html>
<html>
<head>
	<title>PHP Form Example</title>
</head>
<body>



<form method="POST" action="#">
<label>ISBN:</label>
<input type="number" name="ISBN">
<br>
<label>title:</label>
<input type="text" name="title">
<br>

<label>category:</label>
<input type="text" name="category">
<br>
<label>price:</label>
<input type="number" name="price">
<br>
<br>

<label>PublicationId:</label>
<select name="publicationId">
    <option value="">Select PublicationId</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  
</select>
<br>


<br>


	<!-- <input type="submit" value="Submit"> -->
    <button name="submit">submit</button>



</form>
</html>
</body>

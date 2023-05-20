<?php
$server="localhost";
$username="root";
$password="";



$conn = new mysqli($server,$username);
if($conn){
echo("connection established");
mysqli_select_db($conn,"sl");
}
?> 
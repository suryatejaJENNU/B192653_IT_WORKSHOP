<?php

include("db_connect.php");

echo "</br>"; 

if(isset($_POST['signup']))
{

$name=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$query="insert into login(username,password,email) values('$name','$password','$email')";


}
if(mysqli_query($conn,$query))
{
  echo "Registered successfully!";
}
else{
echo "data not inserted";
}


?>

<?php
include("db_connect.php");
echo "<br>";

if(isset($_POST['login']))
{

$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from login where username='$username' and password='$password'";

$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);

}

if($row['username']==$username && $row['password']==$password)
{
  echo "Login successfully!";
  echo "<br>";
  echo "Welcome to"." ".$username;
}
else{
echo "provide correct details";
}

mysqli_close($conn);

?>











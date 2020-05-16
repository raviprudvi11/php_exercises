<?php
$username1 = $_POST['user'];
 

// connecting to mysql db;
mysqli_connect("localhost","root","");
mysqli_select_db("login");

$result = mysqli_query("select * from users where username = '$username1'") or die("Failed to query database ".mysqli_error());
$row = mysqli_fetch_array($result);
if($row['username']==$username1){
echo "login sucess!!!! Welcome".$row['username'];
}else{
echo"wrong username ";
}

?>
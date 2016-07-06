<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "");
 mysqli_select_db($link,"achanta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

  $name="";
  $phone="";
  $age="";
 $name=$_POST["name"];
$phone=$_POST["phone"];
$age=$_POST["age"];
echo $name;
// attempt insert query execution
$sql = "INSERT INTO akhila (name,phone,age) VALUES ('$name','$phone','$age')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// close connection
mysqli_close($link);
?>
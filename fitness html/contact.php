<?php

$fname=$_POST["first"];
$lname=$_POST["last"];
$subject=$_POST["subject"];
$email=$_POST["email"];
$message=$_POST["message"];

$host="localhost";
$user="root"
$pass="root";
$dbname="demo";
$link = mysqli_connect($host,$user,$pass,$dbname);

if(mysqli_connect_error()){
die('connect error('.mysqli_connect_error());
}
else{
 $sql= "INSERT INTO submit(fname,lname,subject,email,message) values ('$fname','$lname','$subject','$email','$message');
 if(mysqli_query($link,$sql)){
 echo "new record is added successfully";
 }
 else{
 echo "error".mysqli_error($link);
 
}
$mysqli_close($link);
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitnesswebsite";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname=$_POST["name"];
$lname=$_POST["user"];
$email=$_POST["email"];
$message=$_POST["pass"];

 $sql= "INSERT INTO signup(fullname,username,email,pass) values ('$fname','$lname','$email','$message')";
 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
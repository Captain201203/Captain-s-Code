<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbName = "user_db";

$con = mysqli_connect($servername, $username,$password,$dbName);

if(mysqli_connect_errno){
    echo "Failed to connect!";
    exit();
}
echo "Connection success";
?>
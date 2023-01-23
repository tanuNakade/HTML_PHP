<?php
// DB Details
$servername= "localhost";
$usernme= "root";
$password= "";
$dbname= "mysite";

$conn = mysqli_connect($servername, $usernme, $password, $dbname);

if (!$conn){
    die("connection failed:".$conn->connect_error);
}

?>
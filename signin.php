<?php
// DB Details
$servername= "localhost";
$usernme= "root";
$password= "";
$dbname= "mysite";

$conn = mysqli_connect($servername, $usernme,$password,$dbname);

if (!$conn){
    die("connection failed:".$conn->connect_error);
}

$name =$_POST['name'];
$mobile =$_POST['mobile'];
$email =$_POST['email'];
$address =$_POST['address'];
$gender =$_POST['gender'];

$sql = "INSERT INTO users (name, mobile, email, address, gender) VALUES ('$name', '$mobile', '$email', '$address', '$gender')";


if(mysqli_query($conn, $sql)) {
    echo "New user created successfully!";
    header("Location: http://localhost/form.php");
    exit();
} else {
    echo "Error: ";
}

mysqli_close($conn);
?>
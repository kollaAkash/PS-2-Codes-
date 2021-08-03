<?php

$host = "localhost";

$dbusername = "root";

$dbpassword = "";

$db_name = "yb counsultants";

 #this code will provide connection to the database

$connect = new mysqli($host, $dbusername, $dbpassword, $db_name);

if (!$connect){

die("connection failed: " . mysqli_connect_error());

} 

$email = $_POST['email'];

$sql = "INSERT Into  subscriptions (email) values ( '".$email."')";

if (mysqli_query($connect, $sql)){

header('Location: about.html');

} else {

echo "Error: " . $sql . "<br>" . mysqli_error($connect);

}

mysqli_close($connect);

?>
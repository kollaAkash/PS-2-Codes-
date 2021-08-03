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

$name =$_POST['name'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$company =$_POST['company'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$sql = "INSERT Into  contactus (name, email, phone, company, subject, message) values ('".$name."', '".$email."' ,'".$phone."' , '".$company."' ,'".$subject."' , '".$message."')";

if (mysqli_query($connect, $sql)){

header('Location: contact.html');

} else {

echo "Error: " . $sql . "<br>" . mysqli_error($connect);

}

mysqli_close($connect);

?>
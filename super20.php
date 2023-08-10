<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$message = $_POST['message'];
   
//database connection

$conn = new mysqli('localhost','root','','Super-20');
if($conn->connect_error){
    die('Connection Failed : '.$conn ->connect_error);
}else{
    $stmt = $conn->prepare("insert into users(name,email,phonenumber,message) values(?,?,?,?)");
    $stmt->bind_param("ssis",$name,$email,$phonenumber,$message);
    $stmt->execute();
    echo "submited";
    $stmt->close();
    $conn->close();
}

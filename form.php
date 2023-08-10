<?php 
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$ssc = $_POST['ssc'];
$hsc = $_POST['hsc'];
$last = $_POST['last'];
$about = $_POST['about'];
   
// Database connection
$conn = new mysqli('localhost', 'root', '', 'Super-20');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO form (first_name, last_name, phone_number, email, ssc, hsc, last, about) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiiiis", $firstName, $lastName, $phoneNumber, $email, $ssc, $hsc, $last, $about);
    $stmt->execute();
    echo "Submitted";
    $stmt->close();
    $conn->close();
}
?>

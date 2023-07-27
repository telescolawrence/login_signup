<?php

// Validate username, password, and OTP
if(isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];


$host ='localhost';
$user = 'root';
$password = '';
$dbname ='test';

$conn = new mysqli_connect($host ,$user,$password,$dbname);


$sql = "INSERT INTO users(firstname,lastname,email,password) values ('$firstname','$lastname','$email','$password')";
mysqli_query($conn,$sql);
echo"registration successful...";
}


//create the database
// $conn = new mysqli('localhost','root','','test');
// if($conn->connect_error){
//   die('connection Failed  :'.$conn->connect_error);
// }else{
//   $stmt = $conn->prepare("insert into registration(firstname, lastname, email, password)
//   values(?, ?, ?, ?)");
//   $stmt->bind_param("ssss", $firstname, $lastname, $email, $password);
//   $stmt->execute();
//   echo"registration successful...";
//   $stmt->close();
//   $conn->close();
// }
?>
  
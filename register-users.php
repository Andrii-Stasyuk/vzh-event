<?php
session_start();
require "db_conect.php";
 if(!empty($_POST["button-users"])==true){
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$password = md5($_POST["password"]);
$phone = $_POST["phone"];
var_dump($phone);
$mysqli->query("INSERT INTO users(`Id`, `firstname`, `lastname`, `email`, `password`, `role`, `phone`) VALUES(null,'$firstname','$lastname','$email','$password','0', '$phone')");
$result = $mysqli->query("SELECT * FROM users WHERE `email` LIKE '%".$email."%'");
var_dump($_POST);
var_dump("INSERT INTO users(`Id`, `firstname`, `lastname`, `email`, `password`, `role`, `phone`) VALUES(null,'$firstname','$lastname','$email','$password','0', '$phone')");
if ($result->num_rows > 0) {
      $_SESSION['email'] = $email;
      echo "<script>window.location.href='cabinet.php'</script>";
}
        else{
            echo "<script>window.location.href='index.php'</script>";
        }
  }
?>
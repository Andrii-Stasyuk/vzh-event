<?php session_start(); ?>
<?php
if(!empty($_POST["button"])==true){
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $from=$_POST["from"];
    $to=$_POST["to"];
    $number_of_people=$_POST["number_of_people"];
    $number_of_rooms=$_POST["number_of_rooms"];
      // var_dump("");

    //  $call="INSERT INTO `users`(`Id`, `firstname`, `lastname`, `email`, `password`) VALUES (null,'$firstname','$lastname','$email','$password')";
     require "db_conect.php";  
                                 
     $mysqli->query("INSERT INTO `orders`(`id`, `firstname`, `lastname`, `email`, `mobile`, `day_from`, `day_to`, `number_of_people`,  `number_of_rooms`) VALUES (null,'$firstname','$lastname','$email','$phone','$from','$to','$number_of_people','$number_of_rooms')");
    //   echo '<script>window.location.href="index.php"</script>';
   }
   
?>
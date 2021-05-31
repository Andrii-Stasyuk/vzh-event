<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
  $email = $_SESSION['email'];
 require 'db_conect.php';
  $result = $mysqli->query("SELECT * FROM orders WHERE `email` LIKE '%".$email."%'");
  $order = mysqli_fetch_array($result);?>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Date-from</th>
      <th scope="col">Date-to</th>
      <th scope="col">Number_of_people</th>
      <th scope="col">Number_of_rooms</th>
    </tr>
  </thead>
  <tbody>
  <?php
  if(!empty($order)){
     ?>
      <tr>
        <!-- <th scope="row">1</th> -->
        <td><?php echo $order["Id"]; ?></td>
        <td><?php echo $order["firstname"]; ?></td>
        <td><?php echo $order['lastname']; ?></td>
        <td><?php echo $order['email']; ?></td>
        <td><?php echo $order['mobile']; ?></td>
        <td><?php echo $order['day_from']; ?></td>
        <td><?php echo $order['day_to']; ?></td>
        <td><?php echo $order['number_of_people']; ?></td>
        <td><?php echo $order['number_of_rooms']; ?></td>
        <td> <a href='u-users.php?id=<?php echo $order["Id"]; ?>'>Редагування</a> </td>
        <td> <a href='d-users.php?id=<?php echo $order["Id"]; ?>'>Видалення</a> </td>
      </tr>
      <?php
      }
     ?>
    
</body>
</html>
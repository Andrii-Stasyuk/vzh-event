<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <header class="header">
    <div class="container">
      <nav class="header-nav">
        <ul>
          <li>
            <a href="/admin.php">Головна</a>
          </li>
          <li>
            <a href="/">Перейти до головного сайту</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

<?php $id = $_GET['id'];
require "db_conect.php";  
$mysql="SELECT  `firstname`, `lastname`, `email`, `mobile`, `day_from`, `day_to`, `number_of_people`, `number_of_rooms` FROM `orders` WHERE `id`=".$id;

// var_dump("SELECT  `firstname`, `lastname`, `email`, `mobile`, `day_from`, `day_to`, `number_of_people`, `number_of_rooms` FROM `orders` WHERE `id`=".$id);
$result = $mysqli->query($mysql);
$row=mysqli_fetch_array($result);
echo "<pre>";
// var_dump($row["firstname"]);
?>
<div class="container">
<h2 class="update-title">Редагувати замовника номер <? echo $id; ?></h2>
<form  class="update-form" method="POST" action="update.php?id=<?echo $id?>">
     <h2>Ім'я</h2>
    <input  name="firstname" type="text" value="<?php echo $row["firstname"]?>">
    <h2>Прізвище</h2>
    <input  name="lastname" type="text"  value="<?php echo $row["lastname"]?>">
    <h2>Емейл</h2>
    <input name="email" type="email"  value="<?php echo $row["email"]?>">
    <h2>Номер телефону</h2>
    <input name="mobile"   value="<?php echo $row["mobile"]?>">
    <h2>День з</h2>
    <input name="day_from"   value="<?php echo $row["day_from"]?>">
    <h2>День до</h2>
    <input name="day_to"   value="<?php echo $row["day_to"]?>">
    <h2>Кількість людей</h2>
    <input name="number-of-people"   value="<?php echo $row["number_of_people"]?>">
    <h2>Кількість кімнат</h2>

    <input name="number-of-rooms"  value="<?php echo $row["number_of_rooms"]?>">


    <button name="button" value=true> Оновити </button>
  </form>



</div>
<?php
$firstname=$_POST["firstname"]; // Відправлення оновлених даних
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$from=$_POST["day_from"];
$to=$_POST["day_to"];
$number_of_people=$_POST["number-of-people"];
$number_of_rooms=$_POST["number-of-rooms"];

$text = "UPDATE orders SET firstname='$firstname',lastname='$lastname',email='$email',
mobile='$mobile',day_from='$from',day_to='$to',number_of_people='$number_of_people',
number_of_rooms='$number_of_rooms' WHERE id='$id'";




// var_dump($text);
// exit();
  if($_POST["button"]==true){
    $mysqli->query($text);
   echo '<script>window.location.href="orders.php"</script>';
 }



?>



</body>

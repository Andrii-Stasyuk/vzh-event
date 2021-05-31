<?php
  require "db_conect.php";
  $result = $mysqli->query("SELECT * FROM `products`");
    echo '<pre>';
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<a href="create_product.php">Додати продукт</a>
<body>
    <table class="table">
      <?php
       while($product=mysqli_fetch_array($result)){
        // print("Ім’я " . $row["firstname"] . "; ІД . " . $row["Id"] . "<br>");
        $new_array[]=$product;
  }
  ?>
  <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Text</th>
            </tr>
        </thead>
        <?php
         foreach($new_array as $key=>$value):
      ?>
        
             <!-- <th scope="row">1</th> -->
            <td><?php echo $value['Id']; ?></td>
            <td><?php echo $value['image']; ?></td>
            <td><?php echo $value['title']; ?></td>
            <td><?php echo $value['text']; ?></td>
        
          <td> <a href='update_product.php?id=<?php echo $value["Id"]; ?>'>Редагування</a> </td> 
        <td> <a href='delete_product.php?id=<?php echo $value["Id"]; ?>'>Видалення</a> </td>

    <tbody>
    <?php
       endforeach;
       ?>
</body>
</html>

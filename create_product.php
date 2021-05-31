<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  require "db_conect.php";
  $image = $_FILES['userfile']['name'];
  $title = $_POST['title'];
  $text = $_POST['text'];
  $result = $mysqli->query("INSERT INTO `products`(`Id`, `image`, `title`, `text`)  VALUES (null,'$image','$title','$text')");
  // var_dump("INSERT INTO `products`(Id', 'image', 'title', 'text')  VALUES (null,'$image','$title','$text')");
//   echo "<pre>";
//   var_dump($_POST);
//   var_dump($_FILES);
?>
<form enctype="multipart/form-data" action="" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <label for="exampleInputEmail1">Title</label>
    <input  name="title"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <label for="exampleInputEmail1">Text</label>
    <input  name="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" name='button' value="Отправить файл" />

</form>
</body>
</html>
<?php
$uploaddir = 'images/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

echo 'Некоторая отладочная информация:';
print_r($_FILES);

print "</pre>";
if(!empty($_POST['button'])){
    echo '<script>window.location.href="products.php"</script>';
}

?>


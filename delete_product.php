<?php
$id=$_GET["id"];
// var_dump($id);
require "db_conect.php";
$mysqli->query("DELETE FROM products WHERE id=".$id);
echo '<script>window.location.href="products.php"</script>';
?>
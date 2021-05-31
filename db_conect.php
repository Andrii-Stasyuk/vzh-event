<?php
   $mysqli = new mysqli('localhost', 'root', 'root', 'vzh');
    if (mysqli_connect_errno()) {
        printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
        exit;
     }
  ?> 
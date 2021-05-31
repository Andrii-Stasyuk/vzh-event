<?php session_start(); ?>
<?php
   
   require 'db_conect.php';
   $email = $_POST['email'];
   $result = $mysqli->query("SELECT * FROM users WHERE `email` LIKE '%".$email."%'");
   $user = mysqli_fetch_array($result);
if ($result->num_rows > 0) {
   if($user['role'] == 'admin'){
      echo "<script>window.location.href='admin.php'</script>";
   }
   else{
      echo "<script>window.location.href='cabinet.php'</script>";
   }
}
        else{
            echo "<script>window.location.href='index.php'</script>";
        }

    ?>
    </thead>
    <tbody>

        
            
  </body>
</html>
    

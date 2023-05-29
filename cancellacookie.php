<?php
      include 'auth.php'; 

      // Verifica dati GET
      if(isset($_GET["id_drone"]))
      {
            $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
            $id_drone = mysqli_real_escape_string($conn, $_GET["id_drone"]);
            setcookie($id_drone, "");
            mysqli_close($conn);
      }
?>
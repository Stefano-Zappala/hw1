<?php
    require_once "auth.php";

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
    $query = "SELECT * FROM prodotti";
    $res = mysqli_query($conn, $query);
    $cont=mysqli_num_rows($res);

    for($i=1; $i<=$cont; $i++)
    {
        if(isset($_COOKIE[$i]))
        {
            setcookie($_COOKIE[$i], "");
        }
    }

    header("Location: carrello.php");
?>
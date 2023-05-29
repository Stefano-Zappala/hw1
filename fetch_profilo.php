<?php
    include 'auth.php';
    $cookie = [];
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));

    if($username= VerificaConnessioneUtente())
        $username = mysqli_real_escape_string($conn, $username);

    $query = "SELECT * FROM ordine WHERE username = '$username'";
    $res= mysqli_query($conn, $query) or die(mysqli_error($conn));

    $eventi= array();

    if($res) 
    {
        while($row = mysqli_fetch_assoc($res))
        {
          $eventi[]= $row;
        }
    }

    echo json_encode($eventi);
    mysqli_close($conn);

?>
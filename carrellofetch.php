<?php
    include 'auth.php';
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));

    $query= "SELECT * from prodotti";

    $res= mysqli_query($conn, $query) or die(mysqli_error($conn));

    $cont=mysqli_num_rows($res);
    $eventi= array();

    for($i=1; $i<=$cont; $i++)
    {
        if(isset($_COOKIE[$i]))
        {
            $value= $_COOKIE[$i];
            $query2= "SELECT * FROM prodotti WHERE id_prodotto = $value";

            $res2= mysqli_query($conn, $query2) or die(mysqli_error($conn));
            
            if($res2) 
            {
                while($row = mysqli_fetch_assoc($res2))
                {
                    $eventi[]= $row;
                 }
            }  
        }
    }
    echo json_encode($eventi);
    mysqli_close($conn);

?>
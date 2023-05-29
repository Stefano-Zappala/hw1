
<?php

    include 'auth.php';

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));

    $query = "SELECT * FROM prodotti";
    $res = mysqli_query($conn, $query);

    $cont=mysqli_num_rows($res);

    for($i=1; $i<=$cont; $i++)
    {
        if(isset($_POST[$i]))
        {
            setcookie($i, $i);
            header("Location: carrello.php");
        }
    }
?>



<!DOCTYPE html>
<html>
<?php
    require_once 'auth.php';
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
    if($username= VerificaConnessioneUtente())
        $username = mysqli_real_escape_string($conn, $username);
?>

    
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ZPP_DRONE SHOP</title>
        <link rel='stylesheet' href='shop.css'>
        <script src="fetch_shop.js" defer="true"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;500&display=swap" rel="stylesheet">   

    </head>

    <body>
        <header>
            <nav>
                <a href="home.php">Home</a>
                <a href="shop.php">Shop</a>
                <img id="LOGO_DRONE_NAV" src="image/DRONE-GIF.gif" alt="">
                <a href="guida.php">Guida</a>
                <a href="info.php ">Info</a>
            </nav>

            <div class="titolo">
                <h1>
                    <em>Shop</em><br/>
                    <strong>ESPLORA IL CATALOGO ONLINE</strong><br/><br/>

                    <?php if(VerificaConnessioneUtente())
                    {
                        echo "<a class='nome' href='profilo.php'> Ciao $username </a> <br/><br/>";
                    }
                    ?> 

                    <a href="carrello.php" class="button"> CARELLO</a>
                </h1>
            </div>
        </header>
        

        <section>
            <form method="POST">
                <div id="flex_container">

                </div>
            </form>
        </section>


        <footer class="piede">
             <p class="profilo_footer">Created by: Zappalà Stefano Maria Francesco - 1000016735 </p>
        </footer>
    </body>


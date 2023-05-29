<?php
    $msg_result=null;
    require_once "auth.php";

    if(!empty($_POST["completaordine"]))
    {
        if($username= VerificaConnessioneUtente())
        {
            $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
  
            $query = "SELECT * FROM prodotti";

            $res = mysqli_query($conn, $query);
            $username = mysqli_real_escape_string($conn, $username);   
    
            $cont=mysqli_num_rows($res);
   
            $query = "SELECT nome, cognome, username  FROM utenti WHERE username = '$username'";
            $res2 = mysqli_query($conn, $query);
            $row= mysqli_fetch_assoc($res2);

            $nome= $row["nome"];
            $cognome= $row["cognome"];
            $username= $row["username"];

            for($i=1; $i<=$cont; $i++)
            {
   
                if(isset($_COOKIE[$i]))
                {
                    $value= $_COOKIE[$i];
                    $query = "SELECT nome, prezzo FROM prodotti WHERE id_prodotto = '$value'";
                    $res2 = mysqli_query($conn, $query);
                    $row= mysqli_fetch_assoc($res2);

                    $nome_prodotto= $row["nome"];
                    $prezzo= $row["prezzo"];
                    $data_acquisto= date('Y-m-d');
    
                    $query = "INSERT INTO ordine(nome, cognome, username, nome_prodotto, prezzo, data_ordine) 
                              VALUES('$nome', '$cognome', '$username', '$nome_prodotto', '$prezzo', '$data_acquisto')";

                    mysqli_query($conn, $query);
                } 
            }

            
            header("Location: cancellatutticookie.php");
            mysqli_free_result($res);
            mysqli_close($conn);

        }
        else
            header("Location: login.php");
    }

?>




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
        <title>ZPP_DRONE CARRELLO</title>
        <link rel='stylesheet' href='carrello.css'>
        <script src="carrellofetch.js" defer="true"></script>
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
                    <strong>CARRELLO</strong><br/> <br/>
                    
                    <a href="shop.php" class="button"> SHOP</a>
                </h1>
            </div>
        </header>


        <section>
            <div class="flex_container">
                <div id="carrello">
                    
    
                </div>   

                <div id="ordine">

                </div>
                 
            </div>
        </section>


        <footer class="piede">
             <p class="profilo_footer">Created by: Zappalà Stefano Maria Francesco - 1000016735 </p>
        </footer>
    </body>

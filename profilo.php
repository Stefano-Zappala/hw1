
<?php
    include 'auth.php';

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
    if($username= VerificaConnessioneUtente())
        $username = mysqli_real_escape_string($conn, $username);

    $query = "SELECT * FROM ordine WHERE username = '$username'";
    $res3 = mysqli_query($conn, $query);

    $cont=mysqli_num_rows($res3);
?>


<!DOCTYPE html>
<html>

<?php
    require_once 'auth.php';
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
    if($username= VerificaConnessioneUtente())
        $username = mysqli_real_escape_string($conn, $username);

    $query = "SELECT nome, cognome, email FROM utenti WHERE username = '$username' ";
    $res2 = mysqli_query($conn, $query);
    $row= mysqli_fetch_assoc($res2);
    $nome= $row["nome"];
    $cognome= $row["cognome"];
    $email= $row["email"];
?>

    <head>         
        <title>ZPP_DRONE PROFILO </title>                                                                              
        <link rel='stylesheet' href= 'profilo.css'> 
        <script src = "profilo.js" defer="true"></script>
        <meta name="viewport" content = "width=device-width, initial-scale = 1">  
        <meta charset = "utf-8">  
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;500&amp;display=swap" rel="stylesheet">
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
                    <div id="logo">
                        <img src="image/PROFILO-1.jpg" alt="">
                    </div>
                
                <?php if(VerificaConnessioneUtente())
                {
                  echo "<a class='nome' href='profilo.php'> Ciao $username </a> <br/><br/>";
                  echo "<a class='button' href='logout.php'> LOGOUT </a>";
                }
                ?> 

                </h1>
            </div>
        </header>

   
        <div class="contenitore">
            <div class="blocco">
                <h3> Dati personali</h3>

                <div class="articolo">

                    <?php if(VerificaConnessioneUtente())
                    {
                        echo "<div class='dentro'>  ";
                        echo "<h3 id='grassetto'>NOME :  </h3><h2>$nome </h2>";
                        echo "</div>";

                        echo "<div class='dentro'>  ";
                        echo "<h3 id='grassetto'>COGNOME :  </h3><h2>$cognome </h2>";
                        echo "</div>";

                        echo "<div class='dentro'>  ";
                        echo "<h3 id='grassetto'>EMAIL :  </h3><h2>$email </h2>";
                        echo "</div>";
                    }
                    ?>   
                </div>
            </div>
        </div>
   


        <div class="contenitore">
        <h3> Ordini effettuati</h3>
            <div class="blocco_ordine">
            
                <section>
                    <form method="POST">
                        <div id="flex_container">

                        </div>
                    </form>
                </section>
            </div>
        </div>
    
                
             
        <footer class="piede">
            <p class="profilo_footer">Created by: Zappalà Stefano Maria Francesco - 1000016735 </p>
        </footer>

    </body>
</html>
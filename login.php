<?php
    include 'auth.php';
    $error=null;
    if(VerificaConnessioneUtente())
    {
        header("Location: home.php");
        exit;
    }

    if(!empty($_POST["email"]) && !empty($_POST["password"]))
    {

        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));

        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $password = mysqli_real_escape_string($conn, $_POST['password']);
    
        $query = "SELECT username, password FROM utenti WHERE email ='$email'";
  
        $res= mysqli_query($conn, $query) or die(mysqli_error($conn));
        $prova=$res;
    


        if(mysqli_num_rows($res)>0)
        {
            $row = mysqli_fetch_assoc($res);

            if(password_verify($password, $row["password"]))
            {
                $_SESSION["username"] = $row["username"];
                header("Location: home.php");
                mysqli_free_result($res);
                mysqli_close($conn);
                exit;
        
            }
            else
            {
                $error= "Email e/o password errate";
            }
        }
        else
        {
            $error= "Email e/o password errate";
        }

    }
    else if (isset($_POST["email"]) || isset($_POST["password"])) 
    {
        // Se solo uno dei due è impostato
        $error = "Inserisci email e password.";
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
        <title>ZPP_DRONE_LOGIN</title>
        <link rel='stylesheet' href='registrazione.css'>
        <script src="login.js" defer="true"></script>
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
                <?php if(VerificaConnessioneUtente())
                {
                    echo "<a class='button' href='logout.php'>$username<br>LOGOUT</a>";
                }
                else
                    echo "<a class='button' href='login.php'>LOGIN</a>";
                ?>         
            </nav>        
        </header>


        <section>
            <form name="compilazione_login" method="POST">
                <h1>LOGIN</h1>
                <h3>ENTRA CON LE TUE CREDENZIALI </h3>
    
                <?php            
                    if($error!=null)
                    {
                        echo "<h3 class='message_error'>$error</h3>";
                    }
                ?>
           
                <label class="email">E-mail <input type="test" name="email"></label>
                <span class="email">E-mail non valida</span>

                <label class="password">Password <input type="password" name="password"></label>
                <span class="password">Inserisci la tua password (almeno 8 caratteri)</span>

    
                <h3>HAI GIA' UN ACCOUNT?</h3>
                <label class="login">&nbsp;<input type="submit" value="LOGIN" name="login"></label>
             
                <h3>NON HAI ANCORA UN ACCOUNT?</h3>
                <a class="registrazione" onclick="window.location='signup.php'">REGISTRATI ORA</a>
            
            </form>
        </section>
        

        <footer class="piede">
            <p class="profilo_footer">Created by: Zappalà Stefano Maria Francesco - 1000016735 </p>
        </footer>   
</body>

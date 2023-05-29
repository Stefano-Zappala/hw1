<?php
    require_once 'config.php';
    session_start();

    function VerificaConnessioneUtente()
    {
        if(isset($_SESSION["username"]))
        {
            return $_SESSION["username"];
        }
        else
            return 0;
    }
?>


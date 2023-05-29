
<?php
   require_once 'auth.php';
   $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
   if($username= VerificaConnessioneUtente())
         $username = mysqli_real_escape_string($conn, $username);
?>


<html>   

    <head>         
         <title>ZPP_DRONE HomePage </title>                                                                              
         <link rel='stylesheet' href= 'home.css'> 
         <meta name="viewport" content = "width=device-width, initial-scale = 1">  
         <meta charset = "utf-8">  
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
               <em>ZPP_DRONE</em><br/>
               <strong>ENTRA PURE TU NEL MONDO DEI DRONI</strong><br/><br/>

               <?php if(VerificaConnessioneUtente())
               {
                  echo "<a class='nome' href='profilo.php'> Ciao $username </a> <br/><br/>";
                  echo "<a class='button' href='logout.php'> LOGOUT </a>";
               }
               else
               {
                  echo "<a class='button' href='login.php'>LOGIN</a>";
               }
                  
               ?> 

            </h1>
         </div>
      </header>

  
  
      <div class="contenitore">
         <div class="blocco">
            <h1> Chi Siamo ?</h1>
               <div class="articolo">
   
                  <div class="testo">Benvenuto nel sito web di <em>ZPP_DRONE </em>, il tuo punto di riferimento per l'acquisto di droni di alta qualità e accessori correlati.<br/>
                                  Siamo un negozio online specializzato nella vendita di una vasta gamma di droni per soddisfare le esigenze di tutti, dagli appassionati alle aziende professionali.<br/>
                  </div>

                  <div class="contenitoreimg">
                     <img class="immagineart" src="image/HOME-1.jpg" alt="">
                  </div>

               </div>
         </div>



         <div class="blocco">
            <h1> Cosa Offriamo ?</h1>
               <div class="articolo">
           
                  <div class="testo">Il nostro obiettivo è offrire ai nostri clienti la migliore esperienza di shopping online nel campo dei droni.<br/>
                                     Siamo appassionati di tecnologia e apprezziamo le infinite possibilità offerte da questi dispositivi volanti, che siano utilizzati per scopi ricreativi, 
                                     fotografici, di videografia o persino per applicazioni commerciali.<br/>
                  </div>

                  <div class="contenitoreimg">
                     <img class="immagineart" src="image/HOME-2.webp" alt="">
                  </div>

               </div>
         </div>



         <div class="blocco">
            <h1> I Nostri Prodotti</h1>
               <div class="articolo">
           
                  <div class="testo">Nel nostro store troverai una selezione accurata di droni provenienti dai principali produttori del settore, noti per la loro affidabilità e prestazioni. <br/>
                                     Offriamo una vasta scelta di modelli, inclusa una gamma completa di accessori essenziali per garantire un'esperienza di volo ottimale e sicura. <br/>
                  </div>
            
                  <div class="contenitoreimg">
                     <img class="immagineart" src="image/HOME-3.jpg" alt="">
                  </div>

               </div>
         </div>



         <div class="blocco">
            <h1> La Nostra Assistenza</h1>
               <div class="articolo">
           
                  <div class="testo">Siamo orgogliosi di fornire un servizio clienti eccellente, con un team di esperti pronti ad assisterti in ogni fase del processo di acquisto inoltre
                                    offriamo descrizioni dettagliate dei prodotti, recensioni degli utenti, guide all'uso e consulenze personalizzate per aiutarti a trovare il drone perfetto per le tue esigenze.<br/>
                  </div>
                  <div class="contenitoreimg">
                     <img class="immagineart" src="image/HOME-4.webp" alt="">
                  </div>
               </div>
         </div>


      </div>  


      <footer class="piede">
         <p class="profilo_footer">Created by: Zappalà Stefano Maria Francesco - 1000016735 </p>
      </footer>

   </body>
</html>
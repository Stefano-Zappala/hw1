
<?php
   require_once 'auth.php';
   $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
   if($username= VerificaConnessioneUtente())
      $username = mysqli_real_escape_string($conn, $username);
?>

<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;500&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="guida.css">
      <script src="foto.js" defer="true"></script>
      <title>GUIDA DRONE</title>
   </head>


   <body>
      <header>
         <nav>
            <a href="home.php">Home</a>
            <a href="shop.php">Shop</a>
            <img id="LOGO_DRONE_NAV" src="image/DRONE-GIF.gif" alt="">
            <a href="guida.php">Guida</a>
            <a href="info.php">Info</a>
         </nav>

         <div class="titolo">
            <h1>
               <em>Guida introduttiva</em><br/>
               <strong>TUTTI CIO CHE C'E' DA SAPERE SUI DRONI</strong><br/><br/>

               <?php if(VerificaConnessioneUtente())
               {
                 echo "<a class='nome' href='profilo.php'> Ciao $username </a> <br/><br/>";
               }
               ?> 

            </h1>
         </div>
      </header>



      <div class="contenitore">

         <div class="blocco">
            <div class="numero"> 1.</div>
               <div class="articolo">
                  <h1>Cos'è un drone</h1>

                  <div class="testo">Un drone è un aeromobile senza pilota che può essere controllato da
                              un operatore a distanza o da un computer. <br/>
                              Ci sono diversi tipi di droni,
                              con varie funzionalità e dimensioni, e possono essere utilizzati in 
                              diversi settori come l'agricoltura, la sicurezza, ambito Militare ,la fotografia e il
                              trasporto.
                  </div>

                  <div class="testo">I droni sono dotati di motori elettrici o a combustione, che forniscono
                              la spinta necessaria per volare. Sono in grado di volare in diverse direzioni 
                              grazie alle eliche o alle ali che permettono di spostarsi in avanti, all'indietro,
                              verso l'alto e verso il basso.<br/> Inoltre, i droni possono essere dotati
                              di telecamere, sensori e altri dispositivi per fornire informazioni sulle condizioni 
                              dell'ambiente circostante.<br/> Grazie alle loro capacità di volo stabile, i droni sono in 
                              grado di catturare immagini e video ad alta risoluzione, fornendo informazioni 
                              dettagliate su aree specifiche.
                  </div>

                  <img class="immagineart" src="image/coseeee.jpg" alt="">
               </div>
            </div>
   
      

         <div class="blocco">
            <div class="numero"> 2.</div>
               <div class="articolo">
                  <h1>Tipologie di droni</h1>

                  <div class="testo">   Esistono diverse tipologie di droni, ognuna delle quali presenta caratteristiche 
                           e prestazioni specifiche in base alle esigenze dell'utilizzatore.<br/> Qui di seguito elenchiamo le principali:
                  </div>

                  <div class="testo">Droni aerei:Sono i droni più comuni e conosciuti, sono equipaggiati di eliche e possono essere a loro volta 
                           suddivisi in due categorie principali: i droni a elica singola (o multirotori) e quelli ad ala fissa. <br/>
                           I droni a elica singola sono i più utilizzati, sono dotati di 4, 6, 8 o più eliche e sono in grado di volare in qualsiasi direzione. <br/>
                           I droni ad ala fissa, invece, sono più simili ad un aereo e possono volare a distanze più lunghe rispetto ai droni a elica singola, 
                           ma non sono in grado di volare in modo stazionario e richiedono spazi di decollo e atterraggio più ampi.<br/> <br/>

                           Droni ad elicottero: Sono simili ai droni aerei a elica singola, ma sono dotati di una struttura più complessa 
                           e di un motore in grado di ruotare l'intero drone.<br/> Ciò li rende molto più stabili in volo, ma ne limita la velocità massima.<br/><br/>
         
                           Droni subacquei: Sono droni che operano sott'acqua, utilizzati soprattutto in attività di ricerca scientifica o in attività 
                           commerciali come l'ispezione di piattaforme petrolifere.<br/> Possono essere utilizzati per la ricerca e il monitoraggio del fondo marino, per
                           l'ispezione di infrastrutture subacquee o per la fotografia e il video subacqueo.<br/><br/>
         
                           Droni terrestri: Sono veicoli terrestri a controllo remoto, dotati di ruote o di cingoli. Sono spesso utilizzati 
                           in campo militare per la sorveglianza e il trasporto di materiale, ma possono essere impiegati anche in altri settori come l'agricoltura o la logistica.<br/><br/>
                  </div>

                  <img class="immagineart" src="image/tipi-di-drone.jpg" alt="">
               </div>
            </div>


         <div class="blocco">
            <div class="numero"> 3.</div>
               <div class="articolo">
                  <h1>Normative legate ai drone</h1>

                  <div class="testo">La crescente diffusione dei droni ha portato alla necessità di stabilire 
                              norme e regole per garantirne un utilizzo sicuro e rispettoso della privacy altrui. <br/>
                               In molti paesi, compreso l'Italia, esistono regolamenti specifici che disciplinano l'uso dei droni , nel caso del nostro paese vengono gestite da EASA.
                  </div>

                  <div class="testo">In particolare, la regolamentazione riguarda principalmente la sicurezza e la privacy. <br/>
                              Per quanto riguarda la sicurezza, le regole prevedono ad esempio l'obbligo di mantenere 
                              il drone sempre in vista, di non superare un'altitudine massima di 120 metri e di non avvicinarsi 
                              ad aree sensibili come aeroporti o aree densamente popolate.<br/> Inoltre, è richiesta l'iscrizione al 
                              registro nazionale dei droni, il quale prevede l'identificazione e la registrazione dei dati del proprietario e del drone stesso.<br/>
                              Per quanto riguarda la privacy, le regole prevedono ad esempio il divieto di sorvolare aree private senza 
                              il consenso del proprietario, nonché l'obbligo di rispettare la riservatezza delle persone presenti in zona. <br/>
                              Inoltre, è vietato l'utilizzo di droni per attività di sorveglianza o di raccolta di dati personali senza il consenso delle persone coinvolte.<br/>
                              In molti Paesi, l'assicurazione per i droni non è obbligatoria, ma è altamente raccomandata. Alcune compagnie di assicurazione offrono polizze 
                              specifiche per i droni, mentre altre includono la copertura per i droni all'interno delle loro polizze di responsabilità civile.
                  </div>

                  <img class="immagineart" src="image/droni-immagine-normativa.png" alt="">
               </div>
            </div>



         <div class="blocco">
            <div class="numero"> 4.</div>
               <div class="articolo">
                  <h1>Patentino dei Droni</h1>

                  <div class="testo">Il "patentino dei droni" è un documento ufficiale rilasciato dalle autorità di regolamentazione dell'aviazione civile di ogni Paese, che attesta che il 
                           titolare del documento ha superato un corso di formazione obbligatorio per pilotare droni di una determinata classe di peso e utilizzo. <br/>
                  </div>

                  <div class="testo">In Italia, il patentino dei droni è ufficialmente chiamato "attestato di pilota di velivoli civili a pilotaggio remoto", ed è stato introdotto nel 2015. 
                           Per ottenere l'attestato, è necessario seguire un corso di formazione teorica e pratica, che copre argomenti come la sicurezza aerea, le regole di volo, 
                           la meteorologia, le procedure operative, la manutenzione del drone, e così via.<br/>
                           Il corso di formazione deve essere seguito presso un'organizzazione riconosciuta dalla Direzione Generale dell'Aviazione Civile (ENAC) e deve essere superato un esame finale.<br/> 
                           Una volta superato l'esame, il candidato ottiene l'attestato, che ha validità di 5 anni.<br/>
                           L'obbligo di possedere l'attestato di pilota di velivoli civili a pilotaggio remoto è in vigore in Italia per tutti i droni con un peso superiore a 250 grammi, 
                           utilizzati per scopi professionali o commerciali. Per i droni utilizzati a scopo ricreativo o per attività sportive, il patentino non è obbligatorio, 
                           ma è comunque consigliato per garantire una maggiore sicurezza del volo.<br/>
                  </div>

                  <img class="immagineart" src="image/a1-a3_certificate.webp" alt="">
               </div>
            </div>

   


            <div class="blocco">
               <div class="articolo">
                  <h1 id="testofoto">Foto di Droni</h1>

                  <form id ='search_content'>
                     <input type = "search" class="casella" id = "barra" placeholder = "Cerca immagini sui Droni"></input>
                     <p id="tasto">x</p>
                  </form>

                  <article id="modale" class="hidden"></article>
         
               </div>
            </div>

         
         </div>


      <footer class="piede">
         <p class="profilo_footer">Created by: Zappalà Stefano Maria Francesco - 1000016735 </p>
      </footer>
      
   </body>
</html>
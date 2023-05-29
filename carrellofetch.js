
function onJSON(json)
{
    let prezzototale=0;

    const h4_12 = document.createElement("h4");
    h4_12.textContent= "ORDINE COMPLETATO ";

    for(let drone of json)
    {
  
        const div= document.createElement("div");
        div.classList.add("contenuto");
        const h1= document.createElement("h1");
        const immagine= document.createElement("img");
        const flex= document.createElement("div");
        flex.classList.add("flex");
        const divinformazioni= document.createElement("div");
        const h2= document.createElement("h2");
        const h3= document.createElement("h3");
        const a = document.createElement("a");

        h1.textContent=drone.nome;
        immagine.src=drone.immagine;
        h2.textContent=drone.descrizione;
        h3.textContent="€" + drone.prezzo;

        a.textContent= "Rimuovi dal carrello"; 
        a.dataset.id_drone = drone.id_prodotto;  
        a.addEventListener("click", eliminaEvento);
        
  
        prezzototale +=+ drone.prezzo; 

        carrello= document.getElementById("carrello");

        carrello.appendChild(div);
        div.appendChild(h1);
        div.appendChild(flex);
        flex.appendChild(immagine);

        flex.appendChild(divinformazioni);
        divinformazioni.appendChild(h2);
        divinformazioni.appendChild(h3);
        divinformazioni.appendChild(a);
  
    }


    const div2= document.createElement("div");
    div2.classList.add("prezzo");
    carrello.appendChild(div2);
    

    const ordine= document.getElementById("ordine");
    const h4_1 = document.createElement("h4");
    h4_1.textContent= "TOTALE PROVVISORIO :   € " + prezzototale;


    const form= document.createElement("form");
    form.method="POST";
    const label= document.createElement("label");
    label.placeholder="&nbsp;";

    label.classList.add("button");

    const input= document.createElement("input");
    input.type="submit";
    input.name="completaordine";
    input.value="ORDINA ORA";
    

    if(prezzototale!=0)
    {
        ordine.appendChild(h4_1);
        ordine.appendChild(form);
        form.appendChild(label);
        label.appendChild(input);
    }
    else
    {

        ordine.appendChild(h4_12);
    }
}



function eliminaEvento(event)
{
    const id_drone = event.currentTarget.dataset.id_drone;
    // Elimina l'evento
    fetch("cancellacookie.php?id_drone=" + id_drone).then(EliminaRimasuglio).then(aggiungiDrone);

    // Previeni il click sul link
    event.preventDefault();
}

function onResponse(response) 
{
    console.log('Risposta ricevuta');
    return response.json();
}
  

function EliminaRimasuglio()
{
    let carrello= document.getElementById("carrello");
    let ordine= document.getElementById("ordine");
    
    carrello.innerHTML="";
    ordine.innerHTML="";
}


function aggiungiDrone()
{
    fetch("carrellofetch.php").then(onResponse).then(onJSON); 
}

aggiungiDrone();
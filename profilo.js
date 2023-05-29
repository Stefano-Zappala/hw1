function onJSON(json)
{
    $i=0;
  
    for(let drone of json){

    $i++;
    const div= document.createElement("div");

    const h1= document.createElement("h1");

    const h2= document.createElement("h2");

    const h2_1= document.createElement("h2");

    const label= document.createElement("label");
    label.classList.add("button1");

    const input= document.createElement("input");

    h1.textContent=drone.nome_prodotto;

    h2.textContent="Prezzo : € " + drone.prezzo;

    h2_1.textContent="Ordine effettuato :" + drone.data_ordine;

    input.name=$i;

    let container= document.getElementById("flex_container");
    container.appendChild(div);
    div.appendChild(h1);
    div.appendChild(h2);
    div.appendChild(h2_1);

    label.appendChild(input);
    }
}



function onResponse(response) 
{
    console.log('Risposta ricevuta');
    return response.json();
}
  

function aggiungiDrone()
{
    fetch("fetch_profilo.php").then(onResponse).then(onJSON);
}

aggiungiDrone();



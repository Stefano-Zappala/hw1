
function onJSON(json)
{
    $i=0;
  
    for(let drone of json){

    $i++;
    const div= document.createElement("div");

    const h1= document.createElement("h1");

    const image= document.createElement("img");
    image.src= drone.immagine;

    const h2= document.createElement("h2");
    const h3= document.createElement("h3");

    const label= document.createElement("label");
    label.classList.add("button1");

    const input= document.createElement("input");



    h1.textContent=drone.nome;
    h2.textContent=drone.descrizione;
    h3.textContent="€ " + drone.prezzo;
    input.type="submit";
    input.name=$i;
    input.value="AGGIUNGI AL CARRELLO";

    let container= document.getElementById("flex_container");
    container.appendChild(div);
    div.appendChild(h1);
    div.appendChild(image);
    div.appendChild(h2);
    div.appendChild(h3);
    div.appendChild(label);
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
    fetch("fetch.php").then(onResponse).then(onJSON);
}

aggiungiDrone();



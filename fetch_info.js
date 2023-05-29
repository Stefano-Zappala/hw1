
function onJSON(json)
{
    $i=0;
  
    for(let drone of json){

    $i++;
    const div= document.createElement("div");
    const image= document.createElement("img");
    image.src= drone.immagine;


    let container= document.getElementById("flex_container");
    container.appendChild(div);
    div.appendChild(image);
    }
}



function onResponse(response) 
{
    console.log('Risposta ricevuta');
    return response.json();
}
  

function aggiungiPort()
{
    fetch("fetch_info.php").then(onResponse).then(onJSON);
}

aggiungiPort();



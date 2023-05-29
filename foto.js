const shutter_key = 'B17iayvUMOZ51rtFb9G36y6te7JLcXr3';
const shutter_secret = "BQwuxVGymagN0B3n";
const shutter_tocken = "v2/VWlFUHhBcjNPQWw3WVdLamI2ck1lMTlVVE1hSG5SeW8vMzI4OTMyMzQwL2N1c3RvbWVyLzQvZ3pDdTNMQnNGanRVUnlCRjdNWmlGMGkxMDFKVm00QmRTa0ctd2pfaVFJWVRrS25PR1FYcW9WaGUyUml4empHY2hrNWhwWjNpenBzR3VYUGI5R2wtelpaZ1ZvcTdoNlVScVZlV2VMdFdDMjlNUk15cXJvR0Y2SkIyVUZ2ZHQ5U0dEeDI4V09vdmY5WnRBRmk2U1hHdnNxY0dGdFlpRl9aVFNTOGdUd0NmTW5HTHBNQXowejBWTUlrcHF0X19yMXRQX1p1OWJqSGxUT19hZzU3NFhyOGgwZy9zXzhlV3VJZU5kc2czUFNGYnpMdF9n";
const shutter_endpoint = "https://api.shutterstock.com/v2/images/search?query=";


function onResponse(response) 
{
    console.log('Risposta ricevuta');
    return response.json();
}


function onJsonShutter(json)
{
    console.log('JSON ricevuto');
  
    console.log(json);

    const number = json.per_page;
    const modale = document.querySelector('#modale');
    const album = document.createElement('div');
    album.classList.add('album');

    for (let index = 0; index < number; index++) 
    {
        const immagine = json.data[index].assets.large_thumb.url;
        const grid = document.createElement('div');
        const img = document.createElement('img');

        img.src = immagine;
        album.appendChild(grid);
        grid.appendChild(img);
    }
    modale.appendChild(album);
}


function chiudiModale(event) {
	console.log("escape");
    const modale = document.querySelector('#modale');
	//aggiungo la classe hidden 
	modale.classList.add('hidden');
    modale.innerHTML = ' '; //pulisco
}


function onSearch(event)
{
    event.preventDefault();
    const modale = document.querySelector('#modale');
    const tasto = document.querySelector('#tasto');
    const content = document.querySelector('#barra').value;
    console.log(content);
    const shutter_url = shutter_endpoint + content + '&per_page=' + 12 ;
    fetch(shutter_url,{
        headers:
        {
            'Authorization': 'Bearer ' + shutter_tocken
        }
    }).then(onResponse).then(onJsonShutter);

    //rendo la modale visibile
	modale.classList.remove('hidden');
    document.querySelector('#barra').value = '';
    tasto.addEventListener('click', chiudiModale);
}

const form = document.querySelector('#search_content');
form.addEventListener('submit', onSearch);



function checkEmail(event)
{
    target= event.currentTarget;
    const titlealert= document.querySelector("label.email");
    const textalert= document.querySelector("span.email");

    if(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(target.value)) 
    {
        rror=false;
        titlealert.classList.remove("error");
        textalert.classList.remove("mostraerrori");
    } 
    else 
    {
        titlealert.classList.add("error");
        textalert.classList.add("mostraerrori");
        error=true;       
    }
}

function checkPassword(event) 
{
    target=event.currentTarget;
    const titlealert= document.querySelector("label.password");
    const textalert= document.querySelector("span.password");

    if (target.value.length >= 8) 
    {
        error=false;
        titlealert.classList.remove("error");
        textalert.classList.remove("mostraerrori");
    } 
    else 
    {
        titlealert.classList.add("error");
        textalert.classList.add("mostraerrori");
        error=true;
    }
}


function validazione(event)
{
    if(error==true)
    {
        alert("Compila tutti i campi correttamente!");
        event.preventDefault();
    }
}

let error = false;
document.querySelector('.email input').addEventListener('blur', checkEmail);
document.querySelector('.password input').addEventListener('blur', checkPassword);
const form= document.forms["compilazione_login"];
form.addEventListener("submit", validazione);
function checkName(event)
{
    target=event.currentTarget;
    const titlealert= document.querySelector("label.nome");
    const textalert= document.querySelector("span.nome");
  
  
    if( target.value.length >0)
    {
        error=false;
        titlealert.classList.remove("error");
        textalert.classList.remove("mostraerrori");
     
    } 
    else 
    {
        console.log(target);
        titlealert.classList.add("error");

        textalert.classList.add("mostraerrori");
        error=true;
    }
}

function checkCognome(event)
{
    target= event.currentTarget;
    const titlealert= document.querySelector("label.cognome");
    const textalert=document.querySelector("span.cognome");


    if( target.value.length >0){
        error=false;
       titlealert.classList.remove("error");
       textalert.classList.remove("mostraerrori");
     
    } else {
        titlealert.classList.add("error");
        textalert.classList.add("mostraerrori");
        error=true;
    }
}

function checkUsername(event)
{
    target=event.currentTarget;
    const titlealert= document.querySelector("label.username");
    const textalert= document.querySelector("span.username");


    if(target.value.length >0 && /^[a-zA-Z0-9_]{1,15}$/.test(target.value))
    {
        error=false;
        titlealert.classList.remove("error");
        textalert.classList.remove("mostraerrori");

    } 
    else if(target.value.length <0 || !/^[a-zA-Z0-9_]{1,15}$/.test(target.value) )
    {
        titlealert.classList.add("error");
        textalert.classList.add("mostraerrori");

        error=true;    
    }
}

function checkEmail(event)
{
    target= event.currentTarget;
    const titlealert= document.querySelector("label.email");
    const textalert= document.querySelector("span.email");

    if(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(target.value)) 
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
document.querySelector(".nome input").addEventListener("blur", checkName);
document.querySelector(".cognome input").addEventListener("blur", checkCognome);
document.querySelector(".username input").addEventListener("blur", checkUsername);
document.querySelector('.email input').addEventListener('blur', checkEmail);
document.querySelector('.password input').addEventListener('blur', checkPassword);

const form= document.forms["compilazione"];
form.addEventListener("submit", validazione);
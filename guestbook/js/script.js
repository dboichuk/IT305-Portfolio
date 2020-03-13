document.getElementById("form").onsubmit=validate;
document.getElementById("div").style.visibility='hidden';

function validate() {
    //Create a flag variable
    let valid = true;

    //Clear all errors
    let errors = document.getElementsByClassName("err");
    for (let i=0; i<errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    //Check first name
    let first = document.getElementById("firstName").value;
    if (first == "") {
        let errFirst = document.getElementById("errFname");
        errFirst.style.visibility = "visible";
        valid = false;
    }

    //Check last name
    let last = document.getElementById("lastName").value;
    if (last == "") {
        let errLast = document.getElementById("errLname");
        errLast.style.visibility = "visible";
        valid = false;
    }

    /*
    //check email
    let email = document.getElementById("email").value;
    if(email == "") {
        let errEmail = document.getElementById("errEmail");
        errEmail.style.visibility = "visible";
        valid = false;
    }

    //used w3schools to learn includes
    if(email.includes("@") != true) {
        let errEmail = document.getElementById("errEmail");
        errEmail.style.visibility = "visible";
        valid = false;
    }

    if(email.includes(".") != true) {
        let errEmail = document.getElementById("errEmail");
        errEmail.style.visibility = "visible";
        valid = false;
    }
    */


    if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form.email.value))){
        let errEmail = document.getElementById("errEmail");
        errEmail.style.visibility = "visible";
        valid = false;
    }


    let url = document.getElementById("url").value;

    if(!url.startsWith("http") || !url.endsWith(".com")){
        let errUrl = document.getElementById("errLink");
        errUrl.style.visibility = "visible";
        valid = false;
    }

    let met = document.getElementById("howWeMet").value;
    if(met==="none"){
        let errMet = document.getElementById("errMet");
        errMet.style.visibility = "visible";
        valid = false;
    }


    return valid;
}

document.getElementById('exampleCheck1').onclick = function() {
    let div = document.getElementById("div");

    if ( this.checked ) {
        div.style.visibility="visible";
    }
    else {
        div.style.visibility="hidden";
    }
};

function select(value) {
    let div2 = document.getElementById("other");



    if(value==='other'){
        div2.style.visibility="visible";
    }
    else {
        div2.style.visibility="hidden";
    }


}
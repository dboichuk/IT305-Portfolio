/*
document.getElementById("pizzaform").onsubmit=validate;

function validate() {
    // create a flag variable
    let valid = true;

    //Clear all errors
    let errors = document.getElementsByClassName("err");
    for(let i = 0; i<errors.length; i++){
        errors[i].style.visibility="hidden";
    }

    let first = document.getElementById("firstName").value;
    let last = document.getElementById("lastName").value;


    if (first==""){
        let errFirst = document.getElementById("errFname");
        errFirst.style.visibility="visible";
        valid=false;
    }

    if (last==""){
        let errFirst = document.getElementById("errLname");
        errFirst.style.visibility="visible";
        valid=false;
    }

    //check for pickup or delivery
    let delivery = document.getElementById("delivery").checked;
    if(delivery){
        let address=document.getElementById("address").value;
        if(address==""){
            let errFirst = document.getElementById("errAddress");
            errFirst.style.visibility="visible";
            valid=false;

        }
    }

    //Check pizza size
    let size = document.getElementById("size").value;
    if(size=="none"){
        let errFirst = document.getElementById("errSize");
        errFirst.style.visibility="visible";
        valid=false;
    }

    //check toppings
    let toppings = document.getElementsByName("toppings");
    let toppingCount=0;
    for(let i=0;i<toppings.length;i++){
        if(toppings[i].checked)
            toppingCount++;
    }
    
    if(toppingCount==0){
        let errToppings = document.getElementById("errToppings");
        errToppings.style.visibility="visible";
        valid=false;
    }

    return valid;

}

 */

document.getElementById("pizzaform").onsubmit = validate;

function validate()
{
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

    //Check pickup or delivery
    let delivery = document.getElementById("delivery").checked;
    if (delivery) {

        //Check address
        let address = document.getElementById("address").value;
        if (address == "") {
            let errAddress = document.getElementById("errAddress");
            errAddress.style.visibility = "visible";
            valid = false;
        }
    }

    //Check pizza size
    let size = document.getElementById("size").value;
    if (size == "none") {
        let errSize = document.getElementById("errSize");
        errSize.style.visibility = "visible";
        valid = false;
    }

    //Check toppings
    let toppings = document.getElementsByName("toppings[]");
    let toppingCount = 0;
    for (let i=0; i<toppings.length; i++) {
        if (toppings[i].checked) {
            toppingCount++;
        }
    }
    alert(toppingCount);
    if(toppingCount == 0) {
        let errToppings = document.getElementById("errToppings");
        errToppings.style.visibility = "visible";
        valid = false;
    }

    return valid;
}
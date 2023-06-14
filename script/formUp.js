
//  Write password and Write confirm password and Write Email => form Two

let logn = document.querySelector(".lll");
let error = document.querySelector(".papa-paragr")
let error2 = document.querySelector(".papa-paragr2")
let password = document.querySelector(".passwordone");

{password.addEventListener("keyup", (eo) => {

    const value = eo.currentTarget.value;

    if (value === "") {
        logn.disabled = true;
        password.style.border = "0" ;
        error.style.display ="none" ;

    } else if (password.value.length >= 8) {
        // logn.disabled = false;
        password.style.border = "2px solid green" ;
        error.style.display ="none"
    }
    else {
        logn.disabled = true;
        password.style.border = "2px solid red" ;
        error.style.display ="block"
    }


})}

{let password2 = document.querySelector(".passwordTwo");
password2.addEventListener("keyup", (eo) => {

    const value = eo.currentTarget.value;

    if (value === "") {
        logn.disabled = true;
        password2.style.border = "0" ;
        error2.style.display ="none"
    }
    else if(password2.value != password.value){
        password2.style.border = "2px solid red" ;
        logn.disabled = true ;
        error2.style.display ="block";
    } 
    else if (password2.value.length < 8) {
        password2.style.border = "2px solid red" ;
        error2.style.display ="block"
        logn.disabled = true ;
    }
    else{
        password2.style.border = "2px solid green" ;
        logn.disabled = false;
        error2.style.display ="none"
    }
});}

{let email = document.querySelector(".nmm")

email.addEventListener("keyup", (eo) => {
  
    const value = eo.currentTarget.value
   
    if(value === ""){
        email.style.border = "0" ;
    }
    else if(!email.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
        email.style.border = "2px solid red" ;
        logn.disabled = true;
        return false;
    }else{
        email.style.border = "2px solid green" ;
        // logn.disabled = false;
        return true;
    }
})
}

// Click Hide => Passwored Show And Click Show => Passwored Hide

let pas = document.querySelectorAll(".pas");

pas.forEach( eo => {
    eo.addEventListener("click" , ()=>{
        let paspearnt = eo.parentElement.querySelectorAll(".password");

        paspearnt.forEach(password =>{
            if(password.type == "password" ){
                password.type = "text" ;
                eo.classList.replace("fa-eye-slash" , "fa-eye");
                return ;
            }
            password.type = "password" ;
            eo.classList.replace("fa-eye" , "fa-eye-slash");
        })
    })
})





// Click Hide => Passwored Show And Click Show => Passwored Hide

let pas = document.querySelector(".pas1");
let passworde = document.querySelector(".password");

    pas.addEventListener("click" , ()=>{
            if(passworde.getAttribute("type") == "password" ){
                passworde.setAttribute( "type" , "text" ) ;
                pas.classList.replace("fa-eye-slash" , "fa-eye");
            }else{
                passworde.setAttribute( "type" , "password" ) ;
                pas.classList.replace("fa-eye" , "fa-eye-slash");
            }
    });


    // Write password and Write Email => form Two

    // let form1email = document.getElementById("email")
    // let passwordlogn = document.querySelector(".passwordlogn");
    // let btnlogn = document.querySelector(".btn-logn");
    
    // form1email.addEventListener("keyup", (eo) => {
      
    //     const value = eo.currentTarget.value
       
    //     if(value === ""){
    //         btnlogn.disabled = true;
    //     }else{
    //         btnlogn.disabled = false;
    //     }
    // })
    
    // passwordlogn.addEventListener("keyup", (eo) => {
      
    //     const value = eo.currentTarget.value
       
    //     if(value === ""){
    //         btnlogn.disabled = true;
    //     }else{
    //         btnlogn.disabled = false;
    //     }
    // })


    


// start this is remove and add the placehlder
function placeHo(e){
    e.onblur=function(){
        'use strict';
        if(e.value !== "" ){
        e.style.cssText="color: black ; border-color:green ;border-Width:3PX;"
       }
       }
}

document.querySelectorAll("input").forEach( el =>{placeHo(el)})
placeHo(document.querySelector("textarea"))

// End this is css style in the input

let css_Style="color: black; border-color:green; border-Width:3PX; "
document.querySelectorAll("select").forEach((e)=>{
  e.onclick=function(){ if(e.value !==""){e.style.cssText= css_Style}}
 
 });

// start this is the upload img in the form
document.querySelectorAll(".form-img .img1 .imgs input[type ='file']").forEach((e)=>{
 e.onchange=function(){
     let URLL=URL.createObjectURL(this.files[0])

e.parentElement.parentElement.firstElementChild.firstElementChild.src =URLL  

e.parentElement.parentElement.firstElementChild.lastElementChild.remove()
  }
})

// End this is the upload img in the form

//this is tist in the form 
let form1 = document.querySelector("button")

form1.onclick=function(e){
let tist = document.querySelectorAll("select")
let input_Text = document.querySelectorAll("input[type='text']")
let input = document.querySelectorAll("input[type='number']")
let file = document.querySelectorAll(".form-img .img1 .imgs input[type ='file']")
let input_data = document.querySelector("input[type='date']").value

let tist_1 = false
let tist_2 = false
let tist_3 =false
// start this is tist in select
if(tist[0].value !== "" && tist[1].value !=="" 
&& tist[2].value !=="" && tist[3].value !=="" 
&& tist[4].value !=="" && tist[5].value !=="" 
&& tist[6].value !=="" && tist[7].value !=="" ){
 tist_1 =  true
}
//End this is tist in select
//start this is tist in input_Text
if(input_Text[0].value !=="" && input_Text[1].value!=="" 
&& input[0].value !==""&& input[1].value !=="" 
&& input[2].value !==""){
 tist_2 =  true
}
//End this is tist in input_Text
//start this is tist in the All img fils in
if(file[0].files.length > 0 && file[1].files.length > 0  && file[2].files.length > 0 
 && file[6].files.length > 0   && file[3].files.length > 0 
 && file[7].files.length > 0  && file[4].files.length > 0 
 && file[8].files.length > 0  && file[5].files.length > 0 
 && input_data !==""){

     tist_3 =  true

 }

//  document.querySelector("form div").forEach((e)=>{ console.log(e)})
 if(tist_1 == true && tist_2 == true && tist_3 == true ){

}else{
  document.querySelectorAll("form div").forEach((e)=>{e.style.display="none"})
    let form_orror = document.createElement("div")
    form_orror.className="form-orror"

//  ///
   let form_orror_box = document.createElement("div")
  form_orror_box.className="form-yes-box"
  form_orror.appendChild(form_orror_box)
//  /////
    let h2Erero=document.createElement("h1")
    h2Erero.appendChild(document.createTextNode("ادخلا البيانات السيارة كامله"))
  form_orror_box.appendChild(h2Erero)
//  ////
 
  let button = document.createElement("button")
  button.className="btn-Ok"
  form_orror_box.appendChild(button)
  button.appendChild(document.createTextNode("OK"))

  let form =document.querySelector("form")
  form.append(form_orror)
 e.preventDefault()
 }
 
 
 $(".btn-Ok").click(function(e){

  e.preventDefault()

     document.querySelectorAll("form div").forEach((e)=>{e.style.display="flex"})
     $(".form-orror").remove();
 })
}

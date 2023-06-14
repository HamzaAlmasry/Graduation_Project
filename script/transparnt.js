


// click on Nav Toggle 

{let toggle = document.querySelector(".nav-toggle");

let nav = document.querySelector(".Header .nav ul");


toggle.addEventListener("click", () =>{

    nav.classList.toggle("show")

});}




{let linkShow = document.querySelectorAll(".link");

let nav = document.querySelector(".Header .nav ul");

linkShow.forEach(item => {
    item.addEventListener("click", () =>{

        nav.classList.toggle("show")
    }); 
});}

// click on search 

{let search = document.getElementById("search-icon");
let appInput = document.querySelector(".search-input");


search.addEventListener("click", () => {
    
    appInput.classList.toggle("top") ;


})}


//  click on Night mode 

{
let moon = document.querySelector(".moon i");
let background = document.querySelectorAll(".back");
let background1 = document.querySelectorAll(".back-content");
let color = document.querySelectorAll(".back-color");
let colorBorder = document.querySelector(".nav-toggle i");
let HeaderShadow = document.querySelector(".Header");
let headerh1Animation = document.querySelector(".Header");



moon.addEventListener("click" , (eo) => {
    background.forEach(element => {
        element.classList.toggle("background");
    });
    background1.forEach(element => {
        element.classList.toggle("shadow-BoxAbout");
    });
    color.forEach(element => {
        element.classList.toggle("Color");
    });

    colorBorder.classList.toggle("back-border")
    HeaderShadow .classList.toggle("Header-Shadow")

})}






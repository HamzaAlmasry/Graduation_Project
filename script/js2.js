


// seclet Brands

{
    const selected = document.querySelectorAll(".selected");
const optionsContainer = document.querySelectorAll(".options-container");
const optionsList = document.querySelectorAll(".option");
const optionsList1 = document.querySelectorAll(".option-1");


const searchBox = document.querySelectorAll(".search-box input");

selected.forEach(element => {
    element.addEventListener("click" , (eo) =>{
        searchBox.forEach(element => {
            element.value = "";
        });
        filterList("");
        optionsContainer.forEach(element => {
            if(element.classList.contains("active")){
                searchBox[0].focus();
            };
        });

        if(eo.target.className == "selected"){
            optionsContainer[0].classList.toggle("active");
        }
    });
});

optionsList.forEach( o => {
    o.addEventListener("click" , () =>{
        selected.forEach(element => {
            element.innerHTML = o.querySelector("label").innerHTML;
        });
        optionsContainer.forEach(element => {
            element.classList.remove("active");
        });
        
    });
});


searchBox.forEach(element => {
    element.addEventListener("keyup" , function(e){
        filterList(e.target.value);
    }); 
});

const filterList = searchTerm =>{
    searchTerm = searchTerm.toLowerCase();
    optionsList.forEach( option =>{
        let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
        if(label.indexOf(searchTerm) != -1){
            option.style.display = "block" ;
        }else{
            option.style.display = "none" ;
        }
    });
}

}






























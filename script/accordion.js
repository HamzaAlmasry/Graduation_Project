
//  Section About >> Click + Show 
//                >> Click - Hide

let add = document.querySelectorAll(".add");

add.forEach((item) => {
  item.addEventListener("click", (eo) => {
    const vvv = eo.target.parentElement.nextElementSibling;

    vvv.classList.toggle("ctive");

    eo.target.classList.toggle("bluse");

    if (eo.target.classList == "add bluse") {
        eo.target.innerText = "-";
        vvv.style.height = `${vvv.scrollHeight}px `;
    } else {
        eo.target.innerText = "+";
        vvv.removeAttribute("style");
    }

    });
});
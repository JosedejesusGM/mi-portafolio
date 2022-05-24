
const menu = document.getElementById("menu");
const listaMenu = document.getElementById("lista-menu");

menu.addEventListener("click",vista);

function vista(){
    listaMenu.classList.toggle("nav-activo");
    console.log("nav-activo");
}

const menu = document.getElementById("menu");
const listaMenu = document.getElementById("lista-menu");

menu.addEventListener("click",vista);

function vista(){
    listaMenu.classList.toggle("nav-activo");
    menu.classList.toggle("ani-menu");
    /*console.log("nav-activo");*/
}
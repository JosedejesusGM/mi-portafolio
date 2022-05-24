/* ------------------------------------------------------------
------------- Asignar vida y puntos al enemigo-----------------
---------------------------------------------------------------*/
let vida, auxVida = 50, vidaActual;
let nivel = 0, puntosEnemigo;
let vidaEnemigo = document.getElementById("vida");
let MostrarNivel = document.getElementById("nivel");

window.onload = asignarVida;


function asignarVida(){
    if(nivel <= 3){
        vida = 10;
        puntosEnemigo = 20;
        vidaActual = vida;
        PorcenVida = 100.00;
        nivel++;
        vidaEnemigo.innerHTML = vida;
        MostrarNivel.innerHTML = "Nivel: " + "<b>" + nivel + "</b>";
        /*console.log("Asignando vida :" + vida);*/
        posicion();
    }else{
        vida = auxVida + 30;
        auxVida = vida;
        vidaActual = vida;
        PorcenVida = 100.00;
        puntosEnemigo = 30;
        nivel++;
        vidaEnemigo.innerHTML = vida;
        MostrarNivel.innerHTML = "Nivel: " + "<b>" + nivel + "</b>";
        /*console.log("Asignando vida :" + vida);*/
        posicion();
    }
}






/* ------------------------------------------------------------
------------------------- Quitar vida -------------------------
---------------------------------------------------------------*/

let enemigo = document.getElementById("enemigo");
let puntos = document.getElementById("puntos");

enemigo.addEventListener("click",quitarVida);

var puntosJugador = 0;

let dano = 1;

function quitarVida(){
    if(vida > 0){
        if(dano > vida){
            vida -= vida;
            vidaEnemigo.innerHTML = vida;
            DrenarVida();
            /*console.log("daño mayor vida");*/
        }else{
            vida -= dano;
            vidaEnemigo.innerHTML = vida;
            DrenarVida();
            /*console.log("daño menor vida");*/
        }
    }

    if (vida == 0){
        puntosJugador += puntosEnemigo;
        puntos.innerHTML = "Puntos: " + "<b>" + puntosJugador + "</b>";
        DrenarVida();
        /*console.log("sin vida - Asignar puntos : " + puntosEnemigo);*/
        asignarVida();
    }
}



/* ------------------------------------------------------------
------------------------------ Mejora -------------------------
---------------------------------------------------------------*/


let precio = 30;

let compra = document.getElementById("compra");
let danoJugardor = document.getElementById("dano");

compra.addEventListener("click",buy);

function buy (){
    if(puntosJugador >= precio){
        puntosJugador -= precio;
        dano += 1;
        DanoMarcadorVida();
        precio += 10;
        compra.innerHTML = precio + " Puntos";
        puntos.innerHTML = "Puntos: " + "<b>" + puntosJugador + "</b>";
        danoJugardor.innerHTML = "Ataque " + "<b>" + dano + "</b>";
        /*console.log("Compraste");*/
    }else{
        /*console.log("Pobre");*/
        alert("Puntos insuficientes");
    }
}



/* ------------------------------------------------------------
-------------------------Cambiar posición ---------------------
---------------------------------------------------------------*/

function posicion(){
    let max = 78, min = 15, top, left; /*Max = 210 | min 0 10*/
    
    top = Math.floor(Math.random() * (max - min)) + min;
    left = Math.floor(Math.random() * (max - min)) + min;

    enemigo.style.top = top + "%";
    enemigo.style.left = left + "%";
}



/* ------------------------------------------------------------
--- animación de daño (cantidad de daño y movimiento) ---------
---------------------------------------------------------------*/


let hit = document.getElementById("movimiento");
let marcadorVida = document.getElementById("danoMarcador");
marcadorVida.innerHTML = 1;

function DanoMarcadorVida(){
    marcadorVida.innerHTML = dano;
}

enemigo.addEventListener("click", function(){
    marcadorVida.classList.toggle("marcador");
    hit.classList.toggle("hit");
    setTimeout(function(){
        marcadorVida.classList.toggle("marcador");
        hit.classList.toggle("hit");
    },500);
});



/* ------------------------------------------------------------
----------------------------- Barra de HP ---------------------
---------------------------------------------------------------*/


let barraVida = document.getElementById("porcentaje");
let drenar, auxTipo, PorcenVida;

function DrenarVida(){
    if(vida == 0){
        barraVida.style.width = "100%";
        auxDrenar = 100;
        /*console.log("Vida es igual a 0, Auxiliar es: " + auxDrenar);*/
    }else{
        drenar = (dano*100)/vidaActual;
        /*console.log("drenar = " + drenar);*/

        auxTipo = Number.parseFloat(drenar).toFixed(2);
        /*console.log("aux1Tipo = " + auxTipo);*/

        PorcenVida -= auxTipo;
        /*console.log("PorcenVida = " + PorcenVida);*/


        barraVida.style.width = PorcenVida + "%";
        /*console.log("porcentaje de vida a quitar: " + drenar + " Porcentaje de vida: " + PorcenVida);*/
    }
}
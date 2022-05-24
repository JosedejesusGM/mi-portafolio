document.getElementById("fechaAct").innerHTML = new Date().toDateString(); //Fecha del día

var cont = 1;

function numRand() { //Genera un numero aleatorio
    var max = 3200,
        min = 1000;
    return Math.floor(Math.random() * (max - min)) + min;
}

function calcular() {
    var nom = document.getElementById("Nombre").value;
    var fechaNac = new Date(document.getElementById("Nac").value);
    var tipoCliente = document.getElementById("tipo").value;
    var fechaL = new Date(document.getElementById("llegada").value);
    var haS = document.getElementById("cantS").value;
    var haD = document.getElementById("cantD").value;
    var haT = document.getElementById("cantT").value;
    var c = document.getElementById("ciudades").value;
    var totalDias = document.getElementById("dias").value;

    var cS, cD, cT;
    //Colocar valores en id
    document.getElementById("nomPersona").innerHTML = nom;

    var ciudad, cd;

    for (i = 0; i < 6; i++) {
        var aux = (i + 1)+"C";
        if (aux == c) {
            ciudad = ciud[i];
            cd = i;
            break;
        }
    }

    document.getElementById("ciudad").innerHTML = ciudad;
    document.getElementById("hosp").innerHTML = totalDias;
    document.getElementById("fechaL").innerHTML = (fechaL.getDate()+1) + " " + (fechaL.getMonth()+1) + " " + fechaL.getFullYear();
    

    if (document.getElementById("habitS").checked) {
        cS = document.getElementById("cantS").value;
        costoS = mat[cd][0];
    } else {
        cS = 0;
        costoS = 0;
    }

    if (document.getElementById("habitD").checked) {
        cD = document.getElementById("cantD").value;
        costoD = mat[cd][1];
    } else {
        cD = 0;
        costoD = 0;
    }

    if (document.getElementById("habitT").checked) {
        cT = document.getElementById("cantT").value;
        costoT = mat[cd][2];
    } else {
        cT = 0;
        costoT = 0;
    }
    

    document.getElementById("canS").innerHTML = cS;
    document.getElementById("canD").innerHTML = cD;
    document.getElementById("canT").innerHTML = cT;

    document.getElementById("cS").innerHTML = costoS;
    document.getElementById("cD").innerHTML = costoD;
    document.getElementById("cT").innerHTML = costoT;

    var total;

    document.getElementById("tS").innerHTML = cS * costoS;
    document.getElementById("tD").innerHTML = cD * costoD;
    document.getElementById("tT").innerHTML = cT * costoT;

    total = cS * costoS + cD * costoD + cT * costoT;

    document.getElementById("totalP").innerHTML = total;

    var selec = document.getElementsByName("tipo");
    var pos;
    //alert(selec[1].checked);
    if (selec[1].checked) {
        document.getElementById("totalDV").innerHTML = total * 0.98;
    } else {
        document.getElementById("totalDV").innerHTML = "N/A"; //total
    }

    //Agregar fechas
    var dias = document.getElementById("dias").value;
    var fLlegada = fechaL.getTime();
    //alert(fLlegada);
    var mDias = dias * 86400000; //Dias en milisegundos
    var fSalida = new Date();
    //alert(mDias + fSalida);
    fSalida.setTime(mDias + fLlegada);
    //alert(fSalida.toString);
    document.getElementById("fechaS").innerHTML = (fSalida.getDate() + 1) + " " + (fSalida.getMonth() + 1) + " " + fSalida.getFullYear();

    //Descuento cumpleaños
    //alert(fechaNac.getDate());
    //alert(fechaNac.getMonth());
    var fechaA = new Date();
    //alert(fechaA.getDate());
    //alert(fechaA.getMonth());
    if (fechaNac.getMonth() === fechaA.getMonth()) {
        //alert("si);
        document.getElementById("totalDC").innerHTML = total * 0.92;
    } else {
        //alert("no);
        document.getElementById("totalDC").innerHTML = "N/A"; //total
    }
}

    var ciud = ["Aguascalientes", "Guadalajara", "Guanajuato", "Mexico", "Monterrey", "Tabasco"];
    var mat = [];
    var x;
    var i,j;

for (i = 0; i < 6; i++){
    mat[i] = [];
}

for (i = 0; i < 6; i++){
    x = numRand();
    mat[i][0] = x;
    mat[i][1] = x+200;
    mat[i][2] = x+400;
}

//Imprimir en tabla

for (i = 0; i < 6; i++){
    for (j = 0; j < 3; j++){
        if (i == 0)
            document.getElementById("a").innerHTML = ciud[i];
        if (i == 1)
            document.getElementById("b").innerHTML = ciud[i];
        if (i == 2)
            document.getElementById("c").innerHTML = ciud[i];
        if (i == 3)
            document.getElementById("d").innerHTML = ciud[i];
        if (i == 4)
            document.getElementById("e").innerHTML = ciud[i];
        if (i == 5)
            document.getElementById("f").innerHTML = ciud[i];
        
        document.getElementById(cont).innerHTML = (mat[i][j]);
        cont++;
    }
    document.write("<br>");
}

//Recuperar datos formulario

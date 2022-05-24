<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilos2.css">
    <link rel="icon" href="../images/logoMexico.ico">
    <title>CURP Generada</title>
</head>
<body>
   
   <div class="encabezado">
  <img src="../images/Banner.png" alt="logo" class="img">
  <img src="../images/Gobierno1.1.jpg" alt="banner" class="img">
  <h1 class="titulo">CURP Generada</h1>
  </div>
    


<div class="cont">
<?php
/*datos para la conexion del servidor*/
$servidor="localhost";
$usuario="pepe";
$contrasena="1234";
$bd="generador_curp";



/*Validamos los datos del formulario*/
if($_POST["nombre"]){
    $nombre=$_POST["nombre"];
    echo "<div class=campos>";   
    echo "<p class=variable id='nombre'>Nombre: </p><p class=texto id='rnombre'>".$nombre."</p><br>";
    echo "</div>";   
}

if($_POST["pape"]){
    $apepat=$_POST["pape"];
    echo "<div class=campos>";   
    echo "<p class=variable id='Papellido'>Primer apellido: </p><p class=texto id='rPapellido'>".$apepat."</p><br>";
    echo "</div>";   
}

if($_POST["sape"]){
    $apemat=$_POST["sape"];
    echo "<div class=campos>";   
    echo "<p class=variable id='Sapellido'>Segundo apellido: </p><p class=texto id='rSapellido'>".$apemat."</p><br>";
    echo "</div>";   
}

if($_POST["genero"]){
    $genero=$_POST["genero"];
    echo "<div class=campos>";   
    echo "<p class=variable id='genero'>Genero: </p><p class=texto id='rgenero'>".$genero."</p><br>";
    echo "</div>";   
}

if($_POST["dia"]){
    $dia=$_POST["dia"];
}

if($_POST["mes"]){
    $mes=$_POST["mes"];
}

if($_POST["ano"]){
    $ano=$_POST["ano"];
}

if($_POST["entidad"]){
    $entidad=$_POST["entidad"];
}

if($_POST["correo"]){
    $correo=$_POST["correo"];
}

switch($entidad){
    case 1:
        $ent='Aguascalientes';
        $entIniciales="AS";
        break;
    case 2:
        $ent='Baja California';
        $entIniciales="BC";
        break;
    case 3:
        $ent='Baja_California_Sur';
        $entIniciales="BS";
        break;
    case 4:
        $ent='Campeche';
        $entIniciales="CC";
        break;
    case 5:
        $ent='Coahuila';
        $entIniciales="CL";
        break;
    case 6:
        $ent='Colima';
        $entIniciales="CM";
        break;
    case 7:
        $ent='Chiapas';
        $entIniciales="CS";
        break;
    case 8:
        $ent='Chihuahua';
        $entIniciales="CH";
        break;
    case 9:
        $ent='Durango';
        $entIniciales="DG";
        break;
    case 10:
        $ent='Distrito_Federal';
        $entIniciales="DF";
        break;
    case 11:
        $ent='Guanajuato';
        $entIniciales="GT";
        break;
    case 12:
        $ent='Guerrero';
        $entIniciales="GR";
        break;
    case 13:
        $ent='Hidalgo';
        $entIniciales="HG";
        break;
    case 14:
        $ent='Jalisco';
        $entIniciales="JC";
        break;
    case 15:
        $ent='México';
        $entIniciales="MC";
        break;
    case 16:
        $ent='Michoacán';
        $entIniciales="MN";
        break;
    case 17:
        $ent='Morelos';
        $entIniciales="MS";
        break;
    case 18:
        $ent='Nayarit';
        $entIniciales="NT";
        break;
    case 19:
        $ent='Nuevo_León';
        $entIniciales="NL";
        break;
    case 20:
        $ent='Oaxaca';
        $entIniciales="OC";
        break;
    case 21:
        $ent='Puebla';
        $entIniciales="PL";
        break;
    case 22:
        $ent='Querétario';
        $entIniciales="QT";
        break;
    case 23:
        $ent='Quintana_Roo';
        $entIniciales="QR";
        break;
    case 24:
        $ent='San_Luis_Potosí';
        $entIniciales="SP";
        break;
    case 25:
        $ent='Sinaloa';
        $entIniciales="SL";
        break;
    case 26:
        $ent='Sonora';
        $entIniciales="SR";
        break;
    case 27:
        $ent='Tabasco';
        $entIniciales="TC";
        break;
    case 28:
        $ent='Tamaulipas';
        $entIniciales="TS";
        break;
    case 29:
        $ent='Tlaxcala';
        $entIniciales="TL";
        break;
    case 30:
        $ent='Veracruz';
        $entIniciales="VZ";
        break;
    case 31:
        $ent='Yucatán';
        $entIniciales="YN";
        break;
    case 32:
        $ent='Zacatecas';
        $entIniciales="ZS";
        break;       
}


switch ($mes){
    case 1:
        $nMes="Enero";
        $numMes="01";
        break;
    case 2:
        $nMes="Febrero";
        $numMes="02";
        break;
    case 3:
        $nMes="Marzo";
        $numMes="03";
        break;
    case 4:
        $nMes="Abril";
        $numMes="04";
        break;
    case 5:
        $nMes="Mayo";
        $numMes="05";
        break;
    case 6:
        $nMes="Junio";
        $numMes="06";
        break;
    case 7:
        $nMes="Julio";
        $numMes="07";
        break;
    case 8:
        $nMes="Agosto";
        $numMes="08";
        break;
    case 9:
        $nMes="Septiembre";
        $numMes="09";
        break;
    case 10:
        $nMes="Octubre";
        $numMes="10";
        break;
    case 11:
        $nMes="Noviembre";
        $numMes="11";
        break;
    case 12:
        $nMes="Diciembre";
        $numMes="12";
        break;
}
    
echo "<div class=campos>";       
echo "<p class=variable id='fecha'>Fecha de nacimiento: </p><p class=texto id='rfecha'>".$dia." de ".$nMes." del ".$ano."</p><br>";
echo "</div>";       
    
echo "<div class=campos>";       
echo "<p class=variable id='entidad'>Entidad: </p><p class=texto id='rentidad'>".$ent."</p><br>";
echo "</div>";   
    
echo "<div class=campos>";   
echo "<p class=variable id='correo'>Correo: </p><p class=texto id='rcorreo'>".$correo."</p><br>";
echo "</div>";   
/*__________________________________________Generción de la CURP______________________________________________*/

/*_____________________inicial y primera vocal interna del primer apellido_________________*/
$bocal=array("A", "E", "I", "O", "U", "a", "e", "i", "o", "u");

$primApellido=str_split($apepat);
$IniPrimApellido=$primApellido[0];  /*inicial del primer apellido*/

$primera=ucfirst($IniPrimApellido); /*Convierte letra en mayuscula*/

$PA=count($primApellido); //cuenta el vector

$cont=0;

for($i=1; $i<$PA; $i++){
    for($j=0; $j<9; $j++){
        if(strcmp($primApellido[$i],$bocal[$j])!==0){
            $cont++;
        }else{
            $BocalPrimApellido=$bocal[$j]; /*primer consonante del segundo apellido*/
            $j=9;
            $i=$PA;
        }
    }
}

//for($i=0; $i<=9; $i++){
  //  for($j=1; $j<$PA; $j++){
    //    if(strcmp($primApellido[$j],$bocal[$i])==1){
      //      $BocalPrimApellido= $bocal[$i]; /*primer bocal del primer apellido*/
        //    $j=$PA;
          //  $i=9;
        //}
    //}
//}

$segunda=ucfirst($BocalPrimApellido); /*Convierte letra en mayuscula*/


/*______________________________inicial del segundo apellido_____________________________________________*/
$segapellido=str_split($apemat);
$IniSegapellido=$segapellido[0];  /*inicial del segundo apellido*/

$tercera=ucfirst($IniSegapellido); /*Convierte letra en mayuscula*/


/*___________________________________inicial del nombre_________________________________________________*/
$divnombre=str_split($nombre);
$Ininombre=$divnombre[0];

$cuearta=ucfirst($Ininombre); /*Convierte letra en mayuscula*/

/*Fecha de nacimiento año mes dia*/
/*sexo H -> hombre    M -> mujer*/
/*abreviacion de la entidad federativa  -->  $entIniciales*/
/*______________Primera consonantes internas del primer apellido, segundo apellido y del nombre___________________*/
$consonante=array("B","C","D","F","G","H","J","K","L","M","N","P","Q","R","S","T","V","X","Y","Z","b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","x","y","z");

/* $divnombre     -> array del nombre
   $primApellido  -> array del primer apellido
   $segapellido   -> array del segundo apellido*/


for($i=1; $i<$PA; $i++){
    for($j=0; $j<40; $j++){
        if(strcmp($primApellido[$i],$consonante[$j])!==0){
            $cont++;
        }else{
            $ConstPrimApellido=$consonante[$j]; /*primer consonante del primer apellido*/
            $i=$PA;
            $j=40;    
        }
    }
}

$quinta=ucfirst($ConstPrimApellido); /*Convierte letra en mayuscula*/

$SA=count($segapellido); //cuenta el vector


for($i=1; $i<$SA; $i++){
    for($j=0; $j<40; $j++){
        if(strcmp($segapellido[$i],$consonante[$j])!==0){
            $cont++;
        }else{
            $ConstSegApellido=$consonante[$j]; /*primer consonante del segundo apellido*/
            $j=40;
            $i=$SA;
        }
    }
}

$sexta=ucfirst($ConstSegApellido); /*Convierte letra en mayuscula*/

$N=count($divnombre); //cuenta el vector

for($i=1; $i<$N; $i++){
    for($j=0; $j<40; $j++){
        if(strcmp($divnombre[$i],$consonante[$j])!==0){
            $cont++;
        }else{
            $ConstNombre=$consonante[$j]; /*primer consonante del segundo apellido*/
            $j=40;
            $i=$N;
        }
    }
}

$septima=ucfirst($ConstNombre); /*Convierte letra en mayuscula*/

/*elemento para evitar registros duplicados*/

$digito=rand(0,9);


$numAno=str_split($ano);

/*echo "CURP -> ".$primera."".$segunda."".$tercera."".$cuearta."".$numAno[2]."".$numAno[3]."".$numMes."".$dia."".$genero."".$entIniciales."".$quinta."".$sexta."".$septima."0".$digito."";*/

$CURP="".$primera."".$segunda."".$tercera."".$cuearta."".$numAno[2]."".$numAno[3]."".$numMes."".$dia."".$genero."".$entIniciales."".$quinta."".$sexta."".$septima."0".$digito."";

echo "<div class='campos ultimoCampo'>";    
echo "<p class=variable id='curp'>Tu CURP generada es: </p><p class=texto id='rcurp'>".$primera."".$segunda."".$tercera."".$cuearta."".$numAno[2]."".$numAno[3]."".$numMes."".$dia."".$genero."".$entIniciales."".$quinta."".$sexta."".$septima."0".$digito;
echo "</div>";  

/*realizamos la conexión para la base de datos*/


$conexion=mysqli_connect($servidor,$usuario,$contrasena,$bd);
if(!$conexion){
    echo "Error: No se pudo conectar la la base de datos MySQL".PHP_OEL;
    echo "Error de depuración: ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuración: ".mysqli_connect_errno().PHP_EOL;
    exit;
}

/*echo "Exito: se realizo satisfactoriamente la conexión a la base de datos. Ya esta lista para conectarse".PHP_EOL;*/

$query="INSERT INTO info_curp
(nombre,
primer_apellido,
segundo_apellido,
genero,
dia,
mes,
ano,
Entidad_Federativa,
correo)VALUES
('$nombre',
'$apepat',
'$apemat',
'$genero',
'$dia',
'$nMes',
'$ano',
'$ent',
'$correo')";

mysqli_query($conexion,$query);  /*inserta en la base de datos*/

/*Almacenar la CURP en la base de datos*/

/*Obtenemos el ultimo ID insertado en la base de datos*/

$last_id=mysqli_insert_id($conexion);
/*echo "El ultimo ID es: ".$last_id;*/

$sentencia ="UPDATE info_curp SET CURP='$CURP' WHERE id='$last_id'";
mysqli_query($conexion,$sentencia);




/* mostrar en pantalla los datos de la curp almacenada*/

/*_____________________Mensaje que se enviara al corrreo (enviar datos generales y la CURP)_________________________________________*/

$mensaje="Datos generales: Nombre: ".$nombre."          Primer apellido: ".$apepat."          Segundo apellido: ".$apemat."           Genero: ".$genero."          Fecha de nacimiento: ".$dia." de ".$nMes." del ".$ano."          Entidad federativa: ".$ent."          Correo: ".$correo."                          su CURP es la siguiente: ".$CURP;

/*Enviamos el correo electronico*/
$correo=mail($correo,"Generacion de CURP",$mensaje);
/*if($correo)
    echo "El mensaje fue enviado correctamente";
else
    echo "No se pudo enviar el mensaje";*/
      
?>

<a href="../index.html" class="btn">Generar otra CURP</a>

</div>

</body>
</html>

<?php
/*datos para la conexion del servidor*/
$servidor="localhost";
$usuario="liverpool";
$contrasena="123456789";
$bd="liverpool";

/*DATOS DEL FORMULARIO*/
/*Validamos los datos del formulario*/
if($_POST["nombre"]){
    $nombre=$_POST["nombre"];    
}

if($_POST["PrimA"]){
    $PrimA=$_POST["PrimA"];   
}

if($_POST["SegA"]){
    $SegA=$_POST["SegA"];    
}

if($_POST["userName"]){
    $user=$_POST["userName"];   
}

if($_POST["genero"]){
    $genero=$_POST["genero"];   
}

if($_POST["FechNac"]){
    $FechNac=$_POST["FechNac"]; 
    
    /*Cada vez que encuntre el diagonallo separa y lo mete en el arreglo*/
    /*$f = explode('-', $FechNac);*/
    
    
    $f=str_split($FechNac); /*La fecha se convierte en un array*/
    $contiene=count($f); /*cuenta cuantos elementos tiene el arreglo*/
    
/*
    for($i=0; $i<$contiene; $i++){
        echo ">".$f[$i]."< <br>";
    }
*/

    /*Formato que se debe de pasar a la base de datos 
                AÑO/MES/DIA                      */
    $fecha = $f[8]."".$f[9]."-".$f[5]."".$f[6]."-".$f[0]."".$f[1]."".$f[2]."".$f[3]; 
}

if($_POST["correo"]){
    $email=$_POST["correo"];   
}

if($_POST["clave"]){
    $password=$_POST["clave"];    
}


/*$nombre=$_POST["nombre"];
$PrimA=$_POST["PrimA"];
$SegA=$_POST["SegA"];
$user=$_POST["userName"];
$genero=$_POST["genero"];
$FechNac=$_POST["FechNac"];
$email=$_POST["correo"];
$password=$_POST["clave"];*/



/*realizamos la conexión para la base de datos*/
$conexion=mysqli_connect($servidor,$usuario,$contrasena,$bd);
if(!$conexion){
    echo "Error: No se pudo conectar la la base de datos MySQL".PHP_OEL;
    echo "Error de depuración: ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuración: ".mysqli_connect_errno().PHP_EOL;
    exit;
}

/*echo "Exito: se realizo satisfactoriamente la conexión a la base de datos. Ya esta lista para conectarse".PHP_EOL;*/

$consulta="INSERT INTO 
usuarios(usuario,nombre,primer_apellido,segundo_apellido,genero,fecha_de_nacimiento,correo,contrasena) 
VALUES ('$user','$nombre','$PrimA','$SegA','$genero','$fecha','$email','$password')";

mysqli_query($conexion,$consulta);
mysqli_close($conexion);
header("location:../Login.html");

?>
<?php
/*datos para la conexion del servidor*/
$servidor="localhost";
$usuario="liverpool";
$contrasena="123456789";
$bd="liverpool";

/*DATOS DEL FORMULARIO*/
$user=$_POST["userName"];
$password=$_POST["clave"];


/*realizamos la conexión para la base de datos*/
$conexion=mysqli_connect($servidor,$usuario,$contrasena,$bd);
if(!$conexion){
    echo "Error: No se pudo conectar la la base de datos MySQL".PHP_OEL;
    echo "Error de depuración: ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuración: ".mysqli_connect_errno().PHP_EOL;
    exit;
}

/*echo "Exito: se realizo satisfactoriamente la conexión a la base de datos. Ya esta lista para conectarse".PHP_EOL;*/

$consulta="SELECT * FROM usuarios WHERE usuario='$user' AND contrasena='$password'";

$resultado = mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);

if($filas>0){
    session_start();
    /*cracion de las 3 variables de sesion*/
    $_SESSION['usuario']=$user;
    $_SESSION['contrasena']=$password;
    /*$_SESSION['dato']="Dato transferido";*/
    /*header("location:php/Dpersonales.php");*/
    echo '<script> window.location="../php/Dpersonales.php" </script>';
    
}else{
    echo '<script> alert("Contraseña o correo invalido, vuelva a ingresar los datos") </script>';
   /* sleep(3);*/
    echo '<script> window.location="../Login.html" </script>';
    /*header("location:../Login.html");*/
}

mysqli_close($conexion);
/*header("location:ingresar.html");*/

?>
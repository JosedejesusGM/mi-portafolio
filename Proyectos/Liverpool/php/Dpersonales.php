<?php
session_start();
$user=$_SESSION['usuario'];

if($user==null || $user==''){
    echo "Usted no ha iniciado sesion";
    die();
}

/*datos para la conexion del servidor*/
$servidor="localhost";
$usuario="liverpool";
$contrasena="123456789";
$bd="liverpool";

/*realizamos la conexión para la base de datos*/
$conexion=mysqli_connect($servidor,$usuario,$contrasena,$bd);
if(!$conexion){
    echo "Error: No se pudo conectar la la base de datos MySQL".PHP_OEL;
    echo "Error de depuración: ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuración: ".mysqli_connect_errno().PHP_EOL;
    exit;
}

/*echo "Exito: se realizo satisfactoriamente la conexión a la base de datos. Ya esta lista para conectarse".PHP_EOL;*/

$contrasena=$_SESSION['contrasena'];
/*$dato=$_SESSION['dato'];*/
$DatosUsuarios="SELECT * FROM usuarios WHERE usuario='$user'";
$resultado=mysqli_query($conexion,$DatosUsuarios);
$rowUsuarios=mysqli_fetch_array($resultado);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi Cuenta</title>
    <link rel="stylesheet" href="../css/Dpersonales.css">
</head>
<body>
  
  <div class="menu">
    <img src="../images/Miniatura.png" alt="miniatura" class="miniatura">
    
    <h2 class="usuario"> <?php echo $user ?> </h2>
     <form action="CerrarSesion.php">
     <button class="enlace2">Cerrar Sesión</button>
     </form>
     
 </div>
  
  
  
   <h1 class="titulo">Información de la cuenta</h1>
   
   <a href="Dpersonales.php" class="miCuenta"><h2 class="textCuenta">Mi Cuenta</h2></a>
   
   
   <div class="ContenedorDeTodo">
       <div class="apartados">
          <h3 class="credito">Crédito</h3>
           <a href="Tarjeta.php" class="miTarjeta"><p>Administrar mi tarjeta</p></a>
           
       </div>
       <!-- usuario, nombre, primer_apellido, segundo_apellido, genero, fecha_de_nacimiento, correo, contrasena-->
       <div class="datosPersonales">
          <h2>Datos Personales</h2>
          <hr color="black" size=2>
          
           <p class="Dato">Correo electrónico</p>
           <p class="textoD"> <?php echo $rowUsuarios['correo'] ?> </p>
           
           <p class="Dato">Nombre</p>
           <p class="textoD"> <?php echo $rowUsuarios['nombre']; ?> <?php echo $rowUsuarios['primer_apellido']; ?> <?php echo $rowUsuarios['segundo_apellido']; ?></p>
           
           <p class="Dato">Fecha de nacimiento</p>
           <p class="textoD"><?php echo $rowUsuarios['fecha_de_nacimiento'] ?></p>
           
           <p class="Dato">Sexo</p>
           <p class="textoD"><?php echo $rowUsuarios['genero'] ?></p>
       </div>
       
   </div>
    
</body>
</html>
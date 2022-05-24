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
$DatosTarjetas="SELECT * FROM tarjetas WHERE usuario='$user'";
$resultado=mysqli_query($conexion,$DatosTarjetas);
$rowTarjetas=mysqli_fetch_array($resultado);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Información de la tarjeta</title>
    <link rel="stylesheet" href="../css/Tarjeta.css">
</head>
<body>
  
  <div class="menu">
    <img src="../images/Miniatura.png" alt="miniatura" class="miniatura">
    
    <h2 class="usuario"> <?php echo $user ?> </h2>
     <form action="CerrarSesion.php">
     <button class="enlace2">Cerrar Sesión</button>
     </form>
     
 </div>
  
  
  
   <h1 class="titulo">Información de la tarjeta</h1>
   
   <a href="Dpersonales.php" class="miCuenta"><h2 class="textCuenta">Mi Cuenta</h2></a>
   
   
   <div class="ContenedorDeTodo">
       <div class="apartados">
          <h3 class="credito">Crédito</h3>
           <a href="Tarjeta.php" class="miTarjeta"><p>Administrar mi tarjeta</p></a>
           
       </div>
       <!--saldo_actual, credito_disponible, pago_minimo, pago_no_intereses, fecha_limite_de_pago, saldo_disponible -->
       <div class="contDatosTarjeta">
           <h2 class="subTitulo">Datos de la Tarjeta</h2>
           <hr color="black" size=2>
       
       <div class="datosTarjeta">
          
          <div class="ab">
          <div class="a">
           <p class="Dato">Saldo actual</p>
           <p class="textoD"> <?php echo $rowTarjetas['saldo_actual'] ?> </p>
           </div>
           
           <div class="b">
           <p class="Dato">Crédito disponible</p>
           <p class="textoD"> <?php echo $rowTarjetas['credito_disponible']; ?> </p>
           </div>
           <span style="display: inline-block;">
           <hr align="left" class="lineaVertical1" width="2px" noshade="noshade">
           </span>
           </div>
           
           <div class="cd">
           <div class="c">
           <p class="Dato">Pago mínimo</p>
           <p class="textoD"><?php echo $rowTarjetas['pago_minimo'] ?></p>
           </div>
           
           <div class="d">
           <p class="Dato">Pago para no pagar intereses</p>
           <p class="textoD"><?php echo $rowTarjetas['pago_no_intereses'] ?></p>
           </div>
           
           <div class="e">
           <p class="Dato">Fecha límite de pago</p>
           <p class="textoD"><?php echo $rowTarjetas['fecha_limite_de_pago'] ?></p>
           </div>
           </div>
           
           <div class="f">
           <p class="Dato">Saldo disponible</p>
           <p class="textoD"><?php echo $rowTarjetas['saldo_disponible'] ?></p>
           </div>
       </div><!--fin DatosTarjeta-->
       </div><!--fin contDatosTarjeta-->
       
   </div> <!--fin contenedor de todo-->
    
</body>
</html>
<?php
session_start();
$user=$_SESSION['usuario'];

if($user==null || $user==''){
    echo "Usted no ha iniciado sesion";
    die();
}

session_destroy();
header("location:../Login.html");
/*echo '<script> window.location="../Login.html" </script>';*/
?>
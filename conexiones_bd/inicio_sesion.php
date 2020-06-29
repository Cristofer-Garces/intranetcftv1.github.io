<?php
session_start();

$conexion=mysqli_connect('localhost', 'root', '', 'cftla') or die ("No se pudo conectar a la base de datos". mysqli_error($conexion));


	

$nombre = $_POST["usuario"];
$password = $_POST["clave"];

$query = mysqli_query($conexion,"SELECT * FROM cuentas WHERE usuarios = '".$nombre."' and clave = '".$password."'");
$nr = mysqli_num_rows($query);

if($nr == 1 &&  $_POST["usuario"] && $_POST["clave"])
{   
session_start();
$_SESSION["autentificado"]= "SI";
//Datos Correctos
header ("Location: ../panel_usu/home.php"); 
}else{ //datos incorrectos
header("Location: ../");
	 }
     ?>
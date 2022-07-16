<?php
include("C:/xampp/htdocs/Formulario/Union-Server.php"); //incluye la union al servidor de mysql
$SQL= "SELECT * FROM `base de datos alumnos` WHERE 1 order by id desc";//selecciono toda la base de datos para mostrarla
$Resultado=mysqli_query($conex,$SQL);//se hace la conexion con toda la base de datos
 while ($mostrar=mysqli_fetch_array($Resultado)) {//imprime por pantalla toda la base de datos 
if (empty($mostrar['ID']+1) && 1==2) {
    header("location: /Formulario/formulario.php");
} else {
     echo "hola";}}
?>
<script>function otraPagina(){
var confirmar = confirm('Se inserto el usuario correctamente');
if (confirmar){
  
  window.location.href = '/Formulario-Alumnos/Tabla_Alumnos.php'

}else {alert('hubo un error')}}</script>
<?php
$conexion= mysqli_connect('localhost','root','','tp-php');

$id = $_POST['ID'];
$nombre = $_POST['Nombre'];
$edad = $_POST['Edad'];
$Email = $_POST['Email'];
$Telefono = $_POST['Telefono'];
$Fecha = $_POST['Fechaderegistro'];
$Imagen = $_POST['Imagen'];

//insert
$insertar = "INSERT INTO `base de datos alumnos`(`ID`, `Nombre`, `Edad`, `Email`, `Telefono`, `Fecha de registro`, `Imagen`) VALUES ('$id','$nombre','$edad','$Email','$Telefono','$Fecha','$Imagen')";

$Resultado=mysqli_query($conexion,$insertar);
if ($Resultado){
    echo "<script>otraPagina();</script>";
    
} 
?>
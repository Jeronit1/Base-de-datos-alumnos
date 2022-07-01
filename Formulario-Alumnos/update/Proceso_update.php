<script>function otraPagina(){
var confirmar = confirm('Se actualizaron los cambios correctamente');
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
$ID_Login= $_POST['ID_Login'];
//actualizar
$actualizar = "UPDATE `base de datos alumnos` SET `ID`='$id',`Nombre`='$nombre',`Edad`='$edad',`Email`='$Email',`Telefono`='$Telefono',`Fecha de registro`='$Fecha',`Imagen`='$Imagen',`ID_Login`='$ID_Login' WHERE ID='$id'";

$Resultado=mysqli_query($conexion,$actualizar);
if ($Resultado){
    echo "<script>otraPagina();</script>";
    
} 
?>
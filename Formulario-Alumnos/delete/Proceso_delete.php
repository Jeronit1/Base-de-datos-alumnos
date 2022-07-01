<script>function otraPagina(){
var confirmar = confirm('Se borraron los datos correctamente');
if (confirmar){
  
  window.location.href = '/Formulario-Alumnos/Tabla_Alumnos.php'

}else {alert('hubo un error')}}</script>
<?php
$conexion= mysqli_connect('localhost','root','','tp-php');
$id = $_POST['ID'];
$eliminar = "DELETE FROM `base de datos alumnos` WHERE ID='$id'";
$Resultado=mysqli_query($conexion,$eliminar);
if ($Resultado){
    echo "<script>otraPagina();</script>";
} 
?>
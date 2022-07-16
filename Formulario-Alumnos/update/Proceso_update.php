<script>function otraPagina(){//Funcion que manda el mensaje de que se actualizo correctamente
var confirmar = confirm('Se actualizaron los cambios correctamente');
if (confirmar){
  
  window.location.href = '/Formulario-Alumnos/Tabla_Alumnos.php'

}else {alert('hubo un error')}}</script>
<?php
$conexion= mysqli_connect('localhost','root','','tp-php');//conexion a la base de datos

//mensajes de error:
if (isset($_POST['submit'])) {//toma los datos del formulario registro para subirlo a la base de datos y tirar los mensajes de error
  if (empty($Nombre)) {
      echo "<p class='error'>* No ingreso un nombre</p>";//mensaje de error si el nombre esta vacio
  }
  if (empty($Edad)) {
      echo "<p class='error'>* No ingreso su Edad</p>";//mensaje de error si la edad esta vacio
  }
  if (empty($Telefono)) {
      echo "<p class='error'>* No ingreso su telefono</p>";//mensaje de error si el mail esta vacio
  }
  if (strlen($_POST['Nombre']) > 1 && strlen($_POST['Edad']) > 1 && strlen($_POST['Telefono']) > 1) {//verifica que los campos no esten vacios
//imagen
$Nombre_Imagen=$_FILES['Imagen'] ['name'];//se obtiene el nombre de la imagen subida
$Carpeta_Destino='../../Formulario/intranet/uploads/';//sirve para guardar las imagenes en intranet
move_uploaded_file($_FILES['Imagen'] ['tmp_name'], $Carpeta_Destino.$Nombre_Imagen);//mueve la imagen subida a intranet
//actualizar
$actualizar = "UPDATE `base de datos alumnos` SET `ID`='$id',`Nombre`='$Nombre',`Edad`='$Edad',`Telefono`='$Telefono',`Fecha de registro`='$Fecha',`Imagen`='$Carpeta_Destino$Nombre_Imagen',`ID_Login`='$ID_Login' WHERE ID='$id'";//se importan los datos del usuario a la base de datos con el proceso update

$Resultado=mysqli_query($conexion,$actualizar);//conexion que hace el proceso de update
if ($Resultado){//si se importo bien los cambios da el mensaje de todo bien y te devuelve a la TABLA-ALUMNOS
    echo "<script>otraPagina();</script>";
    
} }}
?>

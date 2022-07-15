<script>function otraPagina(){//Funcion que manda el mensaje de que se actualizo correctamente
var confirmar = confirm('Se actualizaron los cambios correctamente');
if (confirmar){
  
  window.location.href = '/Formulario-Alumnos/Tabla_Alumnos.php'

}else {alert('hubo un error')}}</script>
<?php
$conexion= mysqli_connect('localhost','root','','tp-php');//conexion a la base de datos

$id = $_POST['ID'];//Almaceno el ID en una variable
$nombre = $_POST['Nombre'];//Almaceno el Nombre que se actualizo en una variable
$edad = $_POST['Edad'];//Almaceno la edad que se actualizo en una variable
$Email = $_POST['Email'];//Almaceno el mail que se actualizo en una variable
$Telefono = $_POST['Telefono'];//Almaceno el telefono que se actualizo en una variable
$Fecha = date("y/m/d");
$ID_Login= $_POST['ID_Login'];//Almaceno el id_login en una variable
//imagen
$Nombre_Imagen=$_FILES['Imagen'] ['name'];//se obtiene el nombre de la imagen subida
$Carpeta_Destino='/Formulario/intranet/uploads/';//sirve para guardar las imagenes en intranet
move_uploaded_file($_FILES['Imagen'] ['tmp_name'], $Carpeta_Destino.$Nombre_Imagen);//mueve la imagen subida a intranet
//actualizar
$actualizar = "UPDATE `base de datos alumnos` SET `ID`='$id',`Nombre`='$nombre',`Edad`='$edad',`Email`='$Email',`Telefono`='$Telefono',`Fecha de registro`='$Fecha',`Imagen`='$Carpeta_Destino$Nombre_Imagen',`ID_Login`='$ID_Login' WHERE ID='$id'";//se importan los datos del usuario a la base de datos con el proceso update

$Resultado=mysqli_query($conexion,$actualizar);//conexion que hace el proceso de update
if ($Resultado){//si se importo bien los cambios da el mensaje de todo bien y te devuelve a la TABLA-ALUMNOS
   // echo "<script>otraPagina();</script>";
    
} 
?>
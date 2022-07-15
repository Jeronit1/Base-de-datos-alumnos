<script>function otraPagina(){//Funcion que manda el mensaje de que se actualizo correctamente
var confirmar = confirm('Se inserto el usuario correctamente');
if (confirmar){
  
  window.location.href = '/Formulario-Alumnos/Tabla_Alumnos.php'

}else {alert('hubo un error')}}</script>
<?php
$conexion= mysqli_connect('localhost','root','','tp-php');//conexion a la base de datos
//mensajes de error:
if (isset($_POST['submitUp'])) {//toma los datos del formulario registro para subirlo a la base de datos y tirar los mensajes de error
  if (empty($Nombre)) {//empty = si esta vacio
      echo "<p class='error'>* Agregue su Nombre</p>"; //mensaje de error si el nombre esta vacio
  }
  if (empty($Edad)) {
      echo "<p class='error'>* Agregue su Edad</p>";//mensaje de error si el mail esta vacio
  }
  if (empty($Email)) {
      echo "<p class='error'>* Agregue su email</p>";//mensaje de error si la contraseña esta vacio
  }
  if (empty($Telefono)) {//empty = si esta vacio
    echo "<p class='error'>* Agregue su Telefono</p>"; //mensaje de error si el nombre esta vacio
}
if (empty($Contraseña)) {//empty = si esta vacio
  echo "<p class='error'>* Agregue una Contraseña</p>"; //mensaje de error si el nombre esta vacio
}
  if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {//error si el mail es incorrecto si esta mal escrito
      echo "<p class='error'>* Su correo es incorrecto</p>";
  } else{
  if (strlen($_POST['Nombre']) > 1 && strlen($_POST['Edad']) > 1 && strlen($_POST['Email']) > 1 && strlen($_POST['Telefono']) > 1 && strlen($_POST['Contraseña']) > 1) {//verifica que los campos no esten vacios
      $result= mysqli_query($conexion, "SELECT * FROM `login-alumnos` WHERE Email='$Email'"); //Guarda en resultado todos los mail que existan en la base de datos para compararlos y tirar error si ponen uno igual
      if(mysqli_num_rows($result)>0)  // Si es mayor a cero imprimimos que ya existe el usuario
      {
           echo "<p class='error'>Ya existe el Usuario</p>";
      }
      else
      {
//imagen
$Nombre_Imagen=$_FILES['Imagen'] ['name'];//se obtiene el nombre de la imagen subida
$Carpeta_Destino='./Formulario/intranet/uploads/';//sirve para guardar las imagenes en intranet
move_uploaded_file($_FILES['Imagen'] ['tmp_name'], $Carpeta_Destino.$Nombre_Imagen);//mueve la imagen subida a intranet
//insert
$insertar = "INSERT INTO `base de datos alumnos`(`ID`, `Nombre`, `Edad`, `Email`, `Telefono`, `Fecha de registro`, `Imagen`, `ID_Login`) VALUES ('$Id','$Nombre','$Edad','$Email','$Telefono','$Fecha','$Carpeta_Destino$Nombre_Imagen',$IDLogin)";//se almacena en una variable para hacer el proceso de insert a la base de datos
$insertarLogin = "INSERT INTO `login-alumnos`(`IDLogin`, `Nombre`, `Email`, `Contraseña`, `Confirmacion`) VALUES ('$IDLogin','$Nombre','$Email','$Contraseña','$Contraseña')";//se almacena en una variable para hacer el proceso de insert a la base de datos
//
$Resultado=mysqli_query($conexion,$insertar);//se inserta el usuario en la base de datos
$ResultadoLogin=mysqli_query($conexion,$insertarLogin);//se inserta el usuario en la base de datos
if ($Resultado && $ResultadoLogin){//tira el mensaje de todo bien y te regresa a la tabla_alumnos
    echo "<script>otraPagina();</script>";
    
} }}}}
?>
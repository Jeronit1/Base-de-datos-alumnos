<script>function otraPagina(){
var confirmar = confirm('Se inscribio correctamente');
if (confirmar){
  
  window.location.href = 'Formulario.php'

}else {alert('hubo un error')}}</script>
<?php
include("C:/xampp/htdocs/Formulario/Union-Server.php");
    if ((empty ($_SESSION["email"]))) {//verifica que exista un mail y en caso de no existir lo manda al login(al cerrar sesion se destruye el mail lo que provoca que lo mande a login)
            header("location: /Formulario/Login/Login.php");
        } else {
        
if (isset($_POST['submit'])) {//toma los datos del formulario registro para subirlo a la base de datos y tirar los mensajes de error
    if (empty($name)) {
        echo "<p class='error'>* Agregue su Nombre</p>";//mensaje de error si el nombre esta vacio
    }
    if (empty($age)) {
        echo "<p class='error'>* Agregue su Edad</p>";//mensaje de error si la edad esta vacio
    }
    if (empty($email)) {
        echo "<p class='error'>* Agregue su Email</p>";//mensaje de error si el mail esta vacio
    }
    if (empty($tel)) {
        echo "<p class='error'>* Agregue su Telefono</p>";//mensaje de error si el telefono esta vacio
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//error si el mail es incorrecto si esta mal escrito
        echo "<p class='error'>* Su correo es incorrecto</p>";
    } else{
    if (strlen($_POST['name']) > 1 && strlen($_POST['age']) > 1 && strlen($_POST['email']) > 1 && strlen($_POST['tel']) > 1) {//verifica que los campos no esten vacios
        //Imagen
        $Nombre_Imagen=$_FILES['Imagen'] ['name'];//se obtiene el nombre de la imagen subida
       // $Tipo_Imagen=$_FILES['Imagen'] ['type']; //se puede obtener el tipo de imagen
        //$Tamaño_Imagen=$_FILES['Imagen'] ['size'];//se puede obtener el tamaño original de la imagen
        $Carpeta_Destino='./intranet/uploads/';//sirve para guardar las imagenes en intranet
        move_uploaded_file($_FILES['Imagen'] ['tmp_name'], $Carpeta_Destino.$Nombre_Imagen);//mueve la imagen subida a intranet
        $Pedido= "INSERT INTO `base de datos alumnos`(`Nombre`, `Edad`, `Email`, `Telefono`, `Fecha de registro`, `Imagen`, `ID_Login`) VALUES ('$name','$age','$email','$tel','$FechaRegistro','$Carpeta_Destino$Nombre_Imagen',".$_SESSION['IDLogin'].")"; //Inserta todos los datos a la base de datos
        $Resultado = mysqli_query($conex, $Pedido);//verifica que los datos se hayan enviado correctamente en el if de abajo
        if ($Resultado) {
          echo "<script>otraPagina();</script>";//mensaje de que se inscribio correctamente
        };
    }}}
}
?>
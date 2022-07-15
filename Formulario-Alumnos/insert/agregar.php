<!DOCTYPE html>
<html>

<head>
    <title>Agregar nuevo</title>
    <link rel="stylesheet" href="/Formulario-Alumnos/style.css">

<?php
$conexion= mysqli_connect('localhost','root','','tp-php');//conexion a la base de datos
?>
</head>
<body>
<?php
    if (isset($_POST['submitUp'])) {//toma los datos del formulario y lo almaceno en variables
        $Id = $_POST['ID'];//Almaceno el ID en una variable
        $Nombre = $_POST['Nombre'];//Almaceno el nombre en una variable
        $Edad = $_POST['Edad'];//Almaceno la edad en una variable
        $Email = $_POST['Email'];//Almaceno el mail en una variable
        $Telefono = $_POST['Telefono'];//Almaceno el telefono en una variable
        $Fecha = date("y/m/d");//Almaceno la fecha en una variable
        $IDLogin = $_POST['ID_Login'];//Almaceno el ID_Login en una variable
        $Contraseña = $_POST['Contraseña'];
    }
//
        $SQL= "SELECT * FROM `base de datos alumnos` WHERE 1 order by id desc";//se selecciona de la base de datos el ultimo id para incrementarlo y hacerlo auto incremental
        $SQLogin= "SELECT * FROM `login-alumnos` WHERE 1 order by IDLogin desc";//se selecciona de la base de datos el ultimo id para incrementarlo y hacerlo auto incremental
        $Resultado=mysqli_query($conexion,$SQL);//se hace la conexion 
        $mostrar=mysqli_fetch_array($Resultado);//se obtiene el ultimo id para hacerlo auto incremental
        ?>
    <form action="" method="post" enctype="multipart/form-data"><!-- Formulario que lleva al proceso de insert cuando se oprime el boton -->
        <input type="hidden" value="<?php echo $mostrar['ID']+1 ?>" name="ID" ><!-- id oculto se asigna automaticamente de manera auto incremental por el +1 -->
        <input type="hidden" value="<?php echo $mostrar['ID_Login']+1 ?>" name="ID_Login" ><!-- id oculto se asigna automaticamente de manera auto incremental por el +1 -->
        <p>Nombre:<input type="text" name="Nombre" value="<?php
                                                        if (isset($Nombre)) echo "$Nombre" ?>" /></p><!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
            <p>Edad:<input type="number" min=6 name="Edad" value="<?php
                                                        if (isset($Edad)) echo "$Edad" ?>" /></p><!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
            <p>Email:<input type="text" name="Email" value="<?php
                                                        if (isset($Email)) echo "$Email" ?>"  /></p><!--El if  Deja escrito en el contenido cuando se recarga la pagina y al entrar a la pagina al ser una variable global -->
            <p>Telefono<input type="number" name="Telefono" value="<?php
                                                        if (isset($Telefono)) echo "$Telefono" ?>"  /></p><!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
            <p>Contraseña:<input type="password" name="Contraseña" value="<?php
                                                        if (isset($Contraseña)) echo "$Contraseña" ?>" /></p><!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
            <input type="file" name="Imagen" id="seleccionArchivos" accept="image/*"><!-- espacio donde se sube la imagen-->
        <br><br>
        <!-- La imagen que vamos a usar para previsualizar lo que el usuario selecciona -->
        <img id="imagenPrevisualizacion"><!-- muestra la imagen subida-->
        <!--<img src="/Formulario/intranet/uploads/Captura.PNG" alt="imagen">-->
        <script src="/formulario-alumnos/script.js"></script><!-- se une el script que hace que se muestre la imagen subida-->
        <br>
        <input type="submit" value="Agregar" name="submitUp"><!-- Boton que lleva al proceso de insert --> 
        <?php
         include ('Proceso_insert.php');
        ?>
    </table>
    </form>
    </body>
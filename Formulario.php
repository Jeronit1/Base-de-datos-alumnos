<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="" method="post">
            <p>Nombre:<input type="text" name="name" /></p>
            <p>Edad:<input type="text" name="age" /></p>
            <p>Email:<input type="text" name="email" /></p>
            <p>Telefono<input type="text" name="tel" /></p>
            <p><input type="submit" name="submit" value="Enviar" /></p>
        </form>
        <?php
        include("Server-Form.php");
        ?>
    </body>
</html>

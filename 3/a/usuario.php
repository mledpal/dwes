<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='es' lang='es'>

<html lang="es">

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta name="author" content="Miguel Ledesma Palacios">
    <meta name="description" content="Actividades del Tema 1 de DWES">        
      
    <title>DWES Tarea Tema 1</title></head>
<body>

    <?php

        $errores = 0;
        $texto_errores = "";

        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
        } else {
            $errores =+ 1;
            $texto_errores += "<br>Falta el nombre";
        }
        
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            $errores =+ 1;
            $texto_errores += "<br>Falta el email";
        }

        if (isset($_POST['consulta'])) {
            $consulta = $_POST['consulta'];
        } else {
            $errores =+ 1;
            $texto_errores += "<br>Falta la consulta";
        }
        
        if (isset($_POST['telefono'])) {
            $telefono=$_POST['telefono'];
        }

        if (isset($_POST['web'])) {
            $web=$_POST['web'];
        }        

        if($errores>0) {
            echo $texto_errores;
        }
    ?>

    <div class="bg-gray-500 p-10 m-10 shadow-xl rounded-full">

        <div class="grid grid-cols-5 m-5 p-5 bg-gray-100 shadow-xl text-center font-bold text-xl rounded-xl">

            <div>Nombre completo</div>        
            <div>E-Mail</div>
            <div>Consulta</div>
            <div>Teléfono</div>
            <div>Web</div>

        </div>

        <div class="grid grid-cols-5 m-5 p-5 bg-green-100 shadow-xl text-center rounded-xl">

            <div><?= $nombre; ?></div>        
            <div><?= $email; ?></div>
            <div><?= $consulta; ?></div>
            <div><?php  echo (isset($_POST['telefono']))  ? $telefono : "No facilitado";  ?></div>
            <div><?php  echo (isset($_POST['web']))  ? $web : "- - -";  ?></div>

        </div>

    </div>

    <script src="https://cdn.tailwindcss.com"></script>

</body>
</html>


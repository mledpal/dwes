<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='es' lang='es'>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <meta name="author" content="Miguel Ledesma Palacios">
        <meta name="description" content="Actividades del Tema 1 de DWES">        
        
        <title>DWES Tarea Tema 1</title>

        <!-- CSS 3-->
        <!-- <link rel='stylesheet' href="./css/styles.css" type="text/css"> -->

        <!-- TailWind CSS -->
        

    </head>
    <body class="font-sans m-5 bg-gray-200">

        <header class="p-5 m-10 bg-blue-300 rounded-2xl">
            <h1 class="p-5 text-center font-extrabold text-4xl">Desarrollo Web en Entorno Servidor</h1>
            <h2 class="p-5 text-center font-bold text-3xl">Tarea 1</h2>

        </header>
        

        <div class="mx-auto w-3/4">
            <nav class="flex container flex-wrap justify-center p-2 m-2">
                <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../../1">Actividad 1</a></span>
                <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../../2">Actividad 2</a></span>
                <span class="my-1 mx-2 bg-blue-300 h-30 rounded-2xl p-5 text-center text-blue-800">Actividad 3</span>
                <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../../4">Actividad 4</a></span>
                <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../../5">Actividad 5</a></span>                
            </nav>
        </div>

        <div class="mx-auto w-3/4">
            <nav class="flex container flex-wrap justify-center p-2 m-2">
                <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../a">Actividad 3a</a></span>
                <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../b">Volver</a></span>                
            </nav>
        </div>
        
        <div class="flex flex-col m-10 text-justify w-full mx-auto"> 

            <div class="p-5 place-self-center">
                <article>
                    <h3 class="p-5 font-bold text-2xl text-center">Actividad 3.b</h3>
                    <p class="indent-10 text-lg font-bold">Generador de CV: el usuario introducirá en un formulario sus datos personales, su experiencia profesional, su formación, dominio de idiomas y otros datos que sean de interés. Los datos de dicho formulario se recogerán, se validarán y se mostrarán en cv.php.</p>
                    <br>

                    <div id="respuesta3b">
                        <p class="text-base  mx-auto w-4/5">
                            
                        </p>
                    </div>

                </article>            
            </div>


            <div class="p-5 m-5 place-self-center border-4 border-solid border-gray-600 w-3/4">
               
               <!-- 
                    ---------------------------------------------------------------------
                    Código para mostrar y evaluar los datos introducidos en el formulario
                    ---------------------------------------------------------------------
               -->
               <?php

                    // Inicializamos las variables

                    $errores=0;
                    $textoError = "";
                    $listaIdiomas = "";


                    // Verificamos que cada campo esté correcto y lo asignamos a las variables
                    // para mostrarlas al final.

                    if (isset($_POST["nombre"])) {                        
                        $nombre=$_POST["nombre"];                        
                    } else {
                        $errores++;
                        $textoError = $textoError."Falta el campo nombre<br>";
                    }


                    if (isset($_POST["apellidos"])) {                        
                        $apellidos=$_POST["apellidos"];                        
                    } else {
                        $errores++;
                        $textoError = $textoError."Falta el campo Apellidos<br>";
                    }



                    if (isset($_POST["fecnacimiento"])) {
                        $fecNacimiento=$_POST["fecnacimiento"];                        
                    } else {
                        $errores++;
                        $textoError = $textoError."Falta la fecha de Nacimiento<br>";
                    }



                    if (isset($_POST["direccion"])) {
                        $direccion=$_POST["direccion"];                        
                    } else {
                        $errores++;
                        $textoError = $textoError."Falta la dirección.<br>";
                    }


                    if (isset($_POST["email"])) {
                        
                        $pattern='/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/'; // Pattern para validar emails de ihateregex.com
                        
                        if (preg_match($pattern, $_POST["email"])) {
                            $email=$_POST["email"];
                        } else {
                            $errores++;
                            $textoError = $textoError."El formato del email es incorrecto.<br>";    
                        }

                    } else {
                        $errores++;
                        $textoError = $textoError."Falta el e-mail<br>";
                    }



                    if (isset($_POST["telefono"])) {                        
                        $telefono=$_POST["telefono"];                        
                    } else {
                        $errores++;
                        $textoError = $textoError."Falta el teléfono de contacto<br>";
                    }



                    if (isset($_POST["idiomas"]) && !empty($_POST["idiomas"])) { 
                        $idiomas=$_POST["idiomas"];
                        for ($i=0; $i < sizeof($idiomas) ; $i++) {                                                         
                            $listaIdiomas = $listaIdiomas.ucwords($idiomas[$i])." "; 
                        }              
                    } else {
                        $errores++;                        
                        $textoError = $textoError . "Debe elegir al menos un idioma.<br>";
                        
                    }

                    if (isset($_POST["experiencia"])) {
                        $experiencia=$_POST["experiencia"];                        
                    } else {
                        $errores++;
                        $textoError = $textoError."Falta añadir un resumen de la experiencia laboral.<br>";
                    }

                    

                    // Si hay errores, mostramos los fallos.
                    // Si no los hay, mostramos las variables.
                    
                    if ($errores > 0 ) {
                        echo "Hubo errores al procesar los datos : <br>" . $textoError; 
                        echo "<a class='text-xxl font-bold text-blue-500' href='../b'>Volver</a>";

                    } else {
                        
                        echo "Nombre : ".$nombre."<br>";
                        echo "Apellidos : ".$apellidos."<br>";
                        echo "Fecha de Nacimiento : ".$fecNacimiento."<br>";
                        echo "E-Mail : ".$email."<br>";
                        echo "Teléfono : ".$telefono."<br>";
                        echo "Dirección : ".$direccion."<br>";
                        echo "Idiomas : ".$listaIdiomas."<br>";
                        echo "Experiencia : " .$experiencia."<br>";

                    }
               ?>

                
            </div>


            
        </div>
        
        <footer class="bg-blue-300 rounded-lg">
            <div class="font-bold text-2xl text-center p-5">
                Miguel Ledesma Palacios. 2º DAW-D <span class="text-sm italic">I.E.S. Trassierra</span>
            </div>
        </footer>

        <script src="https://cdn.tailwindcss.com"></script>

    </body>
</html>
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
                <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900""><a href="../../1">Actividad 1</a></span>
                <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../../2">Actividad 2</a></span>
                <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../../3">Actividad 3</a></span>
                <span class="my-1 mx-2 bg-blue-300 h-30 rounded-2xl p-5 text-center text-blue-800">Actividad 4</span>
                <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../../5">Actividad 5</a></span>       
                
                
                <div class="mx-auto w-3/4">
                    <nav class="flex container flex-wrap justify-center p-2 m-2">
                        <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../a">Actividad 4a</a></span>
                        <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../b">Actividad 4b</a></span>
                        <span class="my-1 mx-2 bg-blue-300 h-30 rounded-2xl p-5 text-center text-blue-800">Actividad 4c</span>                                    
                    </nav>
                </div>
            </nav>
        </div>

        <div class="p-5 place-self-center">
            <h3 class="p-5 font-bold text-2xl text-center">Actividad 4.c</h3>
            <p class="text-center indent-10 text-lg font-bold">
                Crea las siguientes aplicaciones web con XHTML, CSS (o Tailwind CSS) y PHP 8:<br>
                Informe de salud personal: el usuario introducirá su sexo, edad, altura y peso y al pulsar en Calcular se validarán los datos y se generará un informe de salud con el IMC y el metabolismo basal según la fórmula de la OMS.
            </p>
        </div>
        


        <div class="mx-auto mt-15 mb-20 w-11/12 ">
            <div class="mx-auto w-3/5 bg-green-200 p-5 rounded-t-xl border-2 border-solid border-black">
                <form method="GET" action="./index.php">
                    
                    <label class="m-2" name="lblgenero" for="genero">Sexo</label>
                    
                    <select name="genero" class="m-2 p-2">                        
                        <option value=5>Masculino</option>
                        <option value=-161>Femenino</option>
                    </select>   

                    <label class="m-2" name="lbledad" for="edad">Edad</label>
                    <input class="m-2 p-2" type="number" name="edad" min="0" max="100" maxlength="3" width="5" required>
                    
                    <label class="m-2" name="lblpeso" for="peso">Peso</label>
                    <input class="m-2 p-2" type="number" name="peso" maxlength="6" width="8" placeholder="Kg" required>

                    <label class="m-2" name="lblaltura" for="altura">Altura</label>
                    <input class="m-2 p-2" type="number" name="altura" placeholder="cm" required>

                    <input type="submit" class=" mx-5 px-5 py-2 bg-green-700 rounded-lg">
                </form>
            </div>          
            <div class="text-center font-bold text-xl mx-auto w-3/5 bg-green-200 p-5 rounded-b-xl border-2 border-solid border-black">
                <?php 
                    if (isset($_GET["altura"]) && isset($_GET["peso"]) && isset($_GET["edad"]) && isset($_GET["genero"])) {

                        $errores = 0;
                        $textoErrores = "";

                        if (is_numeric($_GET["peso"]) && $_GET["peso"] > 0) {
                            $peso = $_GET["peso"];
                        } else {
                            $errores++;
                            $textoErrores = $textoErrores. "<br> Debe introducir un dato de peso correcto.";
                        }

                        if (is_numeric($_GET["altura"]) && $_GET["altura"] > 0 ) {
                            $altura = $_GET["altura"];
                        }else {
                            $errores++;
                            $textoErrores = $textoErrores. "<br> Debe introducir un dato de altura correcto.";
                        }
                        
                        if (is_numeric($_GET["edad"]) && $_GET["edad"] > 0 && $_GET["edad"] < 150) {
                            $edad = $_GET["edad"];
                        }else {
                            $errores++;
                            $textoErrores = $textoErrores. "<br> Debe introducir un dato de edad correcto.";
                        }
                        
                        $genero = $_GET["genero"];


                        if($errores>0) {

                            echo "Hubo errores : <br>";
                            echo $textoErrores;

                        } else {

                            $imc = $peso / ($altura * $altura);
                            
                            $tmb = (10.0 * $peso) + (6.25 * $altura) + (5.0 * $edad) + $genero;

                            echo "Tasa Metabólica Basal : ".$tmb."<br>";
                            echo "I.M.C. : ".$imc."<br>";
                        }
                        
                    } else {
                        echo "Introduzca los datos y pulse en Enviar";
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
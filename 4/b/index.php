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
                <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../../3">Actividad 3</a></span>
                <span class="my-1 mx-2 bg-blue-300 h-30 rounded-2xl p-5 text-center text-blue-800">Actividad 4</span>
                <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../../5">Actividad 5</a></span>       
                
                
                <div class="mx-auto w-3/4">
                    <nav class="flex container flex-wrap justify-center p-2 m-2">
                        <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../a">Actividad 4a</a></span>
                        <span class="my-1 mx-2 bg-blue-300 h-30 rounded-2xl p-5 text-center text-blue-800">Actividad 4b</span>
                        <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../c/">Actividad 4c</a></span>                                    
                    </nav>
                </div>
            </nav>
        </div>

        <div class="p-5 place-self-center">
            <h3 class="p-5 font-bold text-2xl text-center">Actividad 4.b</h3>
            <p class="text-center indent-10 text-lg font-bold">
                Crea las siguientes aplicaciones web con XHTML, CSS (o Tailwind CSS) y PHP 8:<br>
                Área y perímetro de un cuadrado: el usuario introducirá el lado de un cuadrado y al pulsar en Enviar se validarán los datos y se calculará su área y perímetro.
            </p>
        </div>
        


        <div class="flex mx-auto mt-15 mb-20 grid grid-cols-2 w-11/12">
            <div class="mx-auto w-11/15 bg-green-200 p-5 rounded-xl">
                <form method="GET" action="./index.php">
                    <label class="m-2" for="lado">Lado del Cuadrado<input class="rounded m-2 p-2" type="text" id="lado" name="lado" placeholder="cm"></label>
                    <input type="submit" class=" mx-5 px-5 py-2 bg-green-700 rounded-lg">
                </form>
            </div>          
            <div class="mx-auto w-11/15 ">
                <?php 
                    if (isset($_GET["lado"])) {

                        $perimetro = $_GET["lado"] * 4;
                        $area = $_GET["lado"] * $_GET["lado"];

                        echo "El perímetro es : ".$perimetro." cm.<br>";
                        echo "El área es : ".$area." cm<sup>2</sup><br>";
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
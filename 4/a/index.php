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
                        <span class="my-1 mx-2 bg-blue-300 h-30 rounded-2xl p-5 text-center text-blue-800"><a href="./a">Actividad 4a</a></span>
                        <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../b/">Actividad 4b</a></span>
                        <span class="my-1 mx-2 bg-gray-300 h-30 rounded-2xl p-5 text-center text-blue-800 hover:text-blue-100 hover:bg-blue-900"><a href="../c/">Actividad 4c</a></span>                                 
                    </nav>
                </div>
            </nav>
        </div>

        <div class="p-5 place-self-center">
            <h3 class="p-5 font-bold text-2xl text-center">Actividad 4.a</h3>
            <p class="text-center indent-10 text-lg font-bold">
                Crea las siguientes aplicaciones web con XHTML, CSS (o Tailwind CSS) y PHP 8:<br>
                Piedra, papel, tijeras, lagarto o Spock: el usuario elegirá una de esas cinco opciones, recibirá una respuesta al azar y comprobará (reglas) si ha ganado, perdido o empatado contra la máquina.
            </p>
        </div>
        


        <div class="mt-15 mb-20 grid grid-cols-2 w-11/12 justify-center justify-items-center">
            <div name="normas">
                <div class="mx-auto w-3/4 border-4 border-gray-800 border-solid rounded-t-lg bg-green-500 border-b-0 drop-shadow-lg">
                    <h1 class="p-5 text-2xl font-bold text-center">Piedra, papel, tijeras, lagarto o Spock</h1>
                </div>
                <div class="mx-auto w-3/4 border-4 border-gray-800 border-solid rounded-b-lg bg-green-200 border-t-0">
                    <h2 class="p-2 text-lg font-bold text-center">Normas</h2>
                    <div>
                        <ul class="text-center my-3 font-mono">
                            <li>Las tijeras cortan el papel</li>
                            <li>El papel cubre la piedra.</li>
                            <li>La piedra aplasta el lagarto.</li>
                            <li>El lagarto envenena a Spock.</li>
                            <li>Spock aplasta las tijeras.</li>
                            <li>Las tijeras decapitan el lagarto.</li>
                            <li>El lagarto se come el papel.</li>
                            <li>El papel refuta a Spock.</li>
                            <li>Spock vaporiza la piedra.</li>
                            <li>La piedra aplasta a las tijeras.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div name="juego" class="w-3/4 border-4 border-gray-800 border-solid rounded w-4/3">
                <form name="eleccion" action="." method="get">
                    <fieldset>
                        <legend class="p-5 mx-auto text-2xl w-full text-center bg-green-500 font-bold">Haz tu elección haciendo click sobre la imagen</legend>
                        <div class="grid grid-cols-5">                        
                            <div class = "m-2 p-2 w-3/5"><button type="submit" name="eleccion" value="piedra"><img src="./img/piedra.png" alt="piedra"></img></button></div>
                            <div class = "m-2 p-2 w-3/5"><button type="submit" name="eleccion" value="papel"><img src="./img/papel.png" alt="papel"></img></button></div>                            
                            <div class = "m-2 p-2 w-3/5"><button type="submit" name="eleccion" value="tijeras"><img src="./img/tijeras.png" alt="tijeras"></img></button></div>
                            <div class = "m-2 p-2 w-3/5"><button type="submit" name="eleccion" value="lagarto"><img src="./img/lagarto.png" alt="lagarto"></img></button></div>
                            <div class = "m-2 p-2 w-3/5"><button type="submit" name="eleccion" value="spock"><img src="./img/spock.png" alt="spock"></img></button></div>  
                        </div>
                    </fieldset>
                </form>

                <div class="w-full grid grid-cols-2">
                    <div class="text-center">
                        <?php
                            $eleccion = $_GET['eleccion'];

                            if(isset($_GET["eleccion"])) {

                                echo "Tu elección ha sido :  ";
                            }
                        ?>

                        <div <?php if(!isset($_GET["eleccion"])) echo "hidden"; ?>> <img class="w-1/5 mx-auto" src="./img/<?=$_GET['eleccion']; ?>.png"></div>

                    </div>
                    <div class="text-center">
                        <?php

                            if(isset($_GET["eleccion"])) {

                                $cartasJuego=["piedra", "papel", "tijeras", "lagarto", "spock"];
                                $tiradaMaquina=rand(0,4);
                                $cartaAleatoria = $cartasJuego[$tiradaMaquina];
                                echo "La máquina eligió ";
                            }
                        ?>
                        <div <?php if(!isset($_GET["eleccion"])) echo "hidden"; ?>  > <img class="w-1/5 mx-auto" src="./img/<?=$cartaAleatoria; ?>.png"></div>
                    </div>


                </div>

                <div class="text-center p-5 m-10 text-3xl">
                        <?php
                            if(isset($_GET["eleccion"])) {
                                if($eleccion == $cartaAleatoria) { echo "EMPATE"; }         
                                else if($eleccion == "tijeras" && $cartaAleatoria == "papel") { echo "TU GANAS"; }      
                                else if($eleccion == "papel" && $cartaAleatoria == "piedra") { echo "TU GANAS"; }    
                                else if($eleccion == "piedra" && $cartaAleatoria == "lagarto") { echo "TU GANAS"; }        
                                else if($eleccion == "lagarto" && $cartaAleatoria == "spock") { echo "TU GANAS"; }  
                                else if($eleccion == "spock" && $cartaAleatoria == "tijeras") { echo "TU GANAS"; }          
                                else if($eleccion == "tijeras" && $cartaAleatoria == "lagarto") { echo "TU GANAS"; }      
                                else if($eleccion == "lagarto" && $cartaAleatoria == "papel") { echo "TU GANAS"; }      
                                else if($eleccion == "papel" && $cartaAleatoria == "spock") { echo "TU GANAS"; }      
                                else if($eleccion == "spock" && $cartaAleatoria == "piedra") { echo "TU GANAS"; }      
                                else if($eleccion == "piedra" && $cartaAleatoria == "tijeras") { echo "TU GANAS"; }      
                                else echo "TU PIERDES";
                            }
                        ?>

                    </div>

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
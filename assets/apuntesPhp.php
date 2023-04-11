<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/php-icon.png">
    <title>Apuntes PHP</title>
    <link rel="stylesheet" href="./scss/main.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> <!-- Bootstrap -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body class="bodyPhp">
<!-- Inicia Nav -->
<nav class="navbar navbar-expand-lg sticky-top">
    <a class="navbar-brand" href="index.html"><img class="logo" src="./img/logo-no-background.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navListDiv collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="./apuntesHtml.html">HTML</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./apuntesCss.html">CSS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./apuntesJs.html">JAVASCRIPT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./apuntesReact.html">REACTJS</a>
            </li>
            <li class="nav-item">
                <a class="activeNav nav-link" href="./apuntesPhp.php">PHP</a>
            </li>
        </ul>
        <form class="navForm form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btnNav btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>
<!-- Termina Nav -->

    <div class="containerTitulo">
        <h1>Apuntes</h1>
        <a href="https://www.php.net/" target="_blank"><img src="./img/php-logo.png" class="logoTitulo" alt="PhpLogo"></a>
    </div>
    <h6 class="atencion">Emanuel Vega</h6>


    <div class="containerGeneral">
        <p class="titulo">¿Qué es Php?</p>
        <p class="generalUno">
        <span class="importante">PHP</span> (acrónimo recursivo de PHP: Hypertext Preprocessor) es un <span class="importante">lenguaje de código abierto</span> muy popular especialmente adecuado <span class="importante">para el desarrollo web</span> y que puede ser <span class="importante">incrustado en HTML</span>.<br></p>
        <p class="titulo">Cómo empiezo a usar Php?</p>
        <p class="generalUno">
            Para usar <span class="importante">PHP</span> necesitamos un <span class="importante">servidor virtual local</span> que simula el funcionamiento real en internet.<br>
            Yo por mi parte uso <span class="importante">XAMPP</span>.
        </p>
        <p class="generalDos">
            Para crear un archivo php usando XAMPP tenemos que:
        </p>
        <p class="generalTres">
            <i id="circle" class="fa-solid fa-circle"></i> Abrir XAMPP y poner <span class="importante">Start</span> en la zona de <span class="importante">Apache</span>.<br>
            <i id="circle" class="fa-solid fa-circle"></i> Dirigirse a la carpeta de <span class="importante">htdocs</span> y crear una carpeta donde irán los archivos de la página. (Suele estar en <span class="importante">C:\xampp\htdocs</span>)<br>
            <i id="circle" class="fa-solid fa-circle"></i> Dentro de la carpeta crear un archivo <span class="importante">index.php</span>. No olvidar que tiene que ser <span class="importante">.php</span> para funcionar.<br>
            <i id="circle" class="fa-solid fa-circle"></i> Una vez dentro del archivo y habiendo creado algo dentro, nos dirigimos a nuestro navegador de internet y nos dirigimos a <span class="importante">localhost</span>. Ahí dentro aparecerá nuestra carpeta de php, la clickeamos y ya debería estar simulando la web.
        </p>
    </div>

    <div class="containerGeneral">
        <p class="generalUno">Otras cosas a tener en cuenta:</p>
        <p class="generalTres"><i id="circle" class="fa-solid fa-circle"></i> Siempre y cuando querramos usar código PHP tendremos que usar las etiquetas de apertura <span class="importante">&#60?php</span> y de cierre <span class="importante">?&#62</span></p>
    </div>


    <hr class="dashed separacion">


    <!-- CREAR Y MOSTRAR UNA VARIABLE: -->
    <a id="variablesPhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/language.variables.variable.php" target="_blank">Crear y mostrar una variable:</a>

    <h3 class="descripcion">
        Para crear una variable se pone <span class="importante">$</span> seguido del <span class="importante">nombre</span> de la variable.<br>
        Para mostrar algo (en este caso una variable) se pone <span class="dato">echo</span>.<br>
        Una variable puede ser <span class="importante">global</span> (si está por fuera de una función) o <span class="importante">local</span> (Si esta declarada dentro de una función. De ser así solo se podría utilizar dentro de esa misma función).<br>
        En este código podemos ver varios ejemplos:
    </h3>

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <div class="tabUno">
            <span class="variable">$variableUno</span>=<span class="número">1</span>;<br>
            <span class="variable">$variableDos</span>=<span class="comentario">"Emanuel"</span>;<br>
            <span class="dato">echo</span> <span class="variable">$variableUno;</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo</span> <span class="variable">$variableDos;</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo</span> <span class="comentario">"La Variable 1 es numérica: "</span> . <span class="variable">$variableUno</span> .<span class="comentario"> ". La variable 2 es un string "</span> . <span class="variable">$variableDos</span>;<br>
        </div>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>

    <p class="phpCode">
        <?php
        $variableUno = 1;
        $variableDos = "Emanuel";
        echo $variableUno;
        echo "<br>";
        echo $variableDos;
        echo "<br>";
        echo "La Variable 1 es numérica: " . $variableUno . ". La variable 2 es un string " . $variableDos;
        ?>
    </p>

    <h3 class="subtitulo">Variable de variables:</h3>
    <h3 class="descripcion">
        Con <span class="importante">php</span> podemos usar una variable para especificar el nombre de otra. Eso significa que el valor de una variable trata el valor de otra como su nombre.
    </h3>
    <h4 class="codigo">
    <span class="codCol">&#60?php</span><br>
        <div class="tabUno">
            <span class="variable">$a</span> = <span class="comentario">"hola"</span>;<br>
            <span class="variable">$hola</span> = <span class="comentario">"como estas?"</span>;<br>
            <span class="dato">echo</span> <span class="variable">$a;</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo</span> <span class="variable">$$a;</span><br>
        </div>
        <span class="codCol">?&#62</span>
    </h4>
    <h5 class="resultado">El resultado sería este:</h5>
    <p class="phpCode">
        <?php
        $a = "hola";
        $hola = "como estas?";
        echo $a;
        echo "<br>";
        echo $$a;
        ?>
    </p>


    <hr class="dashed separacion">


<!-- CREAR Y MOSTRAR UNA CONSTANTE: -->
<a id="constantesPhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/language.constants.php" target="_blank">Crear y mostrar una constante:</a>
<h3 class="descripcion">
    Las constantes son parecidas a las variables solo que no pueden ser modificadas.<br>
    Para crear una constante se usa la función <span class="importante">define()</span> la cual tiene 3 parámetros:<br>
    <span class="importante">name</span> que le da un nombre a la constante.<br>
    <span class="importante">value</span> que le da un valor a la constante.<br>
    <span class="importante">case-insensitive</span> que especifica la constante distingue o no mayúsculas (Es false por default).
</h3>
<h4 class="codigo">
<span class="codCol">&#60?php</span><br>
    <div class="tabUno">
    <span class="dato">define</span> <span class="amarillo">(</span><span class="comentario">"MSG"</span>, <span class="comentario">"Hola! Soy una constante."</span><span class="amarillo">)</span>;<br>
    <span class="dato">echo</span> MSG;<br>
</div>
    <span class="codCol">?&#62</span>
</h4>
<h5 class="resultado">El resultado sería este:</h5>
<p class="phpCode">
    <?php
    define("MSG", "Hola! Soy una constante.");
    echo MSG;
    ?>
</p>

    <hr class="dashed separacion">


    <!-- ARRAYS: -->
    <a id="arraysPhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/language.types.array.php" target="_blank">Arrays:</a>

    <h3 class="descripcion">Un array puede ser creado con el constructor del lenguaje <span class="importante">array()</span>. Éste toma cualquier número de parejas clave.<br>
        Tener en cuenta que el <span class="importante">índice del array comienza en 0</span>.<br>
        Es decir, el <span class="importante">primer</span> elemento del array es <span class="importante">0</span>.<br>
        El del <span class="importante">último</span> elemento es igual al valor de la <span class="importante">propiedad length del array restándole 1</span>.<br>
        Por ejemplo:
    </h3>

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <div class="tabUno">
            <span class="variable">$arrayUno</span> = <span class="dato">array</span><span class="amarillo">(</span><span class="comentario">"Manzana"</span>,<span class="comentario">"Banana"</span>,<span class="comentario">"Uva"</span>,<span class="comentario">"Naranja"</span><span class="amarillo">)</span>;<br>
            <span class="cond">if</span> <span class="amarillo">(</span><span class="variable">$arrayUno</span><span class="violeta">[</span><span class="número">1</span><span class="violeta">]</span> == <span class="comentario">"Banana"</span><span class="amarillo">) {</span><br>
        </div>
        <div class="tabDos">
            <span class="dato">echo</span> <span class="comentario">"Es correcto"</span>;<br>
        </div>
        <div class="tabUno">
            </span><span class="amarillo">}</span> <span class="cond">else</span> <span class="amarillo">{</span><br>
        </div>
        <div class="tabDos">
            <span class="dato">echo</span> <span class="comentario">"Es incorrecto"</span>;<br>
        </div>
        <div class="tabUno">
            <span class="amarillo">}</span><br>
        </div>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>

    <p class="phpCode">
        <?php
        $arrayUno = array("Manzana", "Banana", "Uva", "Naranja");
        if ($arrayUno[1] == "Banana") {
            echo "Es correcto";
        } else {
            echo "Es incorrecto";
        }
        ?>
    </p>

    <!-- Hacer un Array con claves -->

    <h3 class="descripcion">Forma de hacer un <span class="importante">array</span> con <span class="importante">claves</span> o <span class="importante">nombres</span>:
    </h3>

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <div class="tabUno">
            <span class="variable">$arrayDos</span> = <span class="dato">array</span><span class="amarillo">(</span><span class="comentario">"clave1"</span> => <span class="comentario">"Manzana"</span>, <span class="comentario">"clave2"</span> => <span class="comentario">"Banana"</span><span class="amarillo">)</span>;<br>
            <span class="dato">echo</span> <span class="variable">$arrayDos</span><span class="amarillo">[</span><span class="comentario">'clave2'</span><span class="amarillo">]</span>;<br>
        </div>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>

    <p class="phpCode">
        <?php
        $arrayDos = array("clave1" => "Manzana", "clave2" => "Banana");
        echo $arrayDos['clave2'];
        ?>
    </p>

    <!-- Combinando métodos -->

    <h3 class="descripcion">Estos 2 métodos <span class="importante">se pueden combinar</span></h3>

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <div class="tabUno">
            <span class="variable">$arrayTres</span> = <span class="dato">array</span><span class="amarillo">(</span><span class="comentario">"Manzana"</span>, <span class="comentario">"Banana"</span>, <span class="comentario">"frutaChica"</span> => <span class="comentario">"Uva"</span>, <span class="comentario">"frutaVendida"</span> => <span class="comentario">"Naranja"</span>, <span class="comentario">"Tomate"</span><span class="amarillo">)</span>;<br>
            <span class="dato">echo</span> <span class="variable">$arrayTres</span><span class="amarillo">[</span><span class="numero">2</span><span class="amarillo">]</span>; <span class="colComentario">/* Manzana es 1, Banana 2, Tomate 3. */</span><br>
            <span class="dato">echo</span> <span class="variable">$arrayTres</span><span class="amarillo">[</span><span class="comentario">'frutaChica'</span><span class="amarillo">]</span>; <span class="colComentario">/* frutaChica es Uva, frutaVendida es Naranja */</span><br>
        </div>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>

    <p class="phpCode">
        <?php
        $arrayTres = array("Manzana", "Banana", "frutaChica" => "Uva", "frutaVendida" => "Naranja", "Tomate");
        echo $arrayTres[2];
        echo $arrayTres['frutaChica'];
        ?>
    </p>

    <h3 class="subtitulo pt-3">Multi-Dimensional Arrays</h3>
    <h3 class="descripcion">
        Un array multidimensional es un array que contiene uno o más arrays
    </h3>
    <h4 class="codigo">
    <span class="codCol">&#60?php</span>
    <div class="tabUno">
        <span class="variable">$arrayTres</span> = <span class="dato">array</span><span class="amarillo">(</span><br>
    </div>
    <div class="tabDos">
        <span class="comentario">'online'</span> => <span class="dato">array</span><span class="segundoPar">(</span><span class="comentario">'David'</span>, <span class="comentario">'Amanda'</span><span class="segundoPar">)</span>,<br>
        <span class="comentario">'offline'</span> => <span class="dato">array</span><span class="segundoPar">(</span><span class="comentario">'Jairo'</span>, <span class="comentario">'Roberto'</span>, <span class="comentario">'Yaco'</span><span class="segundoPar">)</span>,<br>
        <span class="comentario">'away'</span> => <span class="dato">array</span><span class="segundoPar">(</span><span class="comentario">'Carlos'</span>, <span class="comentario">'Mateo'</span><span class="segundoPar">)</span>,
    </div>
    <div class="tabUno">
        <span class="amarillo">)</span>;<br><br>
        <span class="dato">echo</span> <span class="variable">$personas</span><span class="amarillo">[</span><span class="comentario">'online'</span><span class="amarillo">][</span><span class="numero">0</span><span class="amarillo">]</span>;<br>
        <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
        <span class="dato">echo</span> <span class="variable">$personas</span><span class="amarillo">[</span><span class="comentario">'offline'</span><span class="amarillo">][</span><span class="numero">2</span><span class="amarillo">]</span>;
    </div>
    <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>
    <p class="phpCode">
        <?php
        $personas = array(
            'online' => array('David', 'Amanda'),
            'offline' => array('Jairo', 'Roberto', 'Yaco'),
            'away' => array('Carlos', 'Mateo')
        );
        echo $personas['online'][0];
        echo "<br>";
        echo $personas['offline'][2];
        ?>
    </p>



    <hr class="dashed separacion">


    <!-- CICLOS: -->
    <a id="ciclosPhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/control-structures.if.php" target="_blank">Ciclos:</a>

    <h3 class="descripcion">Un ciclo es una tarea que se realiza las veces indicadas hasta que la condición que la produce ya no se cumpla.</h3>

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <div class="tabUno"><span class="variable">$edad</span> = <span class="numero">18</span>;<br></div>
        <div class="tabDos"><span class="cond"> if</span> <span class="amarillo">(</span><span class="variable">$edad</span> = <span class="numero">18</span><span class="amarillo">) {</span><br></div>
        <div class="tabTres"><span class="dato">echo</span> <span class="comentario">"Somos mayores de edad."</span>;<br></div>
        <div class="tabDos"><span class="amarillo">}</span> <span class="cond">else</span> <span class="amarillo">{</span> <span class="colComentario">//Se puede poner <span class="importante">elseif</span> tambien para agregar mas y la ultima siempre es else</span><br></div>
        <div class="tabTres"><span class="dato">echo</span> <span class="comentario">"Somos menores de edad."</span>;<br></div>
        <div class="tabDos"><span class="amarillo">}</span><br></div>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>

    <p class="phpCode">
        <?php
        $edad = 18;
        if ($edad >= 18) {
            echo "Somos mayores de edad.";
        } else {
            echo "Somos menores de edad.";
        }
        ?>
    </p>


    <hr class="dashed separacion">


    <!-- SWITCH: -->
    <a id="switchPhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/control-structures.switch.php" target="_blank">Switch:</a>

    <h3 class="descripcion">La sentencia <span class="importante">switch</span> es <span class="importante">similar a</span> una serie de sentencias <span class="importante">IF</span> en la misma expresión. En muchas ocasiones, es posible que se quiera <span class="importante">comparar la misma variable</span> (o expresión) con muchos <span class="importante">valores diferentes</span>, y <span class="importante">ejecutar una parte de código distinta dependiendo</span> de a que <span class="importante">valor</span> es igual. Para esto es exactamente la expresión switch.</h3>

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <div class="tabUno"><span class="variable">$opc</span> = <span class="numero">2</span>;<br></div>
        <div class="tabDos"><span class="cond">switch</span> <span class="amarillo">(</span><span class="variable">$opc</span><span class="amarillo">) {</span><br></div>
        <div class="tabTres"><span class="cond">case</span> <span class="numero">2</span>: <span class="colComentario">//Si la variable vale 2 entonces..</span><br></div>
        <div class="tabCuatro"><span class="dato">echo</span> <span class="comentario">"La variable vale 2."</span>;<br>
            <span class="cond">break</span>;<br>
        </div>
        <div class="tabTres"><span class="cond">case</span> <span class="numero">3</span>: <span class="colComentario">//Si la variable vale 3 entonces..</span><br></div>
        <div class="tabCuatro"><span class="dato">echo</span> <span class="comentario">"La variable vale 3."</span>;<br></div>
        <div class="tabTres"><span class="cond">case</span> <span class="numero">4</span>: <span class="colComentario">//Si la variable vale 4 o 5 entonces.. (SE PUEDE PONER MAS DE UN CASO POR ACCION.)</span><br>
            <span class="cond">case</span> <span class="numero">5</span>:<br>
        </div>
        <div class="tabCuatro"><span class="dato">echo</span> <span class="comentario">"La variable vale 4 o 5."</span>;<br>
            <span class="cond">break</span>;<br>
        </div>
        <div class="tabTres"><span class="cond">default</span>: <span class="colComentario">//En caso que no se cumpla con ninguna condición</span><br></div>
        <div class="tabCuatro"><span class="dato">echo</span> <span class="comentario">"La variable es incorrecta."</span>;<br>
            <span class="cond">break</span>;<br>
        </div>
        <div class="tabTres"><span class="amarillo">}</span><br></div>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>
    <p class="phpCode">
        <?php
        $opc = 2;
        switch ($opc) {
            case 2:
                echo "La variable vale 2.";
                break;
            case 3:
                echo "La variable vale 3.";
            case 4:
            case 5:
                echo "La variable vale 4 o 5.";
                break;
            default:
                echo "La variable es incorrecta.";
                break;
        }
        ?>
    </p>


    <hr class="dashed separacion">


    <!-- FOR: -->
    <a id="forPhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/control-structures.for.php" target="_blank">For:</a>

    <h3 class="descripcion">La primera expresión <span class="importante">$i = 1</span> es evaluada <span class="importante">(ejecutada) una vez incondicionalmente al comienzo del bucle</span>.<br>
        En el comienzo de cada iteración, se evalúa <span class="importante">$i < 11</span>. Si se evalúa como <span class="importante">true, el bucle continúa</span> y se ejecutan la sentencia anidada <span class="importante">$i++</span>. Si se evalúa como <span class="importante">false, finaliza la ejecución del bucle</span>.<br>
                Cada una de las expresiones puede estar vacía o contener múltiples expresiones separadas por comas.
    </h3>

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <span class="tabUno"><span class="cond">for</span> <span class="amarillo">(</span><span class="variable">$i</span> = <span class="numero">1</span>; <span class="variable">$i</span>
            < <span class="numero">11
        </span>; <span class="variable">$i</span>++<span class="amarillo">) {</span> <span class="colComentario">//Variable; Condición; Incrementa o Desciende? ++ o --</span><br></span>
        <span class="tabDos"><span class="dato">echo</span> <span class="comentario">"Variable incrementa "</span> . <span class="variable">$i</span>;<br></span>
        <span class="tabDos"><span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br></span>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>
    <p class="phpCode">
        <?php
        for ($i = 1; $i < 11; $i++) {
            echo "Variable incrementa " . $i;
            echo "<br>";
        }
        ?>
    </p>


    <hr class="dashed separacion">


    <!-- WHILE: -->
    <a id="whilePhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/control-structures.while.php" target="_blank">While:</a>

    <h3 class="descripcion">El significado de una sentencia <span class="importante">while</span> es simple. Le dice a PHP que <span class="importante">ejecute las sentencias anidadas</span>, <span class="importante">tanto como la expresión while se evalúe</span> como <span class="importante">true</span>.<br>
        El <span class="importante">valor</span> de la expresión es <span class="importante">verificado</span> cada vez al <span class="importante">inicio del bucle</span>, por lo que incluso si este valor cambia durante la ejecución de las sentencias anidadas, <span class="importante">la ejecución no se detendrá hasta el final de la iteración</span> (cada vez que PHP ejecuta las sentencias contenidas en el bucle es una iteración).<br>
        A veces, <span class="importante">si la expresión while se evalúa como false desde el principio, las sentencias anidadas no se ejecutarán ni siquiera una vez</span>.<br>
        Al igual que con la sentencia if, se pueden agrupar varias instrucciones dentro del mismo bucle while rodeando un grupo de sentencias con corchetes, o utilizando la sintaxis alternativa.
    </h3>

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <span class="tabUno"><span class="variable">$variableTres</span> = <span class="numero">0</span>;<br></span>
        <span class="tabDos"><span class="cond">while</span> <span class="amarillo">(</span><span class="variable">$variableTres</span>
            <= <span class="numero">10
        </span><span class="amarillo">) {</span> <span class="colComentario">//Mientras que la variable sea menor o igual que 10.. TENER CUIDADO CON CICLOS INFINITOS!</span><br></span>
        <span class="tabTres"><span class="dato">echo</span> <span class="variable">$variableTres</span>;<br></span>
        <span class="tabTres"><span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br></span>
        <span class="tabTres"><span class="variable">$variableTres</span> = <span class="variable">$variableTres</span> + <span class="numero">2</span>;<span class="colComentario"> //Tambien se puede poner $variableTres++ (suma de a 1)</span><br></span>
        <span class="tabDos amarillo">}<br></span>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>
    <p class="phpCode">
        <?php
        $variableTres = 0;
        while ($variableTres <= 10) {
            echo $variableTres;
            echo "<br>";
            $variableTres = $variableTres + 2;
        }
        ?>
    </p>


    <hr class="dashed separacion">


    <!-- do while: -->
    <a id="doWhilePhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/control-structures.do.while.php" target="_blank">Do While:</a>
    <h3 class="descripcion">
    Los bucles <span class="importante">do-while</span> son muy similares a los bucles <span class="importante">while</span>, excepto que la expresión verdadera es <span class="importante">verificada al final de cada iteración en lugar que al principio</span>. La diferencia principal con los bucles while es que está <span class="importante">garantizado que corra la primera iteración</span> de un bucle do-while (la expresión verdadera sólo es verificada al final de la iteración), mientras que no necesariamente va a correr con un bucle while regular (la expresión verdadera es verificada al principio de cada iteración, si se evalúa como false justo desde el comienzo, la ejecución del bucle terminaría inmediatamente).
    </h3>
    <h4 class="codigo">
        <span class="codCol">&#60?php</span>
        <div class="tabUno">
            <span class="variable">$i</span> = <span class="numero">0</span>;<br>
            <span class="cond">do</span> <span class="amarillo">{</span>
        </div>
        <div class="tabDos">
            <span class="dato">echo</span> <span class="variable">$i</span>;
        </div>
        <div class="tabUno">
            <span class="amarillo">}</span> <span class="cond">while</span> <span class="amarillo">(</span><span class="variable">$i</span> &#62 <span class="numero">0</span><span class="amarillo">)</span>;
        </div>
        <span class="codCol">?&#62</span>
    </h4>
    <h5 class="resultado">El resultado sería este:</h5>
    <p class="phpCode">
        <?php
        $i = 0;
        do {
            echo $i;
        } while ($i > 0);
        ?>
    </p>



    <hr class="dashed separacion">


    <!-- DATE: OPERACIONES CON FECHAS: -->
    <a id="datePhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/function.date.php" target="_blank">Date: Operaciones con fechas:</a>

    <!-- <h3 class="descripcion"></h3> -->

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <div class="tabUno">
            <span class="dato">echo</span> <span class="comentario">"Fecha del día de hoy: "</span> . <span class="dato">date</span><span class="amarillo">(</span><span class="comentario">"d-m-y"</span><span class="amarillo">)</span>; <span class="colComentario">// Pone la fecha del día.</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo</span> <span class="comentario">"el día de hoy es: "</span> . <span class="dato">date</span><span class="amarillo">(</span><span class="comentario">"d"</span><span class="amarillo">)</span>;<br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo</span> <span class="comentario">"El mes actual es: "</span> . <span class="dato">date</span><span class="amarillo">(</span><span class="comentario">"F"</span><span class="amarillo">)</span>; <span class="colComentario">// La "M" dice el mes abreviado, la "m" da el número del mes. la "F" da el mes entero.</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo</span> <span class="comentario">"El número de la semana actual es: "</span> . <span class="dato">date</span><span class="amarillo">(</span><span class="comentario">"W"</span><span class="amarillo">)</span>; <span class="colComentario">// "W" da el número de semana.</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo</span> <span class="comentario">"El número del día es: "</span> . <span class="dato">date</span><span class="amarillo">(</span><span class="comentario">"w"</span><span class="amarillo">)</span>; <span class="colComentario">// "w" da el número del día: Lunes es 1, Martes 2, etc.</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo</span> <span class="comentario">"El mes tiene "</span> . <span class="dato">date</span><span class="amarillo">(</span><span class="comentario">"t"</span><span class="amarillo">)</span> . <span class="comentario">" días"</span>; <span class="colComentario">// "t" dice cuantos días tiene el mes actual.</span><br>
        </div>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>
    <p class="phpCode">
        <?php
        echo "Fecha del día de hoy: " . date("d-m-y");
        echo "<br>";
        echo "el día de hoy es: " . date("d");
        echo "<br>";
        echo "El mes actual es: " . date("F");
        echo "<br>";
        echo "El número de la semana actual es: " . date("W");
        echo "<br>";
        echo "El número del día es: " . date("w");
        echo "<br>";
        echo "El mes tiene " . date("t") . " días";
        ?>
    </p>


    <hr class="dashed separacion">


    <!-- OPERADORES LOGICOS:
        AND &&
        OR || (ALT + 124)
        gmp_xor(a, b)
-->
    <a id="logicosPhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/language.operators.logical.php" target="_blank">Operadores Lógicos:</a>

    <!-- <h3 class="descripcion"></h3> -->

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <div class="tabUno">
            <span class="variable">$operadorUno</span> = <span class="numero">1</span>;<br>
            <span class="variable">$operadorDos</span> = <span class="numero">2</span>;<br><br>
            <span class="colComentario">//OPERADOR AND &&</span><br>
            <span class="cond">if</span> <span class="amarillo">(</span><span class="variable">$operadorUno</span> == <span class="numero">1</span> && <span class="variable">$operadorDos</span> == <span class="numero">2</span><span class="amarillo">) {</span> <span class="colComentario">// Si los 2 cumplen la condición.
        </div>
        <div class="tabDos"><span class="dato">echo</span> <span class="comentario">"Cumple la condición."</span>;</div>
        <div class="tabUno"><span class="amarillo">}</span> <span class="cond">else</span> <span class="amarillo">{</span></div>
        <div class="tabDos"><span class="dato">echo</span> <span class="comentario">"No cumple la condición"</span>;</div>
        <div class="tabUno amarillo">}</div><br>
        <div class="tabUno">
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br><br>

            <span class="colComentario">//OPERADOR OR ||</span><br>
            <span class="cond">if</span> <span class="amarillo">(</span><span class="variable">$operadorUno</span> == <span class="numero">1</span> || <span class="variable">$operadorDos</span> == <span class="numero">2</span><span class="amarillo">) {</span> <span class="colComentario">// Si uno de los 2 cumple la condición. (el otro puede o no cumplir)</span><br>
        </div>
        <div class="tabDos"><span class="dato">echo</span> <span class="comentario">"Cumple la condición."</span>;<br></div>
        <div class="tabUno"><span class="amarillo">}</span> <span class="cond">else</span> <span class="amarillo">{</span><br></div>
        <div class="tabDos"><span class="dato">echo</span> <span class="comentario">"No cumple la condición"</span>;<br></div>
        <div class="tabUno amarillo">}</div><br>

        <div class="tabUno"><span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br><br></div>

        <span class="tabUno colComentario">//OPERADOR xor<br></span>
        <div class="tabUno"><span class="cond">if</span> <span class="amarillo">(</span><span class="variable">$operadorUno</span> == <span class="numero">1</span> xor <span class="variable">$operadorDos</span> == <span class="numero">2</span><span class="amarillo">) {</span> <span class="colComentario">// Si uno cumple y el otro no.</span><br></div>
        <div class="tabDos"><span class="dato">echo</span> <span class="comentario">"Cumple la condición."</span>;<br></div>
        <div class="tabUno"><span class="amarillo">}</span> <span class="cond">else</span> <span class="amarillo">{</span><br></div>
        <div class="tabDos"><span class="dato">echo</span> <span class="comentario">"No cumple la condición"</span>;<br></div>
        <div class="tabUno amarillo">}</div>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>
    <p class="phpCode">
        <?php
        $operadorUno = 1;
        $operadorDos = 2;

        //OPERADOR AND &&
        if ($operadorUno == 1 && $operadorDos == 2) {
            echo "Cumple la condición.";
        } else {
            echo "No cumple la condición";
        }

        echo "<br>";

        //OPERADOR OR ||
        if ($operadorUno == 1 || $operadorDos == 2) {
            echo "Cumple la condición.";
        } else {
            echo "No cumple la condición";
        }

        echo "<br>";

        //OPERADOR xor
        if ($operadorUno == 1 xor $operadorDos == 2) {
            echo "Cumple la condición.";
        } else {
            echo "No cumple la condición";
        }
        ?>
    </p>


    <hr class="dashed separacion">


    <!-- OPERADORES ARITMETICOS: -->
    <a id="aritmeticosPhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/language.operators.arithmetic.php" target="_blank">Operadores Aritméticos:</a>

    <!-- <h3 class="descripcion"></h3> -->

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <div class="tabUno">
            <span class="variable">$val1</span> = <span class="numero">5</span>;<br>
            <span class="variable">$val2</span> = <span class="numero">5</span>;<br>
            <span class="dato">echo</span> <span class="comentario">"La suma de "</span> . <span class="variable">$val1</span> . <span class="comentario">" + "</span> . <span class="variable">$val2</span> . <span class="comentario">" es de: "</span> . <span class="variable">$val1</span> + <span class="variable">$val2</span>; <span class="colComentario">// SUMAS</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo</span> <span class="comentario">"La resta de "</span> . <span class="variable">$val1</span> . <span class="comentario">" - "</span> . <span class="variable">$val2</span> . <span class="comentario">" es de: "</span> . <span class="variable">$val1</span> - <span class="variable">$val2</span>; <span class="colComentario">// RESTAS</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo</span> <span class="comentario">"La multiplicación de "</span> . <span class="variable">$val1</span> . <span class="comentario">" * "</span> . <span class="variable">$val2</span> . <span class="comentario">" es de: "</span> . <span class="variable">$val1</span> * <span class="variable">$val2</span>; <span class="colComentario">// MULTIPLICACIONES</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo</span> <span class="comentario">"La división de "</span> . <span class="variable">$val1</span> . <span class="comentario">" / "</span> . <span class="variable">$val2</span> . <span class="comentario">" es de: "</span> . <span class="variable">$val1</span> / <span class="variable">$val2</span>; <span class="colComentario">// DIVISIONES</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo</span> <span class="comentario">"El resibo de la división de "</span> . <span class="variable">$val1</span> . <span class="comentario">" % "</span> . <span class="variable">$val2</span> . <span class="comentario">" es de: "</span> . <span class="variable">$val1</span> % <span class="variable">$val2</span>; <span class="colComentario">// RESIVO DE UNA DIVISION</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo</span> <span class="comentario">"El exponente de "</span> . <span class="variable">$val1</span> . <span class="comentario">" ** "</span> . <span class="variable">$val2</span> . <span class="comentario">" es de: "</span> . <span class="variable">$val1</span> ** <span class="variable">$val2</span>; <span class="colComentario">// EXPONENTE</span> <br>
        </div>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>
    <p class="phpCode">
        <?php
        $val1 = 5;
        $val2 = 5;
        echo "La suma de " . $val1 . " + " . $val2 . " es de: " . $val1 + $val2;
        echo "<br>";
        echo "La resta de " . $val1 . " - " . $val2 . " es de: " . $val1 - $val2;
        echo "<br>";
        echo "La multiplicación de " . $val1 . " * " . $val2 . " es de: " . $val1 * $val2;
        echo "<br>";
        echo "La división de " . $val1 . " / " . $val2 . " es de: " . $val1 / $val2;
        echo "<br>";
        echo "El resibo de la división de " . $val1 . " % " . $val2 . " es de: " . $val1 % $val2;
        echo "<br>";
        echo "El exponente de " . $val1 . " ** " . $val2 . " es de: " . $val1 ** $val2;
        ?>
    </p>


    <hr class="dashed separacion">


    <!-- OPERADORES DE COMPARACION -->
    <a id="comparacionPhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/language.operators.comparison.php" target="_blank">Operadores de comparación:</a>

    <h3 class="descripcion"></h3>

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <div class="tabUno">
            <span class="variable">$varComp1</span> = <span class="comentario">"2"</span>;<br>
            <span class="variable">$varComp2</span> = <span class="numero">2</span>;<br>
        </div>
        <div class="tabDos"><span class="cond">if</span> <span class="amarillo">(</span><span class="variable">$varComp1</span> == <span class="numero">2</span> && <span class="variable">$varComp2</span> === <span class="numero">2</span><span class="amarillo">) {</span><br></div>
        <div class="tabTres"><span class="dato">echo</span> <span class="comentario">"Cumple la tarea."</span>;<br></div>
        <div class="tabDos"><span class="amarillo">}</span> <span class="cond">else</span> <span class="amarillo">{</span><br></div>
        <div class="tabTres"><span class="dato">echo</span> <span class="comentario">"No cumple la tarea."</span>;<br></div>
        <span class="tabDos amarillo">}</span><br>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>
    <p class="phpCode">
        <?php
        $varComp1 = "2";
        $varComp2 = 2;
        if ($varComp1 == 2 && $varComp2 === 2) {
            echo "Cumple la tarea.";
        } else {
            echo "No cumple la tarea.";
        }
        ?>
    </p>


    <hr class="dashed separacion">


    <!-- MANIPULACION DE CADENAS -->
    <a id="stringPhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/ref.strings.php" target="_blank">Funciones de strings:</a>

    <h3 class="descripcion"></h3>

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <div class="tabUno">
            <span class="variable">$cadena1</span> = <span class="comentario">"hola mundo"</span>;<br>
            <span class="dato">echo strlen</span><span class="amarillo">(</span><span class="variable">$cadena1</span><span class="amarillo">)</span>; <span class="colComentario">// Dice cuantos caracteres tiene la cadena.</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo str_replace</span><span class="amarillo">(</span><span class="comentario">"h"</span>, <span class="comentario">"H"</span>, <span class="variable">$cadena1</span><span class="amarillo">)</span>; <span class="colComentario">// Cambia el h de "hola" a H "Hola".</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo strtolower</span><span class="amarillo">(</span><span class="variable">$cadena1</span><span class="amarillo">)</span>; <span class="colComentario">// Pasa todo el texto de la cadena a minuscula.</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo strtoupper</span><span class="amarillo">(</span><span class="variable">$cadena1</span><span class="amarillo">)</span>; <span class="colComentario">// Pasa todo el texto de la cadena a mayuscula.</span><br>
            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br>
            <span class="dato">echo substr</span><span class="amarillo">(</span><span class="variable">$cadena1</span>, <span class="numero">0</span>, <span class="numero">4</span><span class="amarillo">)</span>; <span class="colComentario">// Devuelve parte de la cadena.</span><br>
        </div>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>
    <p class="phpCode">
        <?php
        $cadena1 = "hola mundo";
        echo strlen($cadena1);
        echo "<br>";
        echo str_replace("h", "H", $cadena1);
        echo "<br>";
        echo strtolower($cadena1);
        echo "<br>";
        echo strtoupper($cadena1);
        echo "<br>";
        echo substr($cadena1, 0, 4);
        ?>
    </p>


    <hr class="dashed separacion">


    <!-- FUNCIONES -->
    <a id="funcionesPhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/functions.user-defined.php" target="_blank">Funciones:</a>

    <h3 class="descripcion">Tener en cuenta que: <span class="importante">Cualquier código PHP válido puede aparecer dentro de una función</span>, incluso otras funciones y definiciones de clases.</h3>

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <div class="tabUno"><span class="codCol">function</span> <span class="dato">fun</span><span class="amarillo">() {</span> <span class="colComentario">// Crea una funcion llamada fun()</span></div><br>
        <div class="tabDos"><span class="dato">echo</span> <span class="comentario">"Saludos!"</span>; <span class="colComentario">// La funcion retorna Saludos!</span><br>
            <span class="cond">return</span>;
        </div>
        <div class="tabUno amarillo">}</div>
        <div class="tabUno"><span class="dato">echo fun</span><span class="amarillo">()</span>; <span class="colComentario">// Se llama a la funcion.</span><br><br>

            <span class="dato">echo</span> <span class="comentario">"&#60br&#62"</span>;<br><br>

            <span class="codCol">function</span> <span class="dato">sum</span><span class="amarillo">(</span><span class="variable">$var1</span>, <span class="variable">$var2</span><span class="amarillo">) {</span> <span class="colComentario">// Crea 2 variables.</span><br>
        </div>
        <div class="tabDos"><span class="variable">$suma</span> = <span class="variable">$var1</span> + <span class="variable">$var2</span>; <span class="colComentario">// La funcion lo que hace es sumar esas 2 variables.</span><br>
            <span class="cond">return</span> <span class="variable">$suma</span>; <span class="colComentario">// Retorna el resultado de la suma.</span><br>
        </div>
        <div class="tabUno amarillo">}<br></div>
        <div class="tabUno"><span class="dato">echo sum</span><span class="amarillo">(</span><span class="numero">1</span>, <span class="numero">7</span><span class="amarillo">)</span>; <span class="colComentario">// Se llama a la funcion y se le da un valor a $var1 y $var2.</span><br></div>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>
    <p class="phpCode">
        <?php
        function fun()
        {
            echo "Saludos!";
            return;
        }
        echo fun();

        echo "<br>";

        function sum($var1, $var2)
        {
            $suma = $var1 + $var2;
            return $suma;
        }
        echo sum(1, 7);
        ?>
    </p>





    <!-- FORMULARIOS si el archivo es .html no se puede usar PHP. Si es .php si se puede -->


    <hr class="dashed separacion">


    <!-- INCLUDE (Trae codigo de otro archivo y despues se lo llama) SI EL ARCHIVO NO EXISTE DA ERROR Y SIGUE CON EL CODIGO -->
    <!-- REQUIRE (Lo mismo que include solo que si el archivo no existe entonces no se ejecuta nada despues de esto) -->
    <a id="includePhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/function.include.php" target="_blank">Include</a><a id="includePhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/function.require.php" target="_blank">Require:</a>

    <h3 class="descripcion"><span class="importante">Include:</span> Trae codigo de otro archivo y despues se lo llama. Si el archivo no existe da error y sigue con el código.<br>
        <span class="importante">Require:</span> Lo mismo que include solo que si el archivo no existe entonces no se ejecuta nada despues de esto.
    </h3>

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <div class="tabUno">
            <span class="cond">include</span> <span class="amarillo">(</span><span class="comentario">"archivo_datos.php"</span><span class="amarillo">)</span>;<br>
            <span class="dato">funcionDelArchivo</span><span class="amarillo">()</span>;<br><br>

            <span class="cond">require</span> <span class="amarillo">(</span><span class="comentario">"archivo_datos.php"</span><span class="amarillo">)</span>;<br>
            <span class="dato">funcionDelArchivo</span><span class="amarillo">()</span>;<br>
        </div>
        <span class="codCol">?&#62</span>
    </h4>

    <?php
    //include ("archivo_datos.php");
    //funcionDelArchivo();

    //require ("archivo_datos.php");
    //funcionDelArchivo();
    ?>


<hr class="dashed separacion">


    <a id="globalPhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/reserved.variables.globals.php" target="_blank">Global:</a>

    <h3 class="descripcion">Cambia el ambito de una variable a global, tiene que estar dentro de la funcion para funcionar.<br>
        <span class="importante">Sirve para acceder dentro de una funcion a lo que hay fuera</span>.
    </h3>

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <div class="tabUno">
            <span class="variable">$variableLocal</span> = <span class="comentario">"Hola"</span>;<br><br>

            <span class="codCol">function</span> <span class="dato">cambiandoVarGlobal</span><span class="amarillo">() {</span>
        </div>
        <div class="tabDos">
            <span class="codCol">global</span> <span class="variable">$variableLocal</span>; <span class="colComentario">// Cambia la variable de fuera de la funcion a global para poder usarla por dentro.</span><br>
            <span class="variable">$variableLocal</span> = <span class="comentario">"El texto de la variable es: "</span> . <span class="variable">$variableLocal</span>;<br>
        </div>
        <span class="tabUno amarillo">}</span><br>
        <div class="tabUno">
            <span class="dato">cambiandoVarGlobal</span><span class="amarillo">()</span>;<br>
            <span class="dato">echo</span> <span class="variable">$variableLocal;</span><br>
        </div>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>
    <p class="phpCode">
        <?php
        $variableLocal = "Hola";

        function cambiandoVarGlobal()
        {
            global $variableLocal;
            $variableLocal = "El texto de la variable es: " . $variableLocal;
        }
        cambiandoVarGlobal();
        echo $variableLocal;
        ?>
    </p>


    <hr class="dashed separacion">


    <!-- VARIABLES ESTATICAS -->
    <a id="estaticasPhp" style="text-decoration: none;" class="titulo" href="https://www.php.net/manual/es/language.oop5.static.php" target="_blank">Variables Estáticas:</a>

    <h3 class="descripcion">Una característica importante del ámbito de las variables es la <span class="importante">variable estática</span>.<br>
        Una variable estática <span class="importante">existe sólo en el ámbito local de la función</span>, pero <span class="importante">no pierde su valor</span> cuando la ejecución del programa abandona este ámbito.</h3>

    <h4 class="codigo">
        <span class="codCol">&#60?php</span><br>
        <div class="tabUno"><span class="codCol">function</span> <span class="dato">incrementaVariable</span><span class="amarillo">() {</span></div>
        <div class="tabDos">
            <span class="codCol">static</span> <span class="variable">$contador</span> = <span class="numero">0</span>; <span class="colComentario">// Static hace que se conserve el valor (Variable estatica) si se ejecuta 1 vez da 1, 2 veces da 2, etc.<br></span>
            <span class="variable">$contador</span>++; <span class="colComentario">// Suma 1</span><br>
            <span class="dato">echo</span> <span class="variable">$contador</span> . <span class="comentario">"&#60br&#62"</span>;
        </div>
        <span class="tabUno amarillo">}</span><br>
        <div class="tabUno">
            <span class="dato">incrementaVariable</span><span class="amarillo">()</span>;<br>
            <span class="dato">incrementaVariable</span><span class="amarillo">()</span>;<br>
            <span class="dato">incrementaVariable</span><span class="amarillo">()</span>;<br>
        </div>
        <span class="codCol">?&#62</span>
    </h4>

    <h5 class="resultado">El resultado sería este:</h5>
    <p class="phpCode">
        <?php
        function incrementaVariable()
        {
            static $contador = 0;
            $contador++;
            echo $contador . "<br>";
        }
        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
        ?>
    </p>





    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
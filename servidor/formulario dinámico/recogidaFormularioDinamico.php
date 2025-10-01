<HTML>
    <head>
        <title>Datos de formulario dinamico</title>
    </head>
    <body>
        <?php
        if (isset($_GET["instrumentos"])) {
            foreach($_GET["instrumentos"] as $indiceI => $instrumento) {
                echo '<h2>Instrumento '.$indiceI.': '.$instrumento.'</h2>';
            }
        }
            echo '<h2>El deporte elegido es: '.$_GET["deportes"].'</h2>';
        ?>
    </body>
</HTML>
<?php
    $instrumentos = array("violin", "guitarra", "piano", "tambor");
    $arrayDoble = array("indice1" => array("elemento11", "elemento12"), "indice2" => array("elemento21", "elemento22"));
?>
<html>
    <head>
        <title>FormularioDinamico</title>
        <link rel="stylesheet" href="./formularioHTML.css">
    </head>
    <body>
        <form method="GET">
            <?php
                foreach ($instrumentos as $indice => $instrumento) {
                    echo '<input type="checkbox" id="'.$indice.'" name="instrumentos[]" value="'.$instrumento.'">'.$instrumento.'</input><br/><br/>';
                }
            ?>
            <?php
                foreach ($arrayDoble as $arrayD) {
                    echo 'Elemento diferente: <br/><br/>';
                    foreach ($arrayD as $elem) {
                        echo '<input type="checkbox" name="arrayDoble[]" value="'.$elem.'">'.$elem.'</input><br/><br/>';
                    }
                }
            ?>
            <button type="submit" name="enviar">Enviar</button>
        </form>
    </body>
</html>
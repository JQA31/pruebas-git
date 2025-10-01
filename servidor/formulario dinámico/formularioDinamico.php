<?php
    require 'funcionesArrays.php';
    $instrumentos = arrayCheckbox();
    $arrayDoble = arrayCheckboxDoble();
    $deportes = arraySelect();
?>
<html>
    <head>
        <title>FormularioDinamico</title>
        <link rel="stylesheet" href="./formularioDinamico.css">
    </head>
    <body>
        <form method="GET" action="./recogidaFormularioDinamico.php">
            <?php
                foreach ($instrumentos as $indice => $instrumento) {
                    echo '<input type="checkbox" id="'.$indice.'" name="instrumentos[]" value="'.$instrumento.'">'.$instrumento.'</input><br/><br/>';
                }
                foreach ($arrayDoble as $arrayD) {
                    echo 'Elemento diferente: <br/><br/>';
                    foreach ($arrayD as $elem) {
                        echo '<input type="checkbox" name="arrayDoble[]" value="'.$elem.'">'.$elem.'</input><br/><br/>';
                    }
                }
                echo '<select name="deportes">';
                foreach ($deportes as $deporte) {
                    echo '<option value="'.$deporte.'">'.$deporte.'</option>';
                }
                echo '</select>';
            ?>
            <button type="submit" name="enviar">Enviar</button>
        </form>
    </body>
</html>
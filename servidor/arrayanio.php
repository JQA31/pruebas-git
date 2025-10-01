<?php
    function anioB(&$febrero) {
        $febrero = array(31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    }

    function anioNoB(&$febrero) {
        $febrero = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    }

    function mostrarTodosLosMeses($febrero) {
        $meses = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");
        echo '<table>';
        echo '<tr><th>Mes</th><th>Días</th></tr>';
        foreach($meses as $indice => $mes) {
            echo '<tr>
                    <td>'.$mes.'</td>
                    <td>'.$febrero[$indice].'</td>
                  </tr>';
        }
        echo '</table>';
}

    if (isset($_GET['anio'])) {
        $febrero = array();
        $anio = (int)$_GET['anio'];
        if (($anio % 4 == 0 && $anio % 100 != 0) || 
            ($anio % 400 == 0)) {
                anioB($febrero);
            } else {
                anioNoB($febrero);
            }
        mostrarTodosLosMeses($febrero);
    }
?>
<HTML>
    <head>
        <title>array anios</title>
    </head>
    <body>
        <form method="GET">
            <input type="number" name="anio"></input>
            <button type="send" name="enviar">Enviar</button>
        </form>
    </body>
</HTML>
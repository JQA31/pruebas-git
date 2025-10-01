<?php
function tablaMultiplicar($numero) {
    $resultado = array(
        $numero*1, $numero*2, $numero*3, $numero*4,
        $numero*5, $numero*6, $numero*7, $numero*8,
        $numero*9, $numero*10
    );

    foreach ($resultado as $indice => $contenido) {
        echo '<tr>
                <td style="padding:8px; border-bottom:1px solid #ddd;">'.$numero.'</td>
                <td style="padding:8px; border-bottom:1px solid #ddd;">x</td>
                <td style="padding:8px; border-bottom:1px solid #ddd;">'.($indice+1).'</td>
                <td style="padding:8px; border-bottom:1px solid #ddd;">=</td>
                <th style="padding:8px; border-bottom:1px solid #ddd;">'.$contenido.'</th>
             </tr>';
    }
}
?>
<html>
<head>
    <title>arrays multiplicar 2</title>
</head>
<body>
    <h2>Te voy a hacer la tabla de multiplicar de un número. ¿Cuál quieres?</h2>
    <form method="GET">
        <input type="number" name="numero">
        <button type="submit" name="enviar">Calcular</button>
    </form>
    <table style="
        width:100%;
        border-collapse:collapse;
        font-family:Arial,sans-serif;
        font-size:14px;
        text-align:left;
        box-shadow:0 2px 6px rgba(0,0,0,0.1);
    ">
        <?php
        if (isset($_GET['numero'])) {
            $numero = (int)$_GET['numero'];
            tablaMultiplicar($numero);
        }
        ?>
    </table>
</body>
</html>

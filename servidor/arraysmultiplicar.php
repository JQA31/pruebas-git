<?php
    $resultado = array(8*1, 8*2, 8*3, 8*4, 8*5, 8*6, 8*7, 8*8, 8*9, 8*10);
    function tablaMultiplicar($resultado) {
        for ($i=1; $i<=10; $i++){
            echo '<tr>
                      <td>8</td>
                      <td>x</td>
                      <td>'.$i.'</td>
                      <td>=</td>
                      <th>'.$resultado[$i-1].'</th>
              </tr><br/>';
        };
    }
?>
<HTML>
    <head>
        <title>arrays multiplicar</title>
    </head>
    <body>
        <table>
            <?php tablaMultiplicar($resultado) ?>
        </table>
    </body>
</HTML>
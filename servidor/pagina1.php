<HTML>
    <head>
    </head>
    <body>
        <form method="POST">
            
            <input type="number" name="n1">
            <input type="number" name="n2">
            <button type="submit" name="operacion" value="suma">Sumar</button>
            <button type="submit" name="operacion" value="resta">Restar</button>
            <button type="submit" name="operacion" value="multiplicacion">Mulitplicar</button>
            <button type="submit" name="operacion" value="division">Dividir</button>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obtener los valores de los inputs
                $input1 = isset($_POST['n1']) ? $_POST['n1'] : 0;
                $input2 = isset($_POST['n2']) ? $_POST['n2'] : 0;
                $operacion = $_POST['operacion'];

                // Operaciones
                $input1 = (int)$input1;
                $input2 = (int)$input2;
                function operaciones($input1, $input2) {
                    switch ($operacion) {
                    case "suma":
                        $resultado = $input1 + $input2;
                        break;
                    case "resta":
                        $resultado = $input1 - $input2;
                        break;
                    case "multiplicacion":
                        $resultado = $input1 * $input2;
                        break;
                    case "division":
                        $resultado = $input1 / $input2;
                        break;
                    }
                    return $resultado;
                }
            }
            if (isset($resultado)) {
                echo '<input type="number" name="r" value="'.$resultado.'">';
            }
        ?>
    </body>
</HTML>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    ?>
    <form action="dni.php" method="post">
        <label>Dni</label>
        <input type="radio" name="opcion" id="opcion_id" value="dni" checked>
        <br>
        <label>Nie</label>
        <input type="radio" name="opcion" id="opcion_id" value="nie">
        <br>
        <input type="text" name="valor" id="valor_id">
        <input type="submit" name="btn" id="btn">
    </form>
    <?php
    $letras[0] = "T";
    $letras[1] = "R";
    $letras[2] = "W";
    $letras[3] = "A";
    $letras[4] = "G";
    $letras[5] = "M";
    $letras[6] = "Y";
    $letras[7] = "F";
    $letras[8] = "P";
    $letras[9] = "D";
    $letras[10] = "X";
    $letras[11] = "B";
    $letras[12] = "N";
    $letras[13] = "J";
    $letras[14] = "Z";
    $letras[15] = "S";
    $letras[16] = "Q";
    $letras[17] = "V";
    $letras[18] = "H";
    $letras[19] = "L";
    $letras[20] = "C";
    $letras[21] = "K";
    $letras[22] = "E";

    $nie["X"] = 0;
    $nie["Y"] = 1;
    $nie["Z"] = 2;


    if (isset($_POST["btn"])) {
        $valor = $_POST["valor"];
        preg_match_all('/[^0-9]/', $valor, $coincidencias);
        print_r($coincidencias);

        if ($_POST["opcion"] == "dni") {

            if (strpos($valor, $coincidencias[0][0]) != 8) {
                echo "Seleccion de documento incorrecta";
            } else {
                $separa = explode($coincidencias[0][0], $valor);
                print_r($separa);
                $num = intval($separa[0]);
                echo $num;
                $numeros = str_split($num);
                print_r($numeros);
                $suma = 0;
                if (count($numeros) == 8) {
                    for ($i = 0; $i < count($numeros); $i++) {
                        $suma = $suma + $numeros[$i];
                    }

                    $suma = $suma % 23;
                    echo $suma;
                    if ($coincidencias[0][0] == $letras[$suma]) {
                        echo "Dni valido";
                    } else {
                        echo "Dni invalido";
                    }
                    echo $letras[$suma];
                }
            }
        }
        if ($_POST["opcion"] == "nie") {
            //($coincidencias[0][0] != "X" || $coincidencias[0][0] != "Y" || $coincidencias[0][0] != "Z")
            if (
                strpos($valor, $coincidencias[0][0]) != 0 && strpos($valor, $coincidencias[0][1]) != 8 &&
                ($coincidencias[0][0] != "X" || $coincidencias[0][0] != "Y" || $coincidencias[0][0] != "Z")
            ) {
                echo "Seleccion de documento incorrecta";
            } else {
                $separa = explode($coincidencias[0][0], $valor);
                print_r($separa);
                $separa = explode($coincidencias[0][1], $separa[1]);
                print_r($separa);
                $num = intval($separa[0]);
                $numeros = str_split($num);
                print_r($numeros);
                $suma = 0;
                if (count($numeros) == 7) {
                    for ($i = 0; $i < count($numeros); $i++) {
                        $suma = $suma + $numeros[$i];
                    }

                    $suma = $suma % 23;
                    echo $suma;
                    if ($coincidencias[0][1] == $letras[$suma + $nie[$coincidencias[0][0]]]) {
                        echo "Nie valido";
                    } else {
                        echo "Nie invalido";
                    }
                    echo $letras[$suma + $nie[$coincidencias[0][0]]];
                }
            }
        }
    }

    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resposta Activitat 6</title>
</head>
<body>
    <h1>Resposta Activitat 6</h1>

    <?php
    $cadena = $_POST["numeros"];

    echo "Cadena introduïda: " . $cadena . "<br><br>";

    $vector = explode(",", $cadena);

    echo "Vector original:<br>";
    print_r($vector);

    $parells = array();

    foreach ($vector as $num) {
        $num = trim($num);

        if ($num % 2 == 0) {
            $parells[] = $num;
        }
    }

    echo "<br><br>Vector de nombres parells:<br>";
    print_r($parells);

    echo "<br><br>Total de nombres parells: " . count($parells);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resposta Activitat 4</title>
</head>
<body>
    <h1>Resposta Activitat 4</h1>

    <?php
    $nom = $_POST["nom"];
    $edat = $_POST["edat"];

    echo "Nom: " . $nom . "<br>";
    echo "Edat: " . $edat . "<br><br>";

    if ($edat < 35) {
        echo "Ets jove";
    } else {
        echo "Ja has de passar la ITV";
    }
    ?>
</body>
</html>
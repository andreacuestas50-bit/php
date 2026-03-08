<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resposta formulari</title>
</head>
<body>
    <h1>Resposta del formulari</h1>

    <?php
    $nom = $_POST["nom"];
    $edat = $_POST["edat"];

    echo "Nom: " . $nom . "<br>";
    echo "Edat: " . $edat;
    ?>
</body>
</html>
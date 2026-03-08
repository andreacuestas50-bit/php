<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
<title>Resposta Activitat 5</title>
</head>
<body>

<h1>Resposta Activitat 5</h1>

<?php

$nom = $_POST["nom"];
$edat = $_POST["edat"];

echo "Nom: " . $nom . "<br>";
echo "Edat: " . $edat . "<br><br>";

function felicitarAniversariEspelmes($edat){

    for($i = 0; $i < $edat; $i++){
        echo "🕯️ ";
    }

}

echo "Felicitats pel teu aniversari!<br><br>";

felicitarAniversariEspelmes($edat);

?>

</body>
</html>
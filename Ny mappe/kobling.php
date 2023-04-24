
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

$server = "";
$brukernavn = "root";
$passord = "";
$database = "indiespill_db";

$kobling = new mysqli($server, $brukernavn, $passord, $database);

if ($kobling->connect_error) {
    die("noe gikk galt: " . $kobling->connect_error);
}

$sql ="SELECT * FROM indiespill";
$resultat = $kobling->query($sql);

echo "<ul>";

while($rad = $resultat->fetch_assoc()){
    $idindiespill = $rad['idindiespill'];
    $navn = $rad['navn'];
    $sjanger = $rad['sjanger'];
    $årstall = $rad['årstall'];
    $utvikler = $rad['utvikler'];
    $utgiver = $rad['utgiver'];
    $plattformer = $rad['plattformer'];

    echo"<li>$idindiespill, $navn, $sjanger, $årstall, $utvikler, $utgiver, $plattformer</li><br>";
}

echo "</ul>";

?>

  
</body>
</html>
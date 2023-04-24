<?php 
include "azure.php";

$id = $_GET['bruker_id'];
 
$sql = "SELECT * FROM bruker WHERE idbruker='$id'";             
$resultat = $conn->query($sql);
 
$rad = $resultat->fetch_assoc();
    $idbruker = $rad['idbruker'];  
    $brukernavn = $rad['brukernavn'];
    $fornavn = $rad['fornavn'];
    $etternavn = $rad['etternavn'];
    $bio = $rad['bio'];
    $fodseldato = $rad['fodselsdato'];
    $tlf = $rad['tlf'];
    $epost = $rad['epost'];
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo "$brukernavn"; ?></title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class=profil>
    <?php

    echo "
        <h1> $fornavn $etternavn </h1>
        <p> $brukernavn </p>
        <p> $bio </p>
        <p> $tlf </p>
        <p> $epost </p>
        <p> $fodseldato </p>
    ";
    ?> 
    </div>

    <div class=forside>
        <?php
        echo "<a href= 'index.php'>Tilbake til forsiden</a>"
        ?>
    </div>
    
    
    <div class=innlegg_div>
        <?php
            $sql = "SELECT * FROM innlegg WHERE idbruker='$id' ";
            $resultat = $conn->query($sql);
 
            while($rad = $resultat->fetch_assoc()) { 
                 $tekst = $rad['tekst'];  
                echo "$tekst    ";
            }
        
        ?>
    </div>  
    <div class=bilde_div>
        <?php
            $sql = "SELECT * FROM media WHERE idbruker='$id' ";
            $resultat = $conn->query($sql);
 
            while($rad = $resultat->fetch_assoc()) { 
                 $media_navn = $rad['media_navn'];  
                echo "<img class='bilder'src='img/$media_navn'>";
            }
        
        ?>
    </div>  
 
 
</body>
</html>
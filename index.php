<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kjasperboka DB</title>
  <link rel="stylesheet" href="style.css">
 
</head>
<body>
  
  <div class=logo>
    <img src="fd.png" alt=""> 
  </div>

  <div class=logo2>
    <img src="fd.png" alt=""> 
  </div>

  <div class=logo3>
    <img src="fd.png" alt=""> 
  </div>

  <div class=tittel>
    <?php
      echo "Profiler:"
    ?>
  </div>

  <div class=profiler>
    <?php  
    include "azure.php";
    
    
    $sql = "SELECT * FROM bruker"; 
    $resultat = $conn->query($sql);
  
    
    while($rad = $resultat->fetch_assoc()){
        $idbruker = $rad['idbruker'];  
        $brukernavn = $rad['brukernavn'];
        $fornavn = $rad['fornavn'];
        $etternavn = $rad['etternavn'];
        $bio = $rad['bio'];
        $passord = $rad['passord'];
        $epost = $rad['epost'];
        $tlf = $rad['tlf'];
        $skole = $rad['skole'];
        $bosted = $rad['bosted'];
        $fodselsdato = $rad['fodselsdato'];

        echo "<br>";
  
        echo "<a href= 'profil.php?bruker_id=$idbruker'>$fornavn $etternavn</a><br> ";
    } 
    
  
  
    ?>
  </div>

  <div class=login>
  <?php
  include "login.php";
  ?>
  </div>

 
</body>
</html>
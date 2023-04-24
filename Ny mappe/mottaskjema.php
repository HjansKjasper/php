<?php

if(isset($_GET["sendinn"])) {
    $navn = $_GET["dittnavn"];
    $inntekt2020 = $_GET["inntekt2020"];
    $inntekt2021 = $_GET["inntekt2021"];
    $inntekt2022 = $_GET["inntekt2022"];

    $samlet = $inntekt2020 + $inntekt2021 + $inntekt2022;
    $gjennomsnitt = $samlet / 3;

    $norge = 610000;

    echo "Inntekten for 2020 var $inntekt2020<br>";
    echo "Inntekten for 2021 var $inntekt2021<br>";
    echo "Inntekten for 2022 var $inntekt2022<br>";

    echo "<br>";

    echo "Den samlede inntekten for alle tre årene var $samlet<br>";

    echo "<br>";

    echo "Den gjennomsnittelige inntekten hvert år var $gjennomsnitt, ";

    if($gjennomsnitt < $norge) {
        echo "det er under gjennomsnittet i Norge<br>";
    }  else {
        echo "det er over gjennomsnittet i Norge<br>";
    }
    
}

?>
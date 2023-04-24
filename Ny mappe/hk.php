<?php
echo "<a href=\"https://no.wikipedia.org/wiki/Portal:Forside\">Wiki</a> <br>";
$terningkast = rand(1,6);

echo "Du fikk $terningkast på terningen. <br>";

echo "Det er ";

if($terningkast == 1) {
    echo "ikke bra nok...";
} else if($terningkast == 6) {
    echo "glimrende!";
} else {
    echo "ikke noe å skryte av...";
}


?>
<?php
$tall1 = 45;
$tall2 = 78;
$tekst1 = "Hans Kasper";
$tekst2 = "Storhaug";

$sum = $tall1 + $tall2;
$differanse = $tall1 - $tall2;
$produkt = $tall1 * $tall2;
$kvotient = $tall1 / $tall2;

$langTekst = $tekst1 . $tekst2;
$bedreTekst = $tekst1 . " " . $tekst2 . "s gate";

echo "Summen av $tall1 og $tall2 blir $sum <br>";
echo "Differansen blir $differanse <br>";
echo "Produktet blir $produkt <br>";
echo "Kvotienten blir $kvotient <br>";

echo "<br><br>";

echo "$langTekst <br>";
echo $bedreTekst;
?>
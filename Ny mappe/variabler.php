<?php

$iår = 2023;

$oscar = "Oscar";
$ludwig = "Ludwig";
$beate = "Beate";

$oscarår = 1980;
$ludwigår = 2003;
$beateår = 2007;

$oscaralder = $iår - $oscarår;
$ludwigalder = $iår - $ludwigår;
$beatealder = $iår - $beateår;

$a = $oscaralder - $ludwigalder;
$b = $oscaralder - $beatealder;
$c = $ludwigalder - $beatealder;

echo "$oscar er $oscaralder år gammel<br>";
echo "$ludwig er $ludwigalder år gammel<br>";
echo "$beate er $beatealder år gammel<br>";

echo "<br>";

echo "$oscar er $a år eldre enn $ludwig<br>";
echo "$oscar er $b år eldre enn $beate<br>";
echo "$ludwig er $a år eldre enn $beate<br>";


?>
<?php
// nella variabile text memoriazzo il mio paragrafo
$text = "questo è un esempio del mio paragrafo, questa è una prova, questa è una prova";
// dentro la variabile $valoreGet memorizzo il valore di GET
$valoreGet = $_GET["badword"];
// con la funzione strlen() calcolo la lunghezza della mia stringa e la stampo con echo
echo $text . "</br>" . "questa è la lunghezza del mio paragrafo: " . strlen($text);
// sempre con echo stampo la mia stringa ma sostituendo con *** le parole che inserisco nella badword nell'url.
// Esempio: http://localhost/php-badwords/index.php?badword=paragrafo in questo caso badword = paragrafo e vado a stampare la mia stringa con la parola "paragrafo" sostituita da ***
echo "</br>" . str_replace($valoreGet, "***", $text);
?>

<?php

echo "
<html>
<head>
<style>
dody{
    text-align:center;
}
h1{
    color:red;
}
</style>
</head>
<dody>
<h1>Tabella dei numeri divisibili per 3 da 0 a 100</h1>
<table border 0 align=center>
<tr><th colspan=2>Numeri divisibili x3</th></tr>";
$numDiv = array();
$numTot = 0;
$sommaNum = 0;
$mediaNum = 0;
$media = 0;
for ($i = 0; $i < 101; $i++) {
    if ( $i % 6 == 0) {
        echo "<tr>";
    }
    if ($i % 3 == 0) {
        $numDiv[$i] = $i;
        $numTot++;
        $sommaNum = $sommaNum + $numDiv[$i];
        $media++;
        echo "<td>$numDiv[$i]</td>";
    }
    if (($i+1) % 6 == 0) {
        echo "</tr>";
    }
    $mediaNum = $sommaNum / $media;
}
echo "
<tr><th colspan=2>Numeri tot: $numTot</th></tr>
<tr><th colspan=2>Media numeri: $mediaNum</th></tr>
</table>
</dody>
</html>";
?>
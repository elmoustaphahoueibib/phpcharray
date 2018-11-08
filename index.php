<?php
$tab = range(0, 63);
foreach ($tab as $x => $val) {
    $tab[$x] = $tab[$x] / 10;
}

foreach ($tab as $x => $val) {
    $val = (string)$val;
    $tabx[$val] = sin($val);
}

echo "<table border='1' width='40%' bgcolor='#7fffd4' align='center'>";
echo "<label><b></b></label>";
echo "<tr> <th> X </th> <th> sinus</th> </tr>";

foreach ($tabx as $key => $val) {
    echo "<tr><td>$key</td> <td>$val</td></tr>";
}
echo "</table>";
echo "<hr />";
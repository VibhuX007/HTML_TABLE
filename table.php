<?php
$num = $_GET["num"];
echo "<h2 align=center>Table of $num : </h2>";
echo "<table border=1 align=center>";
$color = array("", "red", "green", "cyan", "olive", "coral", "crimson", "lightblue", "lightgreen", "lime", "magenta");
for($i = 1;$i<11;$i++){
    $res = $num * $i;
    echo "<tr><td bgcolor=$color[$i]>$num x $i = $res</td></tr>";
}
echo "</table>";
?>
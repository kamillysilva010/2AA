<?php
$color = array("red","green", "blue", "yellow");

foreach ($color as $x){
    echo "$x <br>";
}

echo ("-------------------------------- <br>");

foreach ($color as $x){
    if ($x == "blue")
    break;
echo "$x <br>";
}

echo ("--------------------------------- <br>");

foreach ($color as $x){
    if ($x == "blue")
    continue;
echo "$x <br>";
}
?>
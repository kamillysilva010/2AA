<?php
$i = 1;
echo ("<h4>While </h4>");
while ($i <= 5){
    echo ("$i <br>");
    $i++;
}

echo ("----------------------------------<br>");

$i = 1;
echo ("<h4> While + if + break</h4>");
while ($i < 6){
    if ($i == 3 ) break;
    echo ("$i <br>");
    $i++;
}

echo("---------------------------- <br>");

$i = 0;
echo("<h4> while + if + continue </h4>");
while ($i < 6){
    $i++;
    if ($i == 3) continue;
    echo ("$i <br>");
    }
echo ("----------------------------------- <br>");

$i = 1;
echo ("<h4> While + endwhile </h4>");
while ($i < 6):
    echo ("$i <br>");
    $i++;
endwhile;

echo ("------------------------------------ <br>");
$i = 1;
echo ("<h4> do + if + while </h4>");
do {
    if ($i == 3)
        break;
    echo ("$i <br>");
    $i++;
} while($i < 6);
echo("-------------------------------------- <br>");

do {
    if ($i == 3)
        continue;
    echo ("$i <br>");
    $i++;
} while($i < 6);
?>
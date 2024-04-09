<?php
    echo "<h2> Funções pré definidas </h2>";
    echo "<h3> Função do PI </h3>";
    echo (pi());
    echo "<h3>Achar o minimo entre numeros </h3>";
    echo (min(0, 150, 30, 20, -8, -200));
    echo "<h3> Achar o máximo entra os numeros </h3>";
    echo (max(0, 150, 30, 20, -100, -200)) . "<br>";
    echo "<h3>Raiz quadrada</h3>";
    echo (sqrt(25));
    echo "<h3> Função Randomica </h3>";
    echo (rand());
    echo "<h3>Caracter</h3>";
    echo ($letra = chr(64+rand(0,25)));

?>
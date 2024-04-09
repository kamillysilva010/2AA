<?php
    echo "Hello"."<br>";
    echo 'Hello'.'<br>';
    echo 'Kamilly'.'<br>';
    $x = "Kamilly";
    echo "Hello $x"."<br>";


    echo "<br>";
    echo "<h1>Strings</h1>";

    echo "<b> String para contas as letras: </b>"; 
    echo strlen ("Kamilly"). "<br>";
    echo "<b> String para contar as palavras: </b>";
    echo str_word_count ("Seguimos nosso caminho por este mar de longo até a oitava da Páscoa
    Topamos aves e houvemos vista de terra os selvagens mostraram-lhes uma galinha quase haviam medo dela"). "<br>";
    echo "<b> String para achar uma palavra especifica: </b>";
    echo strpos ("Hello word", "word");

?>
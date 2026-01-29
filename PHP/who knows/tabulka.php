<?php

    $border = 1;
    $sloupce = $_GET["count"];
    $slovo = $_GET["word"];
    echo "<table border=".$border.">";
    for ($i = 0; $i < $sloupce; $i++) 
    {
        echo "<tr>";
        echo $i.": ".$slovo."<br>";
        echo "</tr>";
    }
    echo "</table>";

?>
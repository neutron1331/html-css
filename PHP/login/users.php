<?php

    $border = 1;
    $names = array("asdf","sdfg","dfgh","fgjh","hjkl","jklů");
    $sloupce = sizeof($names);
    $slovo = 2;
    echo "<table border=".$border.">";
    for ($i = 0; $i < $sloupce; $i++) 
    {
        echo "<tr>";
        echo $i.": ".$names[$i]."<br>";
        echo "</tr>";
    }
    echo "</table>";

?>
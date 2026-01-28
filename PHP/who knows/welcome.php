<?php

#php je na straně serveru / javascript je na straně klienta

    $border = 1;
    echo "<table border=".$border.">";
    for ($i = 0; $i < 10; $i++) 
    {
        echo "<tr>";
        for ($j = 0; $j < 10; $j++) 
        {
            echo "<td>$i.$j</td> ";
        }
        echo "</tr>";
    }
    echo "</table>";

    ##############################################
    echo "<br><br><br><br>";

    $border = 1;
    $row = $_POST["row"];
    $col = $_POST["col"];
    echo "<table border=".$border.">";
    for ($i = 0; $i < $row; $i++) 
    {
        echo "<tr>";
        for ($j = 0; $j < $col; $j++) 
        {
            echo "<td>$i.$j</td> ";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
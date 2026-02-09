<?php

    $delka = $_POST["delka"];
    $barva = $_POST["barva"];
    $material = $_POST["material"];
    $styl = $_POST["styl_drivek"];
    
    if (!empty($_POST["spotrebic1"])) {$spotrebic1 = $_POST["spotrebic1"];}
    if (!empty($_POST["spotrebic2"])) {$spotrebic2 = $_POST["spotrebic2"];}
    if (!empty($_POST["spotrebic3"])) {$spotrebic3 = $_POST["spotrebic3"];}
    if (!empty($_POST["spotrebic4"])) {$spotrebic4 = $_POST["spotrebic4"];}

    $montaz = $_POST["montaz"];

/* 
    echo "<br><br>".$delka;
    echo "<br>".$barva;
    echo "<br>".$material;
    echo "<br>".$styl;

    if (!empty($spotrebic1)) {echo "<br>device: ".$spotrebic1;}
    if (!empty($spotrebic2)) {echo "<br>device: ".$spotrebic2;}
    if (!empty($spotrebic3)) {echo "<br>device: ".$spotrebic3;}
    if (!empty($spotrebic4)) {echo "<br>device: ".$spotrebic4;}

    echo "<br>".$montaz;
*/

    $cena = (($delka*$material)+$barva+$styl+$montaz);

    if (!empty($_POST["spotrebic1"])) {$cena += $spotrebic1;}
    if (!empty($_POST["spotrebic2"])) {$cena += $spotrebic2;}
    if (!empty($_POST["spotrebic3"])) {$cena += $spotrebic3;}
    if (!empty($_POST["spotrebic4"])) {$cena += $spotrebic4;}

    echo "
    <br>
    <h2>cena je: ".$cena."Kč";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    #proměnné

    $prom = "ahoj světe";
    print $prom.'<br>';
    echo $prom.'hoj';

    # dat typ

    print '<br><h1>Datové tipy</h1><br>Celé čísla: ';
    $x = 5;
    var_dump(value: $x);

    print '<br>řetězce: ';
    $x = 'asdf';
    var_dump(value: $x);

    print '<br>desetinní čísla: ';
    $x = 1.1;
    var_dump(value: $x);

    print '<br>pravdivostní hodnota: ';
    $x = true;
    var_dump(value: $x);

    print '<br>objekty: ';
    $x = false;//?????????????????????????????????????????????????????????????
    var_dump(value: $x);

    print '<br>řetězce: ';//
    $x = 'asdf';
    var_dump(value: $x);

    #
    #

    #num
    #casting

    $a = 5;         //integer
    $b = 2.34;      //float
    $c = 'hello';   //string
    $d = true;      //boolean
    $e = null;      //null

    $a = (string)$a;
    $b = (string)$b;
    $c = (string)$c;
    $d = (string)$d;
    $e = (string)$e;

    // použití var_dump pro ověření typů po přetypování
    echo 'int na string: '.var_dump(value: $a).'<br>';
    echo 'float na string: '.var_dump(value: $b).'<br>';
    echo 'string na string'.var_dump(value: $c).'<br>';
    echo 'boolean na string: '.var_dump(value: $d).'<br>';
    echo 'null na string: '.var_dump(value: $e).'<br>';

    #math
    #constants
    #operator
    #if/else/elseif
    echo '<br><h1>Podmínky</h1><br>';
    $x = 10;
    if ($x == 10) {
        echo $x.' je pravda<br>';
    } else {
        echo $x.' je nepravda<br>';
    }

    #switch
    #loop
    #function
    #array
    #regex
?>    


</body>
</html>
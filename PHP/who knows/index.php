<html>
<head>
</head>
<body> 

<form action="welcome.php" method="post"> <!-- hodnoty jsou uloženy v requestu(v konzoly) -->
    Řádky: <input type="number" name="row"><br>
    Sloupce: <input type="nember" name="col"><br>
    <input type="submit">
</form>

<form action="tabulka.php" method="get"> <!-- hodnoty jsou uloženy v requestu(v konzoly) -->
    Slovo: <input type="text" name="word"><br>
    Počet: <input type="nember" name="count"><br>
    <input type="submit">
</form>
    
</body>
</html>
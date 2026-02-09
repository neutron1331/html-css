<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="linka.php" method="post"> <!-- hodnoty jsou uloženy v requestu(v konzoly) -->

<h1>Konfigurátor kuchyňské linky</h1>

<h3>a) Rozměr kuchyňské linky</h3> <!---->

Zadejte délku linky v metrech: <input type="number" name="delka" min="1" required>
<br>

<h3>b) Barva kuchyňské linky</h3> <!---->

bílá (+0 Kč) <input type="radio" name="barva"required value="0">
<br>
šedá (+1 500 Kč) <input type="radio" name="barva"required value="1500">
<br>
černá (+3 000 Kč) <input type="radio" name="barva"required value="3000">
<br>
dřevo (+2 000 Kč) <input type="radio" name="barva"required value="2000">
<br>

<h3>c) Materiál pracovní desky</h3> <!---->

laminát (+2 000 Kč / metr) <input type="radio" name="material" required value="2000">
<br>
dřevo (+4 000 Kč / metr) <input type="radio" name="material" required value="4000">
<br>
kámen (+6 000 Kč / metr) <input type="radio" name="material" required value="6000">
<br>

<h3>d) Styl dvířek</h3> <!---->

hladká (+0 Kč) <input type="radio" name="styl_drivek" required value="0">
<br>
rámová (+2 500 Kč) <input type="radio" name="styl_drivek" required value="2500">
<br>
lesklá (+3 500 Kč) <input type="radio" name="styl_drivek" required value="3500">
<br>

<h3>e) Vestavěné spotřebiče</h3> <!---->

trouba (+8 000 Kč) <input type="checkbox" name="spotrebic1" value="8000">
<br>
varná deska (+6 000 Kč) <input type="checkbox" name="spotrebic2" value="6000">
<br>
myčka (+10 000 Kč) <input type="checkbox" name="spotrebic3" value="10000">
<br>
mikrovlnná trouba (+5 000 Kč) <input type="checkbox" name="spotrebic4" value="5000">
<br>

<h3>f) Montáž</h3> <!---->

Ano (+5 000 Kč) <input type="radio" name="montaz" required value="5000">
<br>
Ne (+0 Kč) <input type="radio" name="montaz" required value="0">
<br>

<input type="submit">
</form>

</body>
</html>
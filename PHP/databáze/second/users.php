<?php

include("./databaze.php");
$users = getALL("users_table"); //název tabulky

//echo"<br>".$users[0]["username"]."<br>";

$border = 1;
echo"<table border=".$border.">";

echo"
<tr>
    <td>ID</td>
    <td>USERNAME</td>
    <td>EMAIL</td>
    <td>PASSWORD</td>
    <td>permissions</td>
    <td>date of creation</td>
    <br>
</tr>
";

function edit()
{
    echo"<h3> zadej nového uživatele
    <form action='users.php' method='POST'>
        <label for='username'>Username:</label>
        <input type='text' id='username' name='username' required><br><br>
        
        <label for='password'>Password:</label>
        <input type='password' id='password' name='password' required><br><br>

        <button type='submit'>Login</button>
    </form>
    ";
}

foreach ($users as $value) 
{
    echo"
    <tr>
        <input type='hidden' name='cache' value='".$value["id"]."'>
        <td>".$value["id"]."</td>
        <td>".$value["username"]."</td>
        <td>".$value["email"]."</td>
        <td>".$value["password"]."</td>
        <td>".$value["account_status"]."</td>
        <td>".$value["date_of_creation"]."</td>
        <td><form method='post' style='display:inline;'><button type='submit'>upravit</button></form></td>
        <td><form method='post' style='display:inline;'><button type='submit'>zobrazit</button></form></td>
        <td><form method='post' style='display:inline;'><button type='submit'>odstrani</button></form></td>
    </tr>
    ";
}
echo"<tr><td colspan='9'><button style='width:100%'>přidat uživatele</button></td></tr>";
echo"</table><br>";



?>

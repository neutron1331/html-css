<?php

include("./databaze.php");
$users = getALL("users");

//echo"<br>".$users[0]["username"]."<br>";

$border = 1;
echo"<table border=".$border.">";

echo"
<tr>
    <td>ID</td>
    <td>USERNAME</td>
    <td>EMAIL</td>
    <td>PASSWORD</td>
    <br>
</tr>
";
foreach ($users as $value) 
{
    echo"
    <tr>
        <td>".$value["id"]."</td>
        <td>".$value["username"]."</td>
        <td>".$value["email"]."</td>
        <td>".$value["password"]."</td>
    </tr>
    ";
}
echo"</table><br>";

echo"<h3> zadej nového uživatele
<form action='users.php' method='POST'>
    <label for='username'>Username:</label>
    <input type='text' id='username' name='username' required><br><br>
    
    <label for='password'>Password:</label>
    <input type='password' id='password' name='password' required><br><br>

    <button type='submit'>Login</button>
</form>
";
?>

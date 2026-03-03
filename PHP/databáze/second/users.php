<?php

include("./databaze.php");
$table_name = "users_table"; //název tabulky
$users = getALL($table_name);

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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset( $_POST["cache"]))
{
    $selected_user = "";
}

else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset( $_POST["new_user"]))
{

}

else foreach ($users as $value) 
{
    echo"
    <tr>
    <form method='post' style='display:inline;'>
        <input type='hidden' name='cache' value=".$value["id"].">
        <td>".$value["id"]."</td>
        <td>".$value["username"]."</td>
        <td>".$value["email"]."</td>
        <td>".$value["password"]."</td>
        <td>".$value["account_status"]."</td>
        <td>".$value["date_of_creation"]."</td>
        <td><input type='submit' name='button1' class='button' value='upravit'/></td>
        <td><input type='submit' name='button2' class='button' value='zobrazit'/></td>
        <td><input type='submit' name='button3' class='button' value='odstranin'/><td>
        </form>
    </tr>
    ";
}
echo"
    <form action='new_user.php' method='post' style='display:inline;'>
        <tr><td colspan='9'><input type='submit' name='button4' class='button' value='přidat uživatele' style='width:100%'/></td></tr>
    </form>";
echo"</table><br>";



?>

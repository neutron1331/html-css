<?php

echo "Jméno: ".$_POST["user_name"]."<br>";
echo "Heslo: ".$_POST["user_password"]."<br>";

session_start();
if (($_POST["user_name"]) == "admin" && $_POST["user_password"] == "admin") //isset --> kontroluje jestli je nastaveno (není prázdné)
{
    $_SESSION["user_name"] = $_POST["user_name"];
    $_SESSION["user_password"] = $_POST["user_password"];
    echo "uživatel je autorizovaný";
}

if (isset($_SESSION["user_name"])) 
{
    $name = $_SESSION["user_name"];
    $paswd = $_SESSION["user_password"];
    echo 
    '
    <form action="" method="get">
        <input type="submit" name="logout" value="Odhlásit se">
    </form>
    ';
    echo isset($_GET["logout"]) ? "odhlásit" : "neodhlásit";
    if (isset($_GET["logout"]))
    {
        session_unset();
        session_destroy();
    }
}
else
{
    echo "uživatel není autorizovaný";
}

?>
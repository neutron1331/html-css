<?php

if (!isset($_POST["user_name"])) {$_POST["user_name"] = "";}
if (!isset($_POST["user_password"])) {$_POST["user_password"] = "";}

echo "Jméno: ".$_POST["user_name"]."<br>";
echo "Heslo: ".$_POST["user_password"]."<br>";

session_start();
if (($_POST["user_name"]) == "admin" && $_POST["user_password"] == "admin") //isset --> kontroluje jestli je nastaveno (není prázdné)
{
    $_SESSION["user_name"] = $_POST["user_name"];
    $_SESSION["user_password"] = $_POST["user_password"];
    echo "uživatel je autorizovaný";
}

//session a cookies fungujou podobně, cookies spravuje javascript

if (isset($_SESSION["user_name"])) 
{
    $name = $_SESSION["user_name"];
    $paswd = $_SESSION["user_password"];    
}
else
{
    echo "uživatel není autorizovaný";
}
echo 
    '
    <form action="" method="get">
        <input type="submit" name="logout" value="Odhlásit se">
    </form>
    ';
if (isset($_GET["logout"]))
{
    session_unset();
    session_destroy();
}
?>
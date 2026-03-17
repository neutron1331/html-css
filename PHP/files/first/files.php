<?php

// basename() Returns the filename component of a path
// mkdir()	Creates a directory
// rmdir()	Removes an empty directory
// file()	Reads a file into an array
// copy()	Copies a file
// unlink()	Deletes a file
// is_dir()	Checks whether a file is a directory
// rename()	Renames a file or directory

//fopen()   Create file
//readfile()Reads file
//fwrite()  wites to file //command might be incorrect

$cwd = getcwd();
$cwd = $cwd."/edditable_folder";
$func = "";

echo"<h3>current filename is ".$cwd."</h3>";

$border = 1;
echo"<table border=".$border.">";
echo"<tr><td>tree before edit</td></tr>";
foreach (scandir($cwd) as $dir)  
{
    if(!(basename($dir) === "." or basename($dir) === ".."))
    {
        echo"<tr><td>".$dir."</td></tr>";
    }
}
echo"</table>";


echo"<h3>ur in ";

if (isset($_POST["create_dir"]))
{
    echo"create </h3>";
    $func = $_POST["create_dir"];
    $func = $cwd."/".$func;

    if (!is_dir($func))
    {
        mkdir($func);
        echo"<h3>složka úspěšně vytvořena</h3>";
    }
    else
    {
        echo"<h3>složka už existuje</h3>";
    }
}

if (isset($_POST["delete_dir"]))
{
    $delete_dir = $_POST["delete_dir"]; 
}

if (isset($_POST["button_delete"]))
{
    $delete_dir = basename($_POST["button_delete"]);   
}

if (isset($delete_dir))
{
    echo"delete </h3>";
    $func = $delete_dir;
    $func = $cwd."/".$func;

    if (is_dir($func))
    {
        rmdir($func);
        echo"<h3>složka úspěšně smazána</h3>";
    }
    else
    {
        echo"<h3>složka neexistuje</h3>";
    }
}


echo"<table border=".$border." style='border-collapse: collapsed;'>";
echo"<tr><td colspan='2'>tree after edit</td></tr>";
foreach (scandir($cwd) as $dir)  
{
    if(!(basename($dir) === "." or basename($dir) === ".."))
    {
    echo"
    <tr>
        <td>".$dir."</td>
        <td>
            <form style='display:inline;' method='POST'>
                <button style='width:100%' type='submit' name='button_delete' value=".$dir.">Delete</button>
            </form>
        </td>
    </tr>";
    }
}
echo"
<tr>
    <td colspan='2'>
        <form style='display:inline;' method='POST'>
            <label for='create_dir'>Name of the new directory: </label>
            <input type='text' id='create_dir' name='create_dir' required>
            <button type='submit'>Submit</button>
        </form>
    </td>
</tr>";
echo"</table>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
</head>
<body>
    <h2>Directories</h2>
    <form action="files.php" method="POST">
        <label for="create_dir">Name of the new directory: </label>
        <input type="text" id="create_dir" name="create_dir" required><br><br>

        <button type="submit">Submit</button>
    </form>

<br><br>

    <form action="files.php" method="POST">
        <label for="delete_dir">Name of the directory to be deleted: </label>
        <input type="text" id="delete_dir" name="delete_dir" required><br><br>

        <button type="submit">Submit</button>
    </form>

<br><br>

    <form action="files.php" method="POST">
        <button type="submit">Just enter</button>
    </form>
</body>
</html>
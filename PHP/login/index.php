<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
<section>
    <h1>Login Form</h1>

    <form action="login.php" method="post">
        <div id="input_texts">
            <div id="input_text">
                Jméno: <input class="input_text" type="text" name="user_name" required minlength="3"><br>
            </div>        
            <div id="input_text">
                Heslo: <input class="input_text" type="text" name="user_password" required minlength="5"><br>
            </div>
        </div>  
        <input class="button_input" type="submit">
    </form>
</section>
    

</body>
</html> 
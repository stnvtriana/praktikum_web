<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    #login-form {
        width: 300px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #bca972;
        background-color: #824848;
        font: 1em sans-serif;
        font-size: 20px;
        color: #d2c6c6;
        border-radius: 20px;
    }
</style>
<body>
    <div id = "login-form">
    <form enctype  ="multipart/form-data" action= "simpan_login.php" method = "post">
    Username :   <input type = "text" name = "nama"><br><br>
    Password : <input type = "password" name = "password"><br><br>
    <input type = "submit" value = "Login"
      style="background-color: #b7a79c; color: #824848; border: none; border-radius: 4px; padding: 8px 15px; cursor: pointer; width: 100%; font-weight: bold;">
    </form>
    </div>
</body>
</html>
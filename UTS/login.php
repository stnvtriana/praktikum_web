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
        border: 1px solid #caae58;
        background-color: #cc8c8c;
        font: 1em sans-serif;
        font-size: 20px;
        color: #b34f4f;
        border-radius: 20px;
    }
      body {
            background-color: rgb(214, 117, 117);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px;
        }
</style>
<body>
    <div id = "login-form">
    <form enctype  ="multipart/form-data" action= "simpanLogin.php" method = "post">
    Username :   <input type = "text" name = "nama"><br><br>
    Password : <input type = "password" name = "password"><br><br>
    <input type = "submit" value = "Login"
      style="background-color: #a7856e; color: #b34f4f; border: none; border-radius: 4px; padding: 8px 15px; cursor: pointer; width: 100%; font-weight: bold;">
    </form>
    </div>
</body>
</html>
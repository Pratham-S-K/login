<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            width: 300px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
        }
        .login-container h2 {
            text-align: center;
            color: #333;
        }
        .login-form input[type="text"],
        .login-form input[type="password"],
        .login-form input[type="submit"] {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #f2f2f2;
            box-sizing: border-box;
        }
        .login-form input[type="text"]:focus,
        .login-form input[type="password"]:focus {
            outline: none;
            background-color: #e6e6e6;
        }
        .login-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        .login-form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h3><?php
        echo"${_GET['error']}";
        ?>
        </h3>
        <h2>Login</h2>
        <form class="login-form" method="post" action="authenticate.php">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>

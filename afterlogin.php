<!-- welcome.php -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      .welcome-container {
        width: 300px;
        margin: 100px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
      }
      .welcome-container h2 {
        color: #333;
      }
      .welcome-container p {
        color: #555;
      }
      .welcome-container a {
        color: #4caf50;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div class="welcome-container">
      <h2>
        Welcome, <?php echo $_GET['username']; ?>
      </h2>
      <p>You have successfully logged in.</p>
      <p><a href="login.php">Logout</a></p>
    </div>
  </body>
</html>

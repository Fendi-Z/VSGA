<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard User</title>
    <style>
      h1 {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <?php
      session_start();
      if ($_SESSION['status'] == 'login') {
        echo "<h1>Selamat Datang " . $_SESSION['username'] . "</h1><br>";
        echo "<a href='session_logout.php'>Logout</a><br>";
      }
    ?>
  </body>
</html>

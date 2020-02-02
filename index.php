<?php
  include 'loader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Salmon: Log In</title>
  <link rel="stylesheet" href="./css/style.css">
  <script>
  </script>
</head>
<body>
  <img src="./assets/images/logInDesign.svg" alt="Design">
  <form method="POST" id="login-form">
    <h1 class="login-title">Salmon</h1>
    <input type="text" placeholder="Username">
    <input type="text" placeholder="Password...">
    <button>Log In</button>
  </form>
    
  <?php
  #$users = new ViewUser();
  #echo $users->showAllUsers();  
  ?>

</body>
</html>
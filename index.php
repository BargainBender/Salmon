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
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous" defer></script>
  <script src="./js/index.js" defer></script>
</head>

<body>
  <img
    src="https://firebasestorage.googleapis.com/v0/b/salmon-b115c.appspot.com/o/logInDesign.svg?alt=media&token=cd3d5cb0-f71d-4f19-994a-3d2745643d18"
    alt="Design">
  <div id="login-form">
    <h1 class="login-title">Salmon</h1>
    <input type="text" placeholder="Username">
    <input type="text" placeholder="Password...">
    <button>Log In</button>
  </div>

  <?php
  #$users = new ViewUser();
  #echo $users->showAllUsers();  
  ?>

</body>

</html>
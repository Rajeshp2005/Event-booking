<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <title>Please login here:</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background: url(/img/tasbir.jpg) no-repeat;
        background-position: absolute;
        background-size: cover;

        margin: 30px;


      }

      .login-form {
        width: 25%;
        height: 80vh;
        margin: 0 auto;
        background: url(/img/wed1.jpg) rgba(0, 0, 0, 0) no-repeat;
        background-blend-mode: darken;
        border-radius: 10%;
        padding: 30px;
        box-shadow: 12px 4px 17px 12px black;
        text-align: center;
        align-items: center;
        justify-content: center;


      }

      .login-form h2 {
        color: lightgoldenrodyellow;
        text-align: center;
        margin-bottom: 110px;
        text-shadow: 4px 4px 8px black;

      }

      .login-form input[type="text"],
      .login-form input[type="password"] {
        padding: 10px;
        margin-bottom: 50px;
        border-radius: 10px;
        box-shadow: 4px 4px 8px black;
      }


      .login-form input[type="submit"] {
        padding: 10px;
        background-color: white;
        color: black;
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.5 ease-in;
        display: inline-block;



      }

      .login-form label {

        display: inline-block;
        margin-bottom: 10px;
        font-size: 1.3rem;
        color: gold;
        text-shadow: 4px 4px 8px black;
        font-weight: bold;
        text-align: center;
      }

      .login-form input[type="submit"]:hover {
        background: black;
        color: white;
        box-shadow: 2px 2px 3px yellow;
      }
    </style>
  </head>

<body>
  <div class="login-form">
    <h2><em><u>LOGIN</u> <u>HERE:</u></em></h2>
    <form method="post" action="/php/login.php">
      <label for="name">Name:</label>
      <input type="text" name="name" placeholder="name" required><br>
      <label for="password">Password:</label>
      <input type="password" name="password" placeholder="Password" required><br>
      <input type="submit" value="Login" class="btn" name="send">
    </form>
  </div>
</body>

</html>

<?php
if (isset($_POST['name']) || isset($_POST['password']) || isset($_POST['address']) || isset($_POST['email']) || isset($_POST['phone'])) {

  $Name = $_POST['name'];
  $Password = $_POST['password'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "registration";
  $conn = mysqli_connect($servername, $username, $password, $database);
  if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
  } else {
    $query = "SELECT * FROM rg WHERE name = '$Name' AND password = '$Password'";
    $result = mysqli_query($conn, $query);


    if (mysqli_num_rows($result) == 1) {

      session_start();
      $_SESSION['username'] = $name;

      header("Location: /php/index.php");
      exit();
    } else {

      echo "Invalid username or password.";
    }
  }
}
?>
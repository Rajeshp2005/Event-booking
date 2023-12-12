
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile </title>
    <style>
        /* Add your CSS styling here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 200px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container button{
            background-color: goldenrod;
            color: black;
            border-radius: 14px;
            padding: 2px;
            font-weight: 900;
            margin: 20%;
        }
        .container button:hover{
            background-color: aqua;
            color: black;
           transition: all 0.5s linear;
           cursor: pointer;
        }
        .container button a{
            color: black;
           
        }

        /* Add more styles as needed */
    </style>
</head>
<body>
    <div class="container">
        <h2> MY Profile</h2>
        <p>Welcome, <?php session_start(); echo $_SESSION['user'];?>!</p>

      
            <button type="submit" name="changePassword"><a href="./changepw.php"style="text-decoration: none;">Change Password</a></button>
        <button><a href="./cancel.php" style="text-decoration: none;">Cancel Booking</a></button><br>
        <a href="/admin,guest,member/login.php" style="color: red;">logout</a>
        <a href="/admin,guest,member/admin/index.php" style="margin-left: 50%;color:black;">back</a>
    </div>
</body>
</html>

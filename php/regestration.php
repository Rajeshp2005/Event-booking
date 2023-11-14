<!DOCTYPE html>
<html>
<head>
  <title>Event Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: rgba(0px 0px 0px );
      margin: 0;
      padding: 20px;
    }

    h2 {
      color: #333;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      margin: 0 auto;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="tel"],
    .form-group input[type="password"],
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }


    .form-group input.btn{
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    .form-group input.btn1 {
      background-color: red;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Event Registration Form</h2>
    <form id="registrationForm" action="/php/register.php" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" >
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone">
      </div>
      <div class="form-group">
     <input type="submit" value="Register" class="btn" name="send">
     <input type="reset" value="cancel" class="btn1" name="send">
        
      </div>
    </form>
  </div>
</body>
</html>
       
</body>
</html>

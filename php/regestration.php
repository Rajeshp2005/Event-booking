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
      text-align: center;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 4px 2px 5px  2px rgba(0, 0, 0, 0.7),-4px -2px 5px  2px rgba(0, 0, 0, 0.7);
      max-width: 400px;
      margin: 3.5% auto;
      background: url(/img/register.jpeg)no-repeat;
      background-size: cover;

    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 15px;
      font-weight: 900;
      transform: translate(41.5%,50%);
      color: black;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="tel"],
    .form-group input[type="password"],
    .form-group select {
      width: 50%;
      padding: 10px;
      color: aqua;
      background: url(/img/form.jpeg);
      border: 1px solid #ccc;
      border-radius: 14px;
      font-size: 16px;
      transform: translate(40%,7%);
      box-shadow: 1px 1.5px 1px 1.5px gold,-1.7px -1.5px 1px 1.5px gold ;
    }


    .form-group input.btn{
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 14px;
      cursor: pointer;
      font-size: 16px;
      transform: translate(80%,7%);
    }
    .form-group input.btn:hover{
      opacity: 0.6;
      transition: all 0.5s ease-in;
    }
    .form-group input.btn1:hover{
      opacity: 0.6;
      transition: all 0.5s ease-in;
    }
    .form-group input.btn1 {
      background-color: red;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 14px;
      cursor: pointer;
      font-size: 16px;
      transform: translate(130%,7%);
    }
  </style>
</head>
<body>

  <div class="container">
    <h2><em>Event Registration Form</em></h2>
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
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone">
      </div>
      <div class="form-group">
     <input type="submit" value="Register" class="btn" name="send" onclick="alert('Congratulations,you are registered to our membership,now you can login to our page')">
   <input type="reset" value="cancel" class="btn1" name="send" onclick="alert('really?')">
        
      </div>
    </form>
  </div>
</body>
</html>
       
</body>
</html>

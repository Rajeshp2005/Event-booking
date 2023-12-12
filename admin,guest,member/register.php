<?php
    include './admin/config.php';
    $errname = $erremail = $errpwd =$errphone =$status= ' ';
    if (isset($_POST['register'])) {
    $user_id=$_POST['userid'];
    $username=$_POST['username'];
    $pwd=($_POST['password']);
    $email=$_POST['email'];
    $phone=$_POST['number'];
    $numberpattern="/^(98[0-9]{8})$/";
    $hash=md5($pwd);
    $res="SELECT * FROM users WHERE fullname='$username' AND email='$email' AND phone_number='$phone'";
    $query=mysqli_query($con,$res);

    if(mysqli_num_rows($query)>=1)
   {
    exit("user already exists");
   }

    if(empty($username)){
      // echo ("<script>
      // window.alert('Please Enter fullname!!');
      // </script>");
      $errname="Please Enter Fullname!";

    }

    if(empty($email)){
      // echo ("<script>
      // window.alert('Please Enter Email!!');
      // </script>");
      $erremail="Please Enter Email!";
    }
    else if((!filter_var($email,FILTER_VALIDATE_EMAIL))){
      // echo ("<script>
      // window.alert('Please Enter Valid Email!!');
      // </script>");
      $erremail="Please Enter Valid Email!";
    }
    
    if(empty($pwd)){
      // echo ("<script>
      // window.alert('Please Enter Password!!');
      // </script>");
      $errpwd="Please Enter Password!";
    }
  
    //  else if((strlen($pwd)<8)){
    // //   echo ("<script>
    // //   window.alert('Please Enter Password of 8 or more characters!!');
    // // </script>");
    // $errpwd="Please Enter Password of 8 or more characters!";
    // }
  

    if(empty($phone)){
      $errphone="Please Enter Phone Number of 10 digits!";
    }

    else if(!preg_match($numberpattern,$phone)){
      $errphone="Number must start from 98";
    }
     else{   
        $sql = "INSERT INTO `users`(`user_id`, `fullname`, `email`, `phone_number`, `password`) VALUES ('$user_id','$username','$email','$phone','$hash')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<script type='text/javascript'>alert('Registration Successful');</script>";
        } else {
            echo "<script type='text/javascript'>alert('Registration failed');</script>" . mysqli_error($con);
        }
      }
    
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="dist/css/style.min.css" />
  <title>Tasbir:Registration from</title>
</head>


<body>
  <div class="main-container">
   
  </div>
  <header>
    <div class="container">
      <div class="container__form">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
          <h2 class="title">Create an account</h2>
         
          <div>
          <label>FullName</label><br>
          <input type="text" name="username"  />
          <div class="formerror"><?php echo $errname;?></div>
          </div>
          <div>
          <label>user id</label><br>
          <input type="number" name="userid" placeholder="enter in number"/>
          <div class="formerror"></div>
          </div>
          <div>
          <label>Email</label><br>
          <input type="email" name="email" />
          <div class="formerror"><?php echo $erremail;?></div>
          </div>
          <div>
          <label>Password</label><br>
          <input type="password" name="password"  />
          <div class="formerror"><?php echo $errpwd;?></div>
          </div>
          <div>
          <label>Phone Number</label><br>
          <input type="number" name="number"  />
          <div class="formerror"><?php echo $errphone;?></div>
          </div>
          <input type="submit" name="register" value="submit" style="margin-top: -2%;"/>
        </form>

        <p>
          Have An Account? <span><a href="login.php">login Now</a></span>
        </p>
      
  </header>
  
</body>

</html>
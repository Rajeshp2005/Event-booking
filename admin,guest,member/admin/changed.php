
<?php  
   
   include './config.php'; 
    $erremail=$errpwd=$error=" ";
    if(isset($_POST['continue'])){
      $email=$_POST['user_id'];
      $pwd=$_POST['oldpassword'];
    
      $password = md5($pwd);
      // $Role=$_POST['role'];

 
      if(empty($pwd)){
        $errpwd="Please Enter Password!";  
        // echo ("<script>
        
        //     window.alert('Please Enter Password !!');
        //   </script>");
      }
    
      //  if((strlen($pwd)<8 || strlen($pwd)>25)){
      //   //   echo ("<script>
      //   //   window.alert('Please Enter Password of 8 or more characters!!');
      //   // </script>");
      //   $errpwd="Please Enter Password of 8 or more characters!";  

      //   }
      

      else{
  
      $sql="SELECT * FROM users WHERE user_id='$email' AND password='$password'";
      $result=mysqli_query($con,$sql);

      if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){

           session_start();
          $_SESSION['user'] = $row['user_id'];
            header('location: /admin,guest,member/admin/finaln.php');
          }

        }
        else{
            echo ("<script>
                            window.alert('invalid user_id or password');
                            window.location.href = 'changepw.php';
                        </script>");
      }
       
      }
    }
    

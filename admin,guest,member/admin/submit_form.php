<style>
  body{
    background: url(/img/login.avif)no-repeat;
    background-size: cover;
    text-align: center;

  }
  .thankyou{
    margin-top: 25%;
    color:blue;
    font-weight: 900;
  }
  .thankyou strong{
  
    color: green;
  }
  button{
    background: black;
    color: white;
    font-size: 1.2rem;
  }
  button:hover{
    background: aqua;
    color: black;
    transition: all 0.4s ease-in-out;
  }
</style>
<?php
  
    if(isset($_POST['name']) ||isset($_POST['email']) ||isset($_POST['phone']) ||isset($_POST['address']) ||isset($_POST['Date']) ||isset($_POST['duration']) ||isset($_POST['location']) ||isset($_POST['message'])  )
      {
      $user_id = $_POST['userid'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $category = $_POST['category'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $Date = $_POST['Date'];
      $Duration = $_POST['duration'];
      $message = $_POST['message'];
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "wdbooking";
    
      
      $conn = mysqli_connect($servername, $username, $password, $database);
     
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
       
        $sql = "INSERT INTO `contacts` (`user_id`,`Name`, `Email`,`category`, `phone`, `address`, `Booked Date&Time`,`Duration`,`message`) VALUES ('$user_id','$name','$email','$category','$phone','$address','$Date','$Duration','$message');";
        $result = mysqli_query($conn, $sql);
       

 
        
          if ($result) {
            echo ("<script>
                    window.alert('sucessfully booked.Thanks for booking we will catch you asap!!!');
                    window.location.href = 'index.php';
                </script>");}
         else {
            echo "Data not inserted: " . mysqli_error($con);
        }}}

?>


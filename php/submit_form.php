
<?php
    
    if(isset($_POST['name']) ||isset($_POST['email']) ||isset($_POST['phone']) ||isset($_POST['address']) ||isset($_POST['Date']) ||isset($_POST['location']) ||isset($_POST['message'])  )
      {
      
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $Date = $_POST['Date'];
      $location= $_POST['address'];
      $message = $_POST['message'];
     
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "contacts";
    
      
      $conn = mysqli_connect($servername, $username, $password, $database);
     
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
       
        $sql = "INSERT INTO `contactus` (`Name`, `Email`, `phone`, `address`, `Booked Date`, `event location`, `message`) VALUES ('$name', '$email', '$phone', '$address', '$Date', '$location', '$message');";
        $result = mysqli_query($conn, $sql);
       

 
        if($result){
          echo '<div class="thankyou" role="alert">
          <strong>Thank you!!!</strong> we will call you later to disscuss on this.
         
        </div>';
        }
        else{
           
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          
        </div>';
        }

      }
    }

    
  
?>


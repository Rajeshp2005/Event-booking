
<h1>you are registered.thank you now you are the member</h1>
<?php 
    if(isset($_POST['name']) ||isset($_POST['password']) ||isset($_POST['address']) ||isset($_POST['email']) ||isset($_POST['phone']) )
    {

$servername = "localhost";
$username = "root";
$password = "";
$database = "registration";




    $Name = $_POST['name'];
    $Password = $_POST['password'];
    $Address = $_POST['address'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
   

    
    $conn = mysqli_connect($servername, $username, $password, $database);
   
    
    
      if (!$conn)
       
        {
          die("Sorry we failed to connect: ". mysqli_connect_error());
          
         
        }

         
      
     
      else{ 
        
        $sql = "INSERT INTO `rg` ( `Name`, `Password`, `Address`, `Email`, `Phone Number`) VALUES ('$Name', '$Password', '$Address', '$Email', '$Phone')";
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
<a href="/admin,guest,member/front.php">back</a>
    
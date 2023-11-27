<style>
  body{
    background: url(/img/t1.jpg)no-repeat;
    background-size: cover;
    text-align: center;
  }
  h3{
      color: yellow;
      background: rgba(0, 0, 0, .3);
      margin-top: 22%;
      font-weight: 900;
      font-size: 1.3rem;
      text-transform: uppercase;
    }
    button{
             color: black;
             background-color: white;
             text-align: center;
             align-items: center;
             font-size: 1.5rem;
    }
    button:hover{
             color: black;
             background-color: aqua;
             transition: all 0.5s ease-in-out;
    }
</style>
<h3>you are registered.now you are the member....go back to the login page</h3>
<a href="/admin,guest,member/front.php"><button>Back</button></a>
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
          echo 'hi';
        }
        else{
            
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          
        </div>';
        }

      }
      
    }
?>

    
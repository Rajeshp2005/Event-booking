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
     
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
         
        else{

$sql = "SELECT * FROM rg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    $file = fopen("user.txt", "w");

    while ($row = $result->fetch_assoc()) {
        fwrite($file, "Name " . $row["Name"] . "\n");
        fwrite($file, "Password " . $row["Password"] . "\n");
      
    }

    fclose($file);
    echo "Data transferred to user.txt successfully.";
} else {
    echo "No data found in the database.";
}}
    }


?>

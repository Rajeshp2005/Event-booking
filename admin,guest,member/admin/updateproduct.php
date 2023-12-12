<?php
$id = $_GET['id'];

include 'config.php';

if(isset($_POST['update'])){
    $fname=$_POST['productname'];
    $fprice=$_POST['productprice'];
    $fdesc=$_POST['productdesc'];
    
     //to store image details

$target_dir="../images/";
    $a=uniqid().$_FILES["img"]["name"];
    $target_file=$target_dir.$a;

//store image to the path folder

if(move_uploaded_file($_FILES["img"]["tmp_name"],$target_file)){
    // die ('success');
}

    $sql = "UPDATE services SET product_name='$fname' , product_desc = '$fdesc',
         product_price='$fprice',image='$a' where product_id = '$id'";
		mysqli_query($con,$sql);
   
		if (mysqli_affected_rows($con)==1) {
          // header("location:product.php");
      echo ("<script>
            window.alert('Data Updated successfully');
            window.location.href='product.php';
            </script>");


	 }
	 else{
	 	echo "Data update failed".mysqli_error($con);
	 }
}
$sql1 = "select * from services where product_id = '$id'";
$res = mysqli_query($con, $sql1);
$data = mysqli_fetch_assoc($res);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>dashboard</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

</head>

<body>
  <div class="container-fluid dashboard font">
    <div class="row min-vh-100">
      <div class="col-sm-2  px-4 ">
        <h5 class="text-white text-uppercase pt-4 ">Welcome to tasbir</h5>
        <nav class="">
          <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="product.php" class="font active">services</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Customer Details</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="../login.php">logout</a></li>
          </ul>
        </nav>
      </div>

      <div class="col-sm-10 p-3">
        <div class="row">
          <h5 class="text-end h5 fw-normal p-2">Welcome user</h5>
          <hr>
        </div>
        <p class="text-capitalize h4 ">Update services</p>
        <form enctype="multipart/form-data" method="post">

                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-capitalize">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="productname" value="<?php echo $data['product_name'];?>">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-capitalize">price</label>
                    <input type="number" class="form-control" id="number" name="productprice" value="<?php echo $data['product_price'];?>">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label text-capitalize">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="productdesc"><?php echo $data['product_desc'];?></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-capitalize">Image</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" name="img"><br>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" name="update">submit</button>
                  </div>
                </form>
</div>
</div>
</div>



  <script>
    // disable negative values
var number = document.getElementById('number');

// Listen for input event on numInput.
number.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58) 
      || e.keyCode == 8)) {
        return false;
    }
}
</script>
<?php
  session_start();
  if(!isset($_SESSION['admin'])){
    header ('location:../index.php');
  }
  ?>
<?php
include 'config.php';
$sql = "SELECT * FROM contacts ORDER BY 'Booked Date&Time' DESC";
$result = mysqli_query($con, $sql);
$data = [];
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    array_push($data, $row);
  }
}
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
        <h5 class="text-white text-uppercase pt-4 ">Wedding Booking System</h5>
        <nav class="text-capitalize">
          <ul>
            <li><a href="dashboard.php">Home</a></li>
            <li><a href="product.php">Services</a></li>
            <li><a href="booking.php" class="font active">Booking</a></li>
            <li><a href="customerdetails.php" >User Details</a></li>
            <li><a href="../adminlogout.php">logout</a></li>
          </ul>
        </nav>
      </div>
      <div class="col-sm-10 p-3">
        <div class="row">
          <h5 class="text-end h5 fw-normal p-2">Welcome <?php echo $_SESSION['admin'];?></h5>
          <hr>
        </div>
        <p class="text-capitalize h4 ">Booking details</p>

        <!---display product details --->
        <table class="table table-bordered mt-3">
          <thead class="table-dark">
            <tr class="text-capitalize ">
            <th>user_id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>category</th>
            <th>address</th>
            <th>Duration</th>
            <th>Booked Date & Time</th>
            <th>Message</th>
            <th>Change status</th>
            <th>Action</th>
            </tr>
          </thead>


          <?php
            $i=1;
            foreach ($data as $d) {
          ?> 
          <tbody>
            <tr>
            <td><?php echo $d['user_id']; ?></td>
            <td><?php echo $d['Name']; ?></td>
            <td><?php echo $d['Email']; ?></td>
            <td><?php echo $d['phone'];?></td>
            <td><?php echo $d['category'];?></td>
            <td><?php echo $d['address'];?></td>
            <td><?php echo $d['Duration'];?></td>
            <td><?php echo $d['Booked Date&Time'];?></td>
            <td><?php echo $d['message'];?></td>
            <td>
                          
                <select name="status" class="form-select  form-select-sm">
                  <option>Select</option>
                  <option value="Delivered">Booked</option>
                  <option value="Pending">Pending</option>
                  <option value="Cancelled">Cancelled</option>
                </select>
                <input type="hidden" name="id" value="<?php echo $d['user_id']; ?>" >
              </form>
            </td>
            <td>
              <button class="btn btn-danger"><a class="text-decoration-none text-white" href="deleteorder.php?id=<?php echo $d['user_id'];?>" onclick="return confirm('Are you sure you want to delete this booking?');">Delete</a> </button>
            </td>
            </tr>
          </tbody>
          <?php } ?>
        </table>


        </div>
      </div>
    </div>
  </div>





 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>

</html>
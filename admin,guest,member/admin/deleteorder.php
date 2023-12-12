<?php
$id = $_GET['id'];

include('config.php');

$sql = "DELETE FROM contacts WHERE  sn=$id";

if (mysqli_query($con, $sql)) {
    echo ("<script>
            window.alert('Data Deleted successfully');
            window.location.href='booking.php';
            </script>");
} else {
    die("not deleted" . mysqli_error($con));
}
?>
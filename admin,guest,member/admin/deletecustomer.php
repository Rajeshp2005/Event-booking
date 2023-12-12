<?php
$id = $_GET['id'];

include('config.php');

$sql = "DELETE FROM users WHERE user_id=$id";

if (mysqli_query($con, $sql)) {
    echo ("<script>
            window.alert('Data Deleted successfully');
            window.location.href='customerdetails.php';
            </script>");
} else {
    die("not deleted" . mysqli_error($con));
}
?>
<?php
session_start();
include './config.php';

if(isset($_POST['cancel_btn']))
{
    $id = $_POST['user_id'];

    $query = "DELETE FROM contacts WHERE user_id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo ("<script>
                    window.alert('your booking is cancelled');
                    window.location.href = 'myprofile.php';
                </script>");
    }
    else
    {
        echo ("<script>
        window.alert('your given id is not booked yet');
        window.location.href = 'myprofile.php';
    </script>");
    }
}

?>
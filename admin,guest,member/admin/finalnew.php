<?php
               include './config.php';
                    if(isset($_POST['changepassword']))
                    {   
                        $user_id = $_POST['user_id'];
                        $newpassword = $_POST['newpassword'];
                        $hash=md5($newpassword);
                      
                            $query = "UPDATE users SET password='$hash' WHERE user_id='$user_id'  ";
                            $query_run = mysqli_query($con, $query);
                            if($query_run)
                        {
                            echo ("<script>
                            window.alert('password changed!!!!.');
                            window.location.href = '/admin,guest,member/login.php';
                        </script>");
                        }
                        else
                        {
                            echo '<script> alert("Data Not Updated"); </script>';
                        }
                          }
                          else{
                            // echo ("<script>
                            //   window.alert('Invalid Email and Password!!!');</script>");
                            $error="Invalid Email and Password!";
                          
                        }
                       
                    
                    ?>
                    

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasbir:We click for memories</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  
    <link rel="stylesheet" href="/css/style.css">
    <!-- Start of Async Drift Code -->


</head>
<body>
    


<header>


    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#Services">Services</a>
        <a href="#clients">clients</a>
        <a href="#team">team</a>
        <a href="#contact">Book Date</a>
         <a href="/admin,guest,member/admin/myprofile.php" style="text-decoration: none;font-size:.9rem;"><h5 class="text-end h5 fw-normal p-2" style="border-radius: 50%"><?php session_start(); echo $_SESSION['user'];?></h5></a>
       
</header>



<section class="home" id="home">
<div class="content">
         <h2>TASBIR</h2>

        <h3>We click for Memories!</h3>
        <p>Contact us for photoshoot and videoshoot for party, event</p>
        <a href="https://www.facebook.com/weclickformemories"target="_blank" class="btn">more</a>
        <a href="/admin,guest,member/admin/chat.php" class="btn">chat with bot</a>
  
</div>

</section>






<section class="Services" id="Services">
<?php
   
   include './config.php';

   $status=" ";

if(isset($_POST['code']) && $_POST['code']!==""){
       $code=$_POST['code'];

       $result = mysqli_query(
           $con,"SELECT * FROM `services` WHERE `product_id`='$code'"
           );
           $row = mysqli_fetch_assoc($result);
           $name = $row['product_name'];
           $code = $row['product_id'];
           $price = $row['product_price'];
           $image = $row['image'];
        
            
    }
    ?>
   
<div class="menu-list">
      <h2 class="title" style="margin-left:40%;color:white;text-decoration:underline;font-size:3rem;">OUR SERVICES</h2>
    </div>
    <div class="message_box" style="margin:10px 0px;" onclick="this.remove();">
<?php echo $status; ?>
</div>
    <div class="card-container">
   <?php

$result = mysqli_query($con,"SELECT * FROM `services`");
while($row = mysqli_fetch_assoc($result)){
  echo "<div class='card'>
 
  <form method='post' action=''>
  <img class='image' src='../img/".$row['image']."' />
  <div class='card_body'>
  <input type='hidden' name='code' value=".$row['product_id']." />
  <div class='name card_title'>".$row['product_name']."</div>
  <div class='desc card_desc'>".$row['product_desc']."</div>
  <div class='price card_price'>Rs ".$row['product_price']."</div>
 <button type='submit'> <a href='#contact'>Book Now</a></button>
  </div>
  </form>
  </div>";
  } 
mysqli_close($con);
?>


    </div>
  </div>

</section>



<section class="clients" id="clients">

    <div class="heading">
        <h1>our previous clients</h1>
        <img src="/images/header-img.png" alt="" srcset="">
    </div>
  
    <div class="row">

        <div class="box-container">
            <div class="box">
                <img src="/img/sk.jpg" alt="">
                <div class="info">
                    <h3>01.Sanjiv Weds Karuna </h3>
                    <p> <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet illo aut repudiandae nihil quidem perspiciatis natus placeat, inventore, vitae, quia totam ad dolores velit. Cumque, alias ullam. Nihil, aperiam hic! <i class="fas fa-quote-right"></i> </p>  <br><br><br><br><br>
                </div>
            </div>
            <div class="box">
                <img src="/img/ss.jpg" alt="">
                <div class="info">
                    <h3>02.Subarna & Sudikshya</h3>
                    <p> <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet illo aut repudiandae nihil quidem perspiciatis natus placeat, inventore, vitae, quia totam ad dolores velit. Cumque, alias ullam. Nihil, aperiam hic! <i class="fas fa-quote-right"></i> </p>
                </div>
            </div>
        </div>

        <img src="/images/divider.png" class="divider" alt="">

        <div class="box-container">
            <div class="box">
          
            
                <div class="info"><h3>03.SHIVA💜PRATIMA</h3>
                 
                <p> <i class="fas fa-quote-left"></i>Walking with your hands in mine and mine in yours, that's exactly where I want to be always. <i class="fas fa-quote-right"></i> </p>
                </div>
                <img src="/img/sp.jpg" alt=""><br><br><br><br><br>
            
                   </div>
       
            
            <div class="box">
                <div class="info">
                    <h3>04. a & b</h3>
                    <p> <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet illo aut repudiandae nihil quidem perspiciatis natus placeat, inventore, vitae, quia totam ad dolores velit. Cumque, alias ullam. Nihil, aperiam hic! <i class="fas fa-quote-right"></i> </p>
                </div>
                <img src="/img/t2.jpg" alt="">
            </div>
        </div>

    </div>

</section>



<section class="team" id="team">

    <div class="heading">
        <h1>our creative teams</h1>
        <img src="/images/header-img.png" alt="">
    </div>

    <div class="box-container">
        <div class="box">
            <img src="/Rajeshp.jpg" alt="">
            <h3>Rajesh pandey</h3>
            <span>managing director</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta nisi ea quisquam ipsa molestias itaque, quod quis id doloremque similique!</p>
            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100065321473452" class="fab fa-facebook-f"></a>
                <a href="" class="fab fa-twitter"></a>
                <a href="" class="fab fa-instagram"></a>
                <a href="" class="fab fa-whatsapp"></a>
            </div>
        </div>
        <div class="box">
            <img src="/img/owner.jpg" alt="">
            <h3>Manoz pandey</h3>
            <span>Owner and photographer</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta nisi ea quisquam ipsa molestias itaque, quod quis id doloremque similique!</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-whatsapp"></a>
            </div>
        </div>
        <div class="box">
            <img src="/img/sa.jpg" alt="">
            <h3>Saroj rimal</h3>
            <span>photographer</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta nisi ea quisquam ipsa molestias itaque, quod quis id doloremque similique!</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-whatsapp"></a>
            </div>
        </div>
    </div>
 

</section>



<section class="contact" id="contact">

    <div class="heading">
        <h1>BOOK DATE</h1>
        <img src="/images/header-img.png" alt="" srcset="">
   
    </div>

    <form action="/admin,guest,member/admin/submit_form.php" method="post" class="contact-form">
        <div class="inputBox">
        <input type="text" placeholder="your user_id" name="userid">
            <input type="text" placeholder="your name" name="name">
            <input type="email" placeholder="your email" name="email">
            <input type="text" placeholder="category" name="category">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="your number" name="phone" required>
            <input type="text" placeholder="your address" name="address" required>
          <input type="datetime-local"  name="Date" required>
       <input type="duration" placeholder="duration?" name="duration" required>
        </div>
        <textarea placeholder="drop a small message that you want to give us" name="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Book" class="btn" name="send">
  
</section>



<div class="footer"> created by <span class="neonText">Tasbir</span> | all rights reserved! <span class="neonText">For others inquery call us at <a href="tel:+9779841208969">9841208969</a></span>



<script> 

let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('nav-toggle');
});

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('nav-toggle');
}

</script>


</body>
</html>

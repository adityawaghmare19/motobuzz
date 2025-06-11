<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
  
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpeg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Begin a bike enthusiast our self with thousands of kilometers clocked in and years of experience we know the importance of good riding gears , we provide high quality and geneuine products to our customers without compromising your safety incase of a crash</p>
         <p>Its always recommended to be geared up for a ride and follow the ATGATT rule to ensure you have good abression resistance and impact absorption incase you came in contact with the tarmac . Thus we ensure you that all the available products are DOT and CE certified for maximum safety</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
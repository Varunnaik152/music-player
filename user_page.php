<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="Well.css" >
        </head>
<body>
    <nav>
        <ul> 
          <!DOCTYPE html>
               <li class="brand"><img src="logo.png" alt="Music Player"> Music Player</li>
       </ul>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

  <video autoplay loop muted playes-inline class="back-video">
      <source src="u1.mp4" type="video/mp4">
    </video>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an Your Music Player For Contnue clik on Home Button</p>
      
      <a href="logout.php" class="btn">Logout</a>
      <a href="index.php" class="btn">Home</a>
   </div>

</div>

</body>
</html>
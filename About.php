
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
             
 <script type="" src="https://chatappdemo.com/build/js/chatpal.js?8.3" integrity=""></script>
 <script>
 var chatPal = new ChatPal({embedId: 'PQuNeLLxBt4e', remoteBaseUrl: 'https://chatappdemo.com/', version: '8.3'});
</script>    

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Your Favourite Music Player is here</title>
        
        <link rel="stylesheet" href="Astyle.css" >
        </head>
<body>
    <nav>
        <ul>

          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
          <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
font-family: 'Lato', sans-serif;
}

.overlay {
height: 100%;
width: 0;
position: fixed;
z-index: 1;
top: 0;
left: 0;
background-color: rgb(0,0,0);
background-color: rgba(0,0,0, 0.9);
overflow-x: hidden;
transition: 0.5s;
}

.overlay-content {
position: relative;
top: 25%;
width: 100%;
text-align: center;
margin-top: 30px;
}

.overlay a {
padding: 8px;
text-decoration: none;
font-size: 36px;
color: #818181;
display: block;
transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
color: #f1f1f1;
}

.overlay .closebtn {
position: absolute;
top: 20px;
right: 45px;
font-size: 60px;
}

@media screen and (max-height: 450px) {
.overlay a {font-size: 20px}
.overlay .closebtn {
font-size: 40px;
top: 15px;
right: 35px;
}
}
</style>
</head>
<body>

<video autoplay loop muted playes-inline class="back-video">
      <source src="u.mp4" type="video/mp4">
    </video>

<div id="myNav" class="overlay">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<div class="overlay-content">
  <a href="index.php">Home</a>
  <a href="logout.php">Logout</a>

</div>
</div>
<script>
function openNav() {
document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
document.getElementById("myNav").style.width = "0%";
}
</script>
   
</body>
</html>

               <li class="brand"><img src="logo.png" alt="Music Player"> Music Player</li>
       </ul>
      <h1 style="text-align:center">About This Web</h1>
      <h3 >Visual Studio Code is an integrated development environment Features include support for debugging, 
          XAMPP is not required for Visual Studio Code
         <br> 1. Visual Studio Code has IIS1. However,there is a tutorial available for configuring XAMPP with Visual Studio Code</br>        
         <br> 2. To install Visual Studio Code, you can visit http://code.visualstudio.com/</br>
         <br> 3. To Run Program in VSCode press on F5 and select launch build in server and Debug </br>
         <br> 4. To Run and set up PHP Debug VSCode extension,Open any Browser of your choice enter the URL and Run</br> 
<Space></Space>
      <div class="row">
        <div class="column">
          <div class="card">
           
            <div>
                <div class="container">
                    <div>
              <h1>---------------------------------------------------------------------------Best of Songs-----------------------------------------------------------</h1>
              <div>
                <h1 style="text-align:center"><img src="logo.png" alt= "Music Player" style="width:15%"> <h2 style="text-align:center">Created by <br> Name:Varun.R Reg No: R2010027</br></h2>
            <div>
            <h1 style="text-align:center">_______________________________</h1>
                <div>
                <h1 style="text-align:center">created in year of 2023 </h1>
                <div>
                <h1 style="text-align:center">________________________________</h1>
                <div>
                <h1 style="text-align:center">6th sem project</h1>
                <div>
                <h1 style="text-align:center">________________________________</h1>
                <div>
                <h1 style="text-align:center">Thanks to all</h1>
                <div>
            </div>
          </div>
        </div>
      

      
    
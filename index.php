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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Your favourite music is here</title>
        <link rel="stylesheet" href="style.css">
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

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="About.php">About</a>
    
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
    </nav>
    <div class="container">
        <div class="songList">
            <h1>Select and listen Your favourite Lanuage Songs</h1>
            <div class="songItemContainer">
                <div class="songItem">
                  <space></space><space></space>
            <a style="font-size:30px;cursor:pointer" onclick="openNav()" href="Ksong.html">Listen Kannada New Songs</button></a><space></space><space></space>
            </div>
  
                <div class="songItemContainers">
                    <div class="songItem">
                      <space></space><space></space>
                <a style="font-size:30px;cursor:pointer" onclick="openNav()" href="Hsong.html">Listen Hindi New Songs</button></a><space></space><space></space>
                </div>

                <div class="songItemContainers">
            <div class="songItem">
                <space></space><space></space>
                <a style="font-size:30px;cursor:pointer" onclick="openNav()" href="home.html">Listen English NCS Release Songs</button></a><space></space><space></space>                
                </div>
              
            <div class="songItemContainers">
            <div class="songItem">
                  <space></space><space></space>
            <a style="font-size:30px;cursor:pointer" onclick="openNav()" href="Tsong.html">Listen Tamil New Songs</button></a><space></space><space></space>
            </div>

            <div class="songItemContainers">
            <div class="songItem">
                  <space></space><space></space>
            <a style="font-size:30px;cursor:pointer" onclick="openNav()" href="Telsong.html">Listen Telugu New Songs</button></a><space></space><space></space>
            </div>

    </div>
    <script src="script.js"></script>
    
  </body>
</html>




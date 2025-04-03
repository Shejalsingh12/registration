<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Module Page</title>
    
     <!-- swiper css link -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

     <!-- font awesome url from cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <link rel="stylesheet" href="style1.css">
</head>
<body>
   <nav class="navbar">
      <!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<input style="background: #f1f1f1  ; border : 1px solid grey" ; type="text" placeholder="Search.." name="search">

<section class="header">
   <img style="margin-left: -90px;" src="image/logo3.png" height="50px"  ; alt="website logo">
      <a style="margin-left: -290px;" href="home.php" class="logo">Healthy Diet Tracker</a>

      <a href="home.php">Home</a>
      <a href="about.php">about</a>
    <a href="http://127.0.0.1:5000" target="_blank">chatbot </a>
      <a href="login.html">Sign In/ login</a>
      <!-- <a href="http://localhost:8501/Diet_Recommendation#automatic-diet-recommendation" target="_blank">Automatic Diet Recommendation </a>
      <a href="http://localhost:8501/Custom_Food_Recommendation#custom-food-recommendation" target="_blank">Custom Food Recommendation </a> -->
      
   </nav>
<!-- service section start -->
<section class="services">
    <h1 class="heading-title"> our services</h1>
    <div class="box-container">
       <div class="box">
          <img class="gify-img1" src="image/i9.png" alt="">
          <h3>diet recommender</h3>
       </div>
       <div class="box">
          <img class="gify-img1" src="image/i8.png" alt="">
          <h3>food scanner</h3>
       </div>
      
       
       <div class="box">
          <img class="gify-img1" src="image/i0.png" alt="">
          <h3>chatbot</h3>
       </div>
      
       <div class="box">
          <img class="gify-img1" src="image/i5.png" alt="">
          <h3>community channel</h3>
          <p></p>

            
            <a href="http://localhost:8501/Diet_Recommendation" class="btn">click now</a>
       </div>
       <div class="box">
          <img class="gify-img1" src="image/i1.png" alt="">
          <h3>calories count</h3>
       </div>
    </div>
    </section> 
    
    
    </body>
    </html>

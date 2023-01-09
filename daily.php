<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/daily.css">
    <link rel="stylesheet" href="css/daily.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
</head>
<?php include "header.php";?>
<body>
    <div class="travel">
    <div class="daily">
        <p>Get from point A to B<br>with ease.</p>
        <button>Download app</button>
    </div>
    </div>
    <div class="wrapper">
        <center>    <div class="flex-float">
            <div class="flext-flaot-item">
<p>We have simplified the<br>process of commuting so</br>process of commuting so</br>
moment, make meaningful</br>connections, and chase</br> your dreams without</br> worrying about a thing.</p>
        </div>
        <div class="flext-flaot-item">
            <img src="image/man@busStop.png" alt="">
</div>
    </div>  </center>

</div>
    <div class="flex-work">
         <div class="work">
        <h2>How it works</h2>
        <p>Be it on your way to the office or en route to strike your next business deal, our goal is to help you </br>
        focus on what matters most; Your safety and comfort is ours to handle.</p>
</div>
    </div>

    <div class="slide">

<!-- slider1 begins -->
<div class="slideshow-container">

<div class="mySlides fade">
  <!-- <div class="numbertext">1 / 3</div> -->
  <img src="image/book-step-1.png" style="width:100%">
  <!-- <div class="text">Caption Text</div> -->
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">2 / 3</div> -->
  <img src="image/book-step-2.png" style="width:100%">
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">3 / 3</div> -->
  <img src="image/book-step-3.png" style="width:100%">
  <!-- <div class="text">Caption Three</div> -->
</div>

</div>
<br>

<div class="slideshow-container">

<div class="mySlides fade">
  <!-- <div class="numbertext">1 / 3</div> -->
  <img src="image/book-step-1.png" style="width:100%">
  <!-- <div class="text">Caption Text</div> -->
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">2 / 3</div> -->
  <img src="image/book-step-2.png" style="width:100%">
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">3 / 3</div> -->
  <img src="image/book-step-3.png" style="width:100%">
  <!-- <div class="text">Caption Three</div> -->
</div>

</div>

<br>


<!-- slider ends -->
</div>
    <div class="mobile-iphone">
    <div class="iphone">
    <img src="image/iphone.png" alt="">
    <div class="less">
        <p>Less stress, More productivity</p>
        <span>Your time, money and comfort is a huge deal to us.</span>
        <div class="img">
    <img src="image/appstore-black.png" alt="" style="height:72px; width:160px;">
    <div class="img">
    <img src="image/playstore-black.png" alt="" style="height:92px; width:160px;">
    </div>
    </div>  
    </div>
    
    </div>
</div>
<?php
include("footer.php")
?>
</body>
</html>








<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
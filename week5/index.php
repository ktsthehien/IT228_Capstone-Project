<?php // index.php

// this index page is the home page of your website
// also after creating this  index.php page you wil not be able to access it unless you login as a user, or register first, then login!

session_start();

include('config.php');

//Login

//if the user does not login correctly they will be directed to the login page?

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

//End Login

include('includes/header.php');



if(isset($_SESSION['success'])) :?>

<div class="success">
<h3>
<?php echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3>
</div>  <!-- end div success -->
<?php endif ; 

if(isset($_SESSION['username'])) : ?>

<div class="welcome-logout">
<h3 class="hello">Hello
<?php echo $_SESSION['username']; ?>
</h3>
<p class="outlog"><a href="index.php?logout='1' ">Logout</a></p>
</div>
 <!-- end welcome-logout div -->

<main>
<?php endif ; ?>
</header>
<div id="wrapper">

<h1>An Overview of The Most Amazing Tourist Attractions in Vietnam</h1>

<!-- Container for the image gallery -->
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
      <img src="images/place1_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
      <img src="images/place2_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
      <img src="images/place3_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
      <img src="images/place4_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
      <img src="images/place5_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
      <img src="images/place6_wide.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/place1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Ha Long Bay">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/place2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Thien Mu Pagoda in Hue">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/place3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Hoan Kiem Lake in Hanoi">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/place4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Hoi An">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/place5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Phu Quoc">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/place6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Sa Pa Terraces">
    </div>
  </div>
</div>

<!-- end slide show -->

<h1>5 Top Tourist Attractions in Vietnam</h1>

<h2> 5. Phu Quoc</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place5.jpg'/>
 </div>
 <div class="flex-item-right">
 <p>Located in front of the Cambodia coast, Phu Quoc is the largest island in Vietnam. Phu Quoc is what Phuket would be if it hadn’t been overrun by development. The island features pristine tropical forests, undamaged coral reefs and great beaches. One of its beaches, named Bai Dai (Long Beach), was chosen by the ABC News as one of five beautiful and clean beaches. Phu Quoc is famous for producing the best nuoc mam or fermented fish sauce in the world.</p>
 </div>
</div>

<h2> 4. Hoi An</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place4.jpg'/> </div>
 <div class="flex-item-right">
 <p>This fishing-village-turned-tourist-attraction is situated on the coast of the South China Sea. Hoi An has been an international port from the 16th century although the serious shipping business has long since moved to the city of Da Nang. The heart of the city is still the Old Town, full of winding lanes and Chinese-styled shops. It is sometimes called the “Venice of Vietnam” because of the narrow canals that cut through part of the town.</p>
</div>
</div>

<h2> 3. Hoan Kiem Lake in Hanoi</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place3.jpg'/> </div>
 <div class="flex-item-right">
 <p>Located in the historical center of Hanoi, Hoan Kiem Lake is one of the major scenic spots in the city and serves as the locals’ favorite leisure spot. Hoan Kiem means “returned sword”, and the name comes from a legend in which King Le Loi was given a magical sword by the gods, which he used to drive out the invading Chinese. Later he returned the sword to the Golden Turtle God in the lake.</p>
</div>
</div>

<h2> 2. Thien Mu Pagoda in Hue</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place2.jpg'/></div>
 <div class="flex-item-right">
 <p>With seven stories, the Thien Mu Pagoda in Hue is the tallest pagoda in Vietnam. The pagoda overlooks the Perfume River and is regarded as the unofficial symbol of the former imperial capital. The temple was built in 1601 during the rule of the Nguyễn Lords. The initial temple was very simply constructed, but over time it was redeveloped and expanded with more intricate features.</p>
</div>
</div>
<h2> 1. Ha Long Bay</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place1.jpg'/></div>
 <div class="flex-item-right">
 <p>Ha Long Bay is situated in north Vietnam round a 120 kilometer long coast line and is literally translated as “Bay of Descending Dragons”. The top tourist attraction in Vietnam, Ha Long Bay features thousands of islands, each topped with thick jungle vegetation, forming a spectacular seascape of limestone pillars. Several of the islands are hollow, with enormous caves, others islands include lakes and some support floating villages of fishermen.</p>
</div>
</div>




</div> <!-- end div wrapper-->

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<?php
include('includes/footer.php');





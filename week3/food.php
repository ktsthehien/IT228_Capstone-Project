<?php // index.php

// this index page is the home page of your website
// also after creating this  index.php page you wil not be able to access it unless you login as a user, or register first, then login!

session_start();

include('config.php');

// if the user does not login correctly they will be directed to the login page?

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

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
<h3>Hello
<?php echo $_SESSION['username']; ?>
</h3>
<p class="outlog"><a href="index.php?logout='1' ">Logout</a></p>
</div> <!-- end welcome-logout div -->
<?php endif ; ?>
</header>
<div id="wrapper">
<?php
if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }
    ?>
   
    
        <div id="wrapper">
    <h1>The Best Foods in Vietnam</h1>
    <h2 style="color:<?php echo $color ;?>"><?php echo $food ;?></h2>
        <p><?php echo $content;?></p>
        <img id="daily_photo" src="images/<?php echo $pic ;?>" alt="<?php echo $alt;?>">
    
    <h2>Daily Recommended Foods</h2>  
    
    <ul>
    <li><a href= "food.php?today=Saturday">Saturday</a></li>
    <li><a href= "food.php?today=Sunday">Sunday</a></li>
    <li><a href= "food.php?today=Monday">Monday</a></li>
    <li><a href= "food.php?today=Tuesday">Tuesday</a></li>
    <li><a href= "food.php?today=Wednesday">Wednesday</a></li>
    <li><a href= "food.php?today=Thursday">Thursday</a></li>
    <li><a href= "food.php?today=Friday">Friday</a></li>
    
    
    
    </ul>
    </div> <!-- end wrapper-->



<!-- your footer include will be placed at the bottom of the page -->

</div> <!-- end div wrapper-->
<?php
include('includes/footer.php');



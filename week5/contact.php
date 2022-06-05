<?php // index.php

// this index page is the home page of your website
// also after creating this  index.php page you wil not be able to access it unless you login as a user, or register first, then login!

session_start();

include('config.php');

//Log in function

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

//End log in fuction

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

        <h2>Contact Us</h2>

        <div class='flex-container'>
<div class="flex-item-left-contact">
<?php include('includes/form.php') ;?>
 </div>
 <div class="flex-item-right-contact">
 <h3>Best Place to Visit</h3>
        <img class="place_img" src="images/place1.jpg" alt="place1">
        <img class="place_img" src="images/place2.jpg" alt="place2">
        <img class="place_img" src="images/place3.jpg" alt="place3">
        <img class="place_img" src="images/place4.jpg" alt="place4">

</div>
</div>
        
        


</div> <!--end wrapper -->

<?php
include('includes/footer.php');



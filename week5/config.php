<?php // our config file

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav ['index.php'] = 'Home';
$nav ['place.php'] = 'Places';
$nav ['food.php'] = 'Foods';
$nav ['event.php'] = 'Events';
$nav ['contact.php'] = 'Contact';




// create a function for our navigation, so the function is called out on our header.php page

function my_nav($nav) {
$my_return = '';
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
$my_return .='<li><a href=" '.$key.' " class="current">'.$value.'</a></li>';
} else {
    $my_return .='<li><a href=" '.$key.' ">'.$value.'</a></li>';
} // end else
} // end foreach
return $my_return;
} //end function

switch(THIS_PAGE) {
    case 'index.php':
  $title = 'Home of my IT228 Final';
  $body = 'home';
  $headline = 'Welcome to my Home page!';
  break;
    case 'place.php':
  $title = 'Places page of my IT228 Final';
  $body = 'place inner';
  $headline = 'Welcome to my Places page!';
  break;
    case 'food.php':
  $title = 'Food page of my IT228 Final';
  $body = 'food inner';
  $headline = 'Welcome to my Food page!';
  break;
    case 'event.php':
  $title = 'Event page of my IT228 Final';
  $body = 'event inner';
  $headline = 'Welcome to my Event page!';
  break;
    case 'contact.php':
    $title = 'Contact page of my IT228 Final';
    $body = 'contact inner';
    $headline = 'Welcome to my Contact page!';
  break;
    case 'soccer-view.php':
    $title = 'Soccer View Page';
    $body = 'soccer-view inner';
    $headline = 'Welcome to View Page!';
  break;
    case 'login.php':
  $title = 'Login Page';
  $body = 'login inner';
  $headline = 'Welcome to my Login Page!';
  break;
  case 'register.php':
    $title = 'Register Page';
    $body = 'register inner';
    $headline = 'Welcome to the register Page!';
    break;
    case 'thx.php':
        $title = 'Thank You';
        $body = 'thx inner';
        $headline = 'Thank you Page!';
        break;


}
// initialize/define our variables
 $first_name = '';
 $last_name = '';
 $email = '';
 $username = '';
 $password = '';
 $success = 'You have successfully logged on';
 $errors = array();

  
  
  // start FORM


ob_start();

$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$phone = '';
$place = '';
$food = '';
$comments = '';
$privacy = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$gender_err = '';
$phone_err = '';
$place_err = '';
$food_err = '';
$comments_err = '';
$privacy_err = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['first_name'])) {
        $first_name_err = 'Please enter your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_err = 'Please enter your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty($_POST['email'])) {
        $email_err = 'Please enter your email';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['gender'])) {
        $gender_err = 'Please choose your gender';
    } else {
        $gender = $_POST['gender'];
    }


    if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
    } elseif (array_key_exists('phone', $_POST)) {
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])){ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_err = 'Invalid format!';
        } else {
            $phone = $_POST['phone'];
        } // end else
    } // end main if

    if (empty($_POST['place'])) {
        $place_err = 'What... no favorite place...????';
    } else {
        $place = $_POST['place'];
    }

    if ($_POST['food'] == NULL) {
        $food_err = 'Please select your favorite Vietnamese Food';
    } else {
        $food = $_POST['food'];
    }

    if (empty($_POST['comments'])) {
        $comments_err = 'Your comments, please!';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['privacy'])) {
        $privacy_err = 'You cannot pass go!';
    } else {
        $privacy = $_POST['privacy'];
    }

    // our lines functions
    function my_place($plac) {
        $my_return = '';
        if(!empty($_POST['place'])) {
            $my_return = implode(', ',$_POST['place']);
        } else {
            $place_err = 'Please check your favorite place';
        }
        return $my_return;
    }
 // end place functions

    if(isset($_POST['first_name'],
             $_POST['last_name'],
             $_POST['email'],
             $_POST['gender'],
             $_POST['phone'],
             $_POST['place'],
             $_POST['food'],
             $_POST['comments'],
             $_POST['privacy'])) {
        $to = 'ktsthehien@gmail.com';
        $subject = 'Test email'.date('m/d/y, h i A');
        $body = '
            First name : '.$first_name.' '.PHP_EOL.'
            Last name : '.$last_name.' '.PHP_EOL.'
            Email : '.$email.' '.PHP_EOL.'
            Gender : '.$gender.' '.PHP_EOL.'
            Phone number : '.$phone.' '.PHP_EOL.'
            food : '.$food.' '.PHP_EOL.'
            place : '.my_place($place).' '.PHP_EOL.'
            Comments : '.$comments.' '.PHP_EOL.'
        ';

        if(!empty($first_name &&
                  $last_name &&
                  $email &&
                  $gender &&
                  $phone &&
                  $place &&
                  $food &&
                  $comments &&
                  $privacy) &&
                  preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {

            $headers = array(
                'From' => 'noreply@hiendesign.cu.ma',
                'Reply to:' => ''.$email.''
            );

            mail($to, $subject, $body);
            header('Location:thx.php');

        } 
// close if not empty statement

        } 
// close isset

}  // end form

  function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
    echo 'Error message: <b> '.$errorMsg.'</b>';
    die();
}  else {
    echo ' Houston, we have a problem!';
    die();
}
  
  
}

if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }
    
      //switch page
        
      switch($today) {
        case 'Saturday' :
        $place = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';
        $pic = 'food1.jpg';
        $color='orange';
        $alt = 'food1';
        $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        break;
        
        case 'Sunday' :
            $place = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';
            $pic = 'food2.jpg';
            $color='green';
            $alt = 'food2';
            $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
            break;
        
            case 'Monday' :
                $place = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';
                $pic = 'food3.jpg';
                $color='blue';
                $alt = 'food3';
                $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
                break;
        
                case 'Tuesday' :
                    $place = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';
                    $pic = 'food4.jpg';
                    $color='purple';
                    $alt = 'food4';
                    $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
                    break;
        
                    case 'Wednesday' :
                        $place = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';
                        $pic = 'food5.jpg';
                        $color='grey';
                        $alt = 'food5';
                        $content = ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
                        break;
        
                        case 'Thursday' :
                            $place = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';
                            $pic = 'food6.jpg';
                            $color='yellow';
                            $alt = 'food6';
                            $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
                            break;
        
                            case 'Friday' :
                                $place = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';
                                $pic = 'food7.jpg';
                                $color='brown';
                                $alt = 'food7';
                                $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
                                break;
        
        }

        // end switch

        
        function random_images($photos) {
          $my_return = '';
          $i = rand(1,6);
          $my_return = '<img class="event_img" src="images/event'.$i.'.jpg" alt="event'.$i.'">';
          return $my_return;
      }
 

 

 

 

 

 

 

<?php
session_start();

include('config.php');

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
<h1>7 Best Events to Celebrate with Vietnamese People</h1>

<h2> 1. The Tet Holiday</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/event1.jpg'/>
 </div>
 <div class="flex-item-right">
 <p>Lunar New Year, or Tet, is considered the most important festival and holiday in Vietnam. All schools, companies, factories are temporarily closed. It is the occasion for family unions and gatherings when people return to their families. To prepare for this special day, most Vietnamese people prepare by cleaning and decorating their houses as well as cooking delicious foods. There are a lot of special Vietnamese customs during this time that you could learn. For example, the importance of the first person visiting the house on the new year, wishing greetings of New Year, ancestral worship, and giving lucky money to elderly people and children (aka “Li Xi” in Vietnamese language). During Tet, Vietnamese people will visit their relatives, go to pagodas and temples to pray for a better upcoming year. </p>
 </div>
</div>

<h2> 2. Danang Fireworks Festival</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/event2.jpg'/> </div>
 <div class="flex-item-right">
 <p>Da Nang International Fireworks Festival is held annually in Da Nang and it is a special festival with participation of 7 international competitors from other countries and the host – Da Nang. The competition in Da Nang is a sophisticated magnificent “light banquet”. It’s not simply that fireworks are shot up into the sky but each fireworks performance with unique shapes and music carrying a meaningful subject. Every team need to stick with their theme to design spectacular performances, perfect sound effects and great background music to offer the viewers excellent emotion.</p>
</div>
</div>

<h2> 3.  Hue Festival</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/event3.jpg'/> </div>
 <div class="flex-item-right">
 <p>Every other year, the city of Huế stages a magnificent festival. On stage, along the Perfume River and in the streets, the city celebrates its legacy as Vietnam’s imperial capital and the home of its last feudal dynasty. This year the Huế Festival is scheduled for August 28 until September 2. Here’s your guide to this six-day spectacle of arts, culture and history.</p>
 <p>The festival aims at promoting several kinds of arts as well, with the participation of over 40 art companies from both Vietnam and international countries. From all over the world, thousands of artists gather at Hue to demonstrate their talents, delivering exhibitions, fairs, and competitions to over 40 venues throughout the city.</p>
</div>
</div>

<h2> 4. Buon Ma Thuot Festival</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/event4.jpg'/></div>
 <div class="flex-item-right">
 <p>BUON MA THUOT, Vietnam (Jan. 25, 2019) -- Travellers are invited to discover flavours and stories of Vietnam coffee at the 7th Buon Ma Thuot Coffee Festival 2019 in Dak Lak Province. Buon Ma Thuot City in the Central Highlands will host the festival from March 9 to 16 with the theme “The Quintessence of Jungle." The festival aims to promote Buon Ma Thuot origin coffee and affirm Vietnam's position in the international coffee industry. It's also an opportunity to honour coffee growers, processors and traders while encouraging the community to come together.</p>
</div>
</div>
<h2> 5. Lim Festival</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/event5.jpg'/></div>
 <div class="flex-item-right">
 <p>The list of traditional festivals in Vietnam would not be complete without Lim Festival. Held around the 12th and 13th day of the first lunar month, this festival dates back more than 300 years. It takes place in Bac Ninh where “Quan Ho” singing features. To start the festival, the representatives of the villagers will offer incense and flowers at the pagoda to worship Nguyen Dinh Dien – the man who brought great honour to Lim town and also founded the festival. Undoubtedly, “Quan Ho” singing is one of the main highlights that many tourists have on the list of must-dos when travelling to Vietnam.</p>
</div>
</div>

<h2> 6. Mid-Autumn Festival</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/event6.jpg'/>
 </div>
 <div class="flex-item-right">
 <p>Every Vietnamese child dreams of an amazing Mid Autumn Festival with a belly full of mooncakes and their own bright lantern. Mid Autumn is also called “Children’s Festival” or “Tet Trung Thu” in Vietnamese. Though this festival is also held in China and many Asian countries, Vietnam version is different with their own traditions and legends. It takes quite a long time to prepare for this special event. In the weeks before it, you can see groups of lion dancers practicing on the streets, mooncakes, lanterns, and colorful masks sold in every corner.</p>
 </div>
</div>

<h2> 7. Kate Festival</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/event7.jpg'/> </div>
 <div class="flex-item-right">
 <p>Vietnam has a considerable population of Cham people living in Southern Central Vietnam. To this community, Kate Festival is the most important festival. Several places hold this festival but the main one takes place at the 3 temple towers of Po Rome, Po Nagar, Po Klong Garai in Ninh Thuan Province. It aims at commemorating the Cham people’s heroes, their kings and ancestors. Besides, it is also a chance for this community to socialize, wish for good luck, visit family members and friends, and enjoy various cultural activities. If you are a culture lover, it would be a miss not to join this festival in Vietnam. It is truly a great opportunity to explore the beauty of Cham culture, admire unique architecture, get to know their customs and traditional songs.</p>
</div>
</div>



</div>
<!-- end wrapper -->
<?php
include ('includes/footer.php')
?>
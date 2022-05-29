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
        <p>Love soup, noodles or noodle soup? Then Vietnam is where you want to be. Soup is everywhere. While great for soup lovers for me I have to look elsewhere for tasty food kicks. Fortunately Vietnamese food is diverse from healthy herb and veg dishes to high carb french influences. After a number of visits to Vietnam I am still new to Vietnamese food. Relatively clueless with each and every menu offering things I’ve never heard of. Don’t expect to pick up eating in Vietnam in one quick visit. Instead eat anything and everything. If it looks good eat it. That’s what I do and it’s worked so far. I have found some top notch eating in Vietnam. Here are my Top 10 Vietnamese Food from common staples to my own personal favourites.</p>

        <div class='flex-container'>
<div class="flex-item-left-daily">

        <img id="daily_photo" src="images/<?php echo $pic ;?>" alt="<?php echo $alt;?>">
        </div>
 <div class="flex-item-right-daily">    
    
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
    </div>
</div>
    <h1>10 Must-Try Vietnamese Dishes</h1>

<h2> 1. Phở</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/dish1.jpg'/>
 </div>
 <div class="flex-item-right">
 <p>Phở is the quintessential Vietnamese dish, the word phở referring to the type of noodle used in the recipe. Flat rice noodles dance around with medium-rare slivers of beef or boiled chicken in a hearty beef stock. The more popular of the two widely known varieties is phở Hanoi. Originally from the north, it is distinguished by a clear broth and dressed only with a squeeze of lemon and slices of bird’s eye chili. The southern iteration, phở Nam, has a murkier broth and is served with a bouquet of fresh herbs like bean sprouts, basil and mint.</p>

 <p>The secret to a good bowl of phở lies in its stock. The broth is usually infused with fragrant star anise, clove and cinnamon to lend a natural sweetness to the mix. This dish is found on almost every street corner and is actually consumed for breakfast, unbeknownst to outsiders. </p>
 </div>
</div>

<h2> 2. Bánh Mì</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/dish2.jpg'/> </div>
 <div class="flex-item-right">
 <p>Baguettes may have been adopted from the French, but bánh mì is as Vietnamese as it comes. Paté and margarine are spread swiftly across the soft, chewy interior of a baguette and later, the sandwich is loaded with pickled vegetables, fresh cilantro, pork belly, pork floss and cucumber. Sink your teeth into the crunchy crust and watch the warm roll give way to a whole scheme of textures.</p>
</div>
</div>

<h2> 3. Cơm Tấm</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/dish3.jpg'/> </div>
 <div class="flex-item-right">
 <p>Back in the day, Vietnamese farmers would eat the fractured rice grains they could not sell. Nowadays, “broken” rice is a food staple for the everyday working-class citizen. For a meal of humble origins, the preparations for cơm tấm can get very decadent.</p>
 <p>While it's prepared in a number of ways, the most popular is cơm tấm sườn nướng ốp la. A fried egg is paired with caramelised grilled pork chop and laid out on a generous heap of broken rice. The dish is then slathered with nước chấm, a mixture of chilli, fish sauce and sugar, and a drizzle of green onion oil. The final touches include a side of shredded pickled carrots and daikon, slices of cucumbers and tomatoes, and crushed fried pork rinds and shallots for garnish.</p>
</div>
</div>

<h2> 4. Bún Bò Huế</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/dish4.jpg'/></div>
 <div class="flex-item-right">
 <p>Representing the legendary royal cuisine of Hue, bún bò huế is a mighty demonstration of both beauty and taste. The alarmingly red broth is the first signal of its striking flavour—the result of hours spent simmering beef bones and stalks of lemongrass to produce a citrusy concoction. Flash boiled vegetables paired with tender beef shanks give this dynamic affair added vivacity. This may be a beef soup—the word bò is Vietnamese for beef—but don’t be surprised when you see sausage lurking in the bowl. Chả lụa is a sausage made of ham paste that has a texture reminiscent of tofu.</p>
</div>
</div>
<h2> 5. Cao Lầu</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/dish5.jpg'/></div>
 <div class="flex-item-right">
 <p>A dish unique to Hoi An, cao lầu is beyond compare. Saluting the history of the coastal trading port from where it originated, this sensuous bowl of noodles is a fusion of Japanese, Chinese and Vietnamese influences. Slices of Chinese barbecued pork are fanned over cao lầu noodles. These thick noodles, with the same heft as Japanese udon, are then doused with a spice-laden broth and topped with fresh herbs and crushed pork cracklings. Authentic cao lầu is said to be made from the water found in the thousand-year-old Ba Le well in Hoi An, rumoured to have magical properties.</p>
</div>
</div>

<h2> 6. Cơm Gà</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/dish6.jpg'/>
 </div>
 <div class="flex-item-right">
 <p>Chicken and rice is a foolproof combination. But in Hội An, this delicious duo is elevated using fresh ingredients from the countryside. Strips of tender chicken are shredded, mixed with flavoured fish sauce and onions to accompany a bowl of turmeric rice. Pickled shallots, radish and herbs are served on the side. Cooks from all over the country have their own secrets to set their turmeric rice apart. Classic Hội An chicken rice is topped with a few leaves of Vietnamese coriander and hot mint to balance out the zesty chicken marinade and soft, young eggs. After a day exploring the Ancient Town on foot, a plate of golden chicken rice is simply the perfect treat.</p>
 </div>
</div>

<h2> 7. Mì Quảng</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/dish7.jpg'/> </div>
 <div class="flex-item-right">
 <p>Part soup, part salad, mì quảng gracefully pulls off an identity crisis. That being said, don’t let the elegance of mì quảng fool you. This light and springy noodle dish from the Quang Nam province in Central Vietnam is street food. The vibrantly yellow noodles owe their rich colour to the turmeric-infused broth made rich with peanut oil. Only a ladleful is used in the making of this “soup”, which can be topped with anything from shrimp and chicken to pork belly and snakehead fish. Eat mì quảng with sliced banana flowers, Vietnamese coriander, basil and bánh tráng me, toasted sesame rice crackers.</p>
</div>
</div>

<h2> 8. Bánh Xèo</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/dish8.jpg'/> </div>
 <div class="flex-item-right">
 <p>A Mekong Delta creation, bánh xèo is widely eaten around south and central Vietnam. Watching the crispy crepe being assembled is an audio-visual experience: the batter crackles loudly when it hits the hot pan—xèo meaning sizzling—and the edges gradually curl and golden as the skilled xèo maker deftly swirls the pan to evenly spread out the dense batter. The batter, traditionally made from rice flour and coconut milk, owes its yellowish hue to the addition of turmeric. Another French-inspired delight, the savoury pancake is filled with slices of boiled pork, minced pork, bean sprouts and shrimp and then folded in the manner of a crepe. A bánh xèo shouldn’t be too soggy and is best appreciated fresh off the skillet.</p>
</div>
</div>

<h2> 9. Bún Chả </h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/dish9.jpg'/></div>
 <div class="flex-item-right">
 <p>Bún chả became an overnight sensation after President Obama was pictured scarfing down a bowl of these grilled pork patties with Anthony Bourdain. But this speciality of the Old Quarter in Hanoi has always been popular among the locals. Around lunchtime, the scent of pork grilling over hot charcoal wafts down the sidewalks, filling the noses of hungry Hanoians.</p>
 <p>This classic northern dish is comprised of cold bún (rice vermicelli); slices of seasoned pork belly; a mountain of fresh herbs and salad greens; and last but not least, medallions of minced pork swimming in a bowl brimming with a fish sauce-based broth. The go-to approach is to scoop small bundles of bún into your broth bowl and rotate between eating the noodles, the pork and the greens. </p>
</div>
</div>
<h2> 10. Xôi</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/dish10.jpg'/></div>
 <div class="flex-item-right">
 <p>Xôi, Vietnamese sticky rice is a departure from other sticky rice interpretations in the region. The weighted, more dense glutinous staple is comes in a savoury or a sweet option. Xôi mặn, savoury xôi, is a popular, inexpensive breakfast fix. Hankering for something sweeter? There are over 20 types of xôi ngọt; but if you’re hoping to mesmerised, you’re in luck. Xôi ngũ sắc, the five-coloured xôi, is a psychedelic swirl of purple, green, red, yellow, and white, pigmented using natural plant extracts.</p>
</div>
</div>
    </div> <!-- end wrapper-->



<!-- your footer include will be placed at the bottom of the page -->

</div> <!-- end div wrapper-->
<?php
include('includes/footer.php');



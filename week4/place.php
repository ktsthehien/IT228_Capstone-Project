<?php // index.php

session_start();

include('config.php');

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
<h1>20 Top Tourist Attractions in Vietnam</h1>

<h2> 20. Tam Coc</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place20.jpg'/>
 </div>
 <div class="flex-item-right">
 <p>In the Ninh Binh province of Northern Vietnam near is Tam Coc, which translates to English as three caves. The three caves are nestled in a scenic landscape of limestone cliffs and rice paddies, and the river winds through the region. The caves are called Hang Cả, Hang Hai, and Hang Ba, and they serve as the area’s main attraction. Guided boat tours take you to the caves and along the Ngo Dong River, which is often dotted with floating vendors capitalizing on the tourist visiting on a day trip from Hanoi.</p>
 </div>
</div>

<h2> 19. My Khe Beach</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place19.jpg'/> </div>
 <div class="flex-item-right">
 <p>The most scenic spot in Da Nang is arguably My Khe Beach. Also known as China Beach, this was where US servicemen were helicoptered in for R&R during the Vietnam War. These days people come here however for tis pristine white sand, blue water and sunny skies. Visitors can rent a lounge chair on the sand, relax in the shade under a thatched umbrella or rent a kayak from nearby vendors. Many hotels and cafes are within walking distance of My Khe Beach, making it a hub for visitors as well as locals in search of incredible views.</p>
</div>
</div>

<h2> 18. Hang Son Doong Cave</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place18.jpg'/> </div>
 <div class="flex-item-right">
 <p>One of the largest caves in the world, and certainly the largest in Vietnam, is Hang Son Doong. Approximately three million years old, Hang Son Doong Cave is an incredible destination unlike anywhere else on the planet. The cave is enormous, and it is possible for dozens of people to camp within it at a time. Bright blue water pools are located in the cave, and a river runs through it. Lush greenery lines the walls, thanks to erosion that lets in beams of sunlight. The cave is ethereal, and guided tours are available to best explore this amazing landmark.</p>
</div>
</div>

<h2> 17. Temple of Literature in Hanoi</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place17.jpg'/></div>
 <div class="flex-item-right">
 <p>In the city of Hanoi, there is an incredible temple dedicated to Confucius. Built in the 11th century, the Temple of Literature honors scholars and the many academic achievements of the Vietnamese, past and present. The Temple of Literature was even the site of the very first university in the nation. Among countless statues of Confucius and his disciples, there are impressive pagodas and a pond known as the Well of Heavenly Clarity.</p>
</div>
</div>
<h2> 16. Cham Islands</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place16.jpg'/></div>
 <div class="flex-item-right">
 <p>Several miles off the coast of Hoi An is a cluster of mountainous isles known as the Cham Islands. Primarily granite, these islands were once restricted but are now open to the public. The main island Hon Lao, the largest and the only one inhabited, is less than two hours’ away by speed boat. Visitors can come for the day and go birdwatching, snorkel through the surrounding reefs or just enjoy the scenery of the beautiful beaches. Overnight stays are limited, but can be an incredible experience for the intrepid traveler.</p>
</div>
</div>

<h2> 15. Saigon Notre Dame Cathedral</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place15.jpg'/>
 </div>
 <div class="flex-item-right">
 <p>In Ho Chi Minh City, or Saigon, stands the stunning Notre Dame Cathedral. Built in the late 19th century, the cathedral is brick, neo-Romanesque and clearly influenced by European architecture of the same time period. In fact, many of the materials used in construction were imported directly from France. While the exterior is impressive, the interior is also worth exploring. Look for the surviving stained glass panels as well as carved tiles and a statue of the Virgin Mary.</p>
 </div>
</div>

<h2> 14. Con Dao Islands</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place14.jpg'/> </div>
 <div class="flex-item-right">
 <p>Under French rule, the Con Dao Islands were known as the Devil’s Island of Indochina, a place where thousands of prisoners of war were kept. Today, this group of 16 islands off the southern coast of Vietnam has a completely different purpose. Visitors come for the beautiful beaches and the abundance of scuba diving and snorkeling spots. However, the history of Con Dao can still be explored at some of the prison buildings that still stand.</p>
</div>
</div>

<h2> 13. Hoan Kiem Lake in Hanoi</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place13.jpg'/> </div>
 <div class="flex-item-right">
 <p>Located in the historical center of Hanoi, Hoan Kiem Lake is one of the major scenic spots in the city and serves as the locals’ favorite leisure spot. Hoan Kiem means “returned sword”, and the name comes from a legend in which King Le Loi was given a magical sword by the gods, which he used to drive out the invading Chinese. Later he returned the sword to the Golden Turtle God in the lake.</p>
</div>
</div>

<h2> 12. Thien Mu Pagoda in Hue</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place12.jpg'/></div>
 <div class="flex-item-right">
 <p>For nearly 150 years until World War II, the Imperial Citadel of Hue served as the capital of Vietnam’s Nguyen dynasty. In the very center of these secure walls was the Purple Forbidden City, an area reserved exclusively for the royal family. The enormous Imperial Citadel was also a strategic hold during the Vietnam War, as it stands very close to the demilitarized zone that separated North and South Vietnam. This destination is significant for all those who are interested in the history of the nation.</p>
</div>
</div>
<h2> 11. Marble Mountains</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place11.jpg'/></div>
 <div class="flex-item-right">
 <p>South of Da Nang, Vietnam, are the Marble Mountains. These five peaks are named after the five elements of earth, water, wind, fire and wood. The mountains are picturesque on their own, but they are also home to countless caves, some of which house incredible Buddhist sanctuaries. Some caves contain Confucian or Buddhist shrines, and others were used as sanctuaries and hospitals during the Vietnam War.</p>
</div>
</div>


<h2> 10. Phong Nha Caves</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place10.jpg'/>
 </div>
 <div class="flex-item-right">
 <p>Phong Nha-Ke Bang National Park boasts many attractions, but none is so popular as its caves. The Phong Nha Caves are made up of hundreds of cave systems, many of which are large enough to hold entire city blocks. The biggest, and most notable, is Hang Son Doong. A gateway to the caves is Son Trach, a growing village that is home to several transport links throughout Vietnam, local restaurants and meeting points for guided tours to the caves.</p>
 </div>
</div>

<h2> 9. Nha Trang</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place9.jpg'/> </div>
 <div class="flex-item-right">
 <p>Nha Trang is Vietnam’s most popular seaside resort town located along the second most beautiful bays in the country. It features beautiful beaches with fine and clean sand and clear ocean water with mild temperatures. The city has about 300,000 inhabitants and is more lively and urban in character than other beach destinations like Mui Ne and Phu Quoc. It’s also the scuba diving center of Vietnam.</p>
</div>
</div>

<h2> 8. Mekong Delta</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place8.jpg'/> </div>
 <div class="flex-item-right">
 <p>The Mekong Delta is the region in southern Vietnam where the Mekong River approaches and empties into the sea. It is a very rich and lush area, covered with rice fields, that produces about half of the total of Vietnam’s agricultural output. Subsequently, life in the Mekong Delta revolves much around the river, and all the villages are often accessible by river rather than by road.</p>
</div>
</div>

<h2> 7. Mui Ne</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place7.jpg'/></div>
 <div class="flex-item-right">
 <p>The formerly little-inhabited beach south of the fishing village of Mui Ne has seen some serious development in the last 15 years. Due to strong sea breezes it is a popular destination in Vietnam for kite- and windsurfing. No trip to Mui Ne is complete without a trip to the famous sand dunes located a short distance north of the town. The vast sandy expanse provide some great panoramic views especially during sunset.</p>
</div>
</div>
<h2> 6. Sa Pa Terraces</h2>
<div class='flex-container'>
<div class="flex-item-left">
 <img class='top5' src='images/place6.jpg'/></div>
 <div class="flex-item-right">
 <p>Sa Pa is a town in northwest Vietnam not far from the Chinese border. Rice terraces can be found in the Muong Hoa valley between Sa Pa town and the Fansipan Mountain, on a backdrop of thick bamboo woodlands. Local mountain people, the Hmong, Giay, Dao, Tay, and Giay, grow rice and corn on these paddy terraces, along with vegetables.</p>
</div>
</div>


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
<?php
include('includes/footer.php');



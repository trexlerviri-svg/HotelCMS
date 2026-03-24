<?php
$hotelPhoto = get_field('hotel_photo');
$welcomeSection = get_field('welcome_section');
$welcomeMessage = $welcomeSection['welcome_message'];
$hotelDescription = $welcomeSection['hotel_description'];
?>

<div class="hero" style="background-image: url(<?= $hotelPhoto['url']; ?>);">

<h1><?= $welcomeMessage ?> </h1>
<p><?= $hotelDescription ?></p>

</div>
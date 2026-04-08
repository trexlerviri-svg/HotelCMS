<?php
$amenities = get_field("amenities");
?>

<div id="amenities">
    <h2>Amenities</h2>
    <ul>

    <?php foreach ($amenities as $amenity): ?>

    <?php
    $name = $amenity["name"];
    ?>

    <li><?= $name ?></li>
        
    <?php endforeach; ?>

    </ul>
</div>
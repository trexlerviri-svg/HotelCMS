<?php
$testimonials = get_field("testimonial");
?>
<div id="testimonials">
<h2>Feedbacks from Our Guests</h2>
<div class="testimonials">

<?php foreach($testimonials as $testimonial) : ?>
    <?php
    $quote = get_the_title($testimonial->ID);
    $author = get_field("author", $testimonial->ID);
    ?>
    <div class="testimonial">
        <div class="quote">"<?php echo $quote; ?>"</div>
        <div class="author"><?php echo $author; ?></div>
    </div>
<?php endforeach; ?>
</div>
</div>

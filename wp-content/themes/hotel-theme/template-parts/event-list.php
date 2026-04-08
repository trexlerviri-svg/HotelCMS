<section id="events-list">
<h2>Events</h2>
<?php
$loop= new WP_Query(array(
    'post_type'=>'event',
    'posts_per_page'=>-1
));
?>

<?php if($loop->have_posts()): ?>
    <?php while($loop->have_posts()):$loop->the_post()?>
       <?php
       $title = get_the_title();
       $host = get_field("host"); 
       $price = get_field("price");
       $url = get_permalink();
         ?>
         <div>
            <a href="<?= $url ?>" style="font-weight:bold;"><?= $title ?></a>by <?= $host ?> (<?= $price ?>DKK)
         </div>
  
    <?php endwhile; ?>
    <?php endif; ?>
</section>

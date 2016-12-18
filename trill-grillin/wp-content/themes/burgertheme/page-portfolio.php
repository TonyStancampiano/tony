<?php while (have_posts()) : the_post(); ?>
  
  <?php get_template_part('templates/content', 'page'); ?>
<h1 class="ptitle">Portfolio</h1>
<div class="burger portfolio">
    <?php
	$args = array("post_type"=>"recipe", "posts_per_page"=>"-1");
	$loop = new WP_Query($args);
	while($loop->have_posts()): $loop->the_post();
	?>
   <div class="rec-img"><img src="<?php echo get_field("image"); ?>"></div>
    <?php endwhile; ?>
</div>

<?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>
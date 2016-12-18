<?php while (have_posts()) : the_post(); ?>


<div class=“recipe-burgers”>
	
</div>


<div class="burgers">
    <?php
	$args = array("post_type"=>"recipe", "posts_per_page"=>"-1");
	$loop = new WP_Query($args);
	while($loop->have_posts()): $loop->the_post();
	?>
	<div class="burger">
        
            <center>
                <span class="name-span">
                    <?php echo get_field("name"); ?>
                </span>
            </center>
        
       
            <center>
                <img src="<?php echo get_field("image"); ?>">
            </center>

    </div>
	<?php endwhile; ?>
</div>

<div class="trash"></div>
<?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>
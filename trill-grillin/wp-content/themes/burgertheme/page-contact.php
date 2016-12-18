<?php while (have_posts()) : the_post(); ?>
  
  <?php get_template_part('templates/content', 'page'); ?>
<h1 class="ptitle">Contact</h1>
<div class="burger contact">
    
    <ul>
        <li>Name: <?php echo get_field("name"); ?></li>
        <li>Phone: <?php echo get_field("phone"); ?></li>
        <li>Email: <?php echo get_field("email"); ?></li>
    </ul>
</div>

<?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/content', 'page'); ?>
<h1 class="ptitle">About</h1>
<div class="burger-about">
    <h3>Lots of dope burger recipes.</h3>
</div>
  <?php get_template_part('templates/page', 'header'); ?>

<?php endwhile; ?>
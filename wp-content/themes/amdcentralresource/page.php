<?php get_header(); ?>

<div class="container">
  <h2 class="center"><?php the_title(); ?></h2>

  <?php if (have_posts()) : while(have_posts()) : the_post();?>
  <?php the_content(); ?>

  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="page-main">
  <div class="lead-inner">
  <?php if(have_posts()): ?>
    <?php the_post(); ?>
    <?php the_content(); ?>
  <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
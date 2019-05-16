<?php
get_header();
?>
<div class="page-banner--overview">
  <div class="page-banner__bg-image--page" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">All Posts</h1>
    <div class="page-banner__intro">
    </div>
  </div>
</div>


  <div class="grid-container">

  <?php

  while(have_posts()){
    the_post(); ?>

    <article class="" style="background-image: url(<?php echo get_theme_file_uri('/images/popcorn-movie.jpg')?>)">
      <a class="read" href="<?php echo the_permalink(); ?>"></a>
      <div class="post-details">
        <a href="#">Reviews</a>
        <h3><?php echo the_title(); ?></h3>
        <p>By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author_meta('first_name'); ?></a></p>
        <p>review summary</p>
      </div>
    </article>

  <?php }

  ?>
</div>

<?php
get_footer();
?>

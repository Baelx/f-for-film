<?php
/**
* A Simple Category Template
*/

get_header(); ?>

<section id="primary" class="site-content">
  <div id="content" role="main">

    <?php
    // Check if there are any posts to display
    if ( have_posts() ) : ?>

    <header class="archive-header">
      <h1 class="archive-title">Category: <?php single_cat_title( '', false ); ?></h1>


      <?php
      // Display optional category description
      if ( category_description() ) : ?>
      <div class="archive-meta"><?php echo category_description(); ?></div>
    <?php endif; ?>
  </header>

  <div class="grid-container">

    <?php

    // The Loop
    while ( have_posts() ) : the_post(); ?>

    <article class="" style="background-image: url(<?php echo get_theme_file_uri('/images/popcorn-movie.jpg')?>)">
      <a class="read" href="<?php echo the_permalink(); ?>"></a>
      <div class="post-details">
        <a href="#">Reviews</a>
        <h3><?php echo the_title(); ?></h3>
        <p>By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author_meta('first_name'); ?></a></p>
        <p>review summary</p>
      </div>
    </article>

  <?php endwhile;

else: ?>
<p>Sorry, no posts matched your criteria.</p>


<?php endif; ?>
</div>

</div>
</section>


<?php get_footer(); ?>

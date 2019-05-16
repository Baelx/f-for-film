<?php
get_header();
?>
<div class="page-banner--overview">
  <div class="page-banner__bg-image--page" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php
    add_filter( 'get_the_archive_title', function ($title) {

        if ( is_category() ) {

                $title = single_cat_title( '', false );

            } elseif ( is_tag() ) {

                $title = single_tag_title( '', false );

            } elseif ( is_author() ) {

                $title = '<span class="vcard">' . get_the_author() . '</span>' ;

            }

        return $title;

    }); ?>
  </h1>
    <div class="page-banner__intro">
      <div class="page-banner__subtitle">
        <p><?php the_archive_description(); ?></p>
      </div>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
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

<?php
get_header();

while(have_posts()){
the_post();

?>

<div class="post-headline">
  <div class="post-headline__bg-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
  <div class="post-headline__content container container--narrow">
    <h1 class="post-headline__title"><?php echo get_the_category_list(', '), ': ', the_title(); ?></h1>
    <div class="post-headline__subtitle">
      <p>It's a review ehhhhh</p>
    </div>
    <div class="post-headline__metadata">
      <p>By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author_meta('first_name'); ?></a> on <?php the_time('F j, y'); ?></p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">

  <!-- <div class="metabox metabox--position-up metabox--with-home-link">
    <p><a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a> <span class="metabox__main">Our History</span></p>
  </div> -->

  <div class="page-links grid-container">
    <h2 class="page-links__title"><a href="#">Most Read</a></h2>
    <article class="" style="background-image: url(<?php echo get_theme_file_uri('/images/popcorn-movie.jpg')?>)">
      <a href="#" class="read"></a>
      <div class="post-details">
        <a href="#">Reviews</a>
        <h3>Movie title</h3>
        <p>By Alexander</p>
        <p>review summary</p>
      </div>
    </article>
  </div>

  <div class="generic-content">
  <p><?php echo the_content(); ?></p>
  </div>

</div>

<?php
}

get_footer();
 ?>

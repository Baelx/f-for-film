<?php

get_header();

?>

<section class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/basis-of-sex.jpg')?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">On the Basis of Sex</h2>
        <p class="t-center">A sexy, fun-filled romp</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Read our review</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/the-oa.jpg')?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">The OA: Episode 1</h2>
        <p class="t-center">Ever wanted to take the piss out of a beleaguered public school teacher who's only trying to function within a broken system? This episode is for you!</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Read more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/got.jpg')?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">The demise of Game of Thrones</h2>
        <p class="t-center">The writers are drunk at the helm and all of your beloved characters are being chucked, unceremoniously, into the fire.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">See the breakdown</a></p>
      </div>
    </div>
  </div>
</section>

<section class="home__post-section home__post-section--reviews">
  <div class="grid-container">
    <h2>Reviews / Shows</h2>

    <article class="" style="background-image: url(<?php echo get_theme_file_uri('/images/popcorn-movie.jpg')?>)">
      <a class="read" href="<?php echo the_permalink(); ?>"></a>
      <div class="post-details">
        <a href="#">Reviews</a>
        <h3><?php echo the_title(); ?></h3>
        <p>By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author_meta('first_name'); ?></a></p>
        <p>review summary</p>
      </div>
    </article>
    <article class="" style="background-image: url(<?php echo get_theme_file_uri('/images/popcorn-movie.jpg')?>)">
      <a href="#" class="read"></a>
      <div class="post-details">
        <a href="#">Reviews</a>
        <h3>Movie title</h3>
        <p>By Alexander</p>
        <p>review summary</p>
      </div>
    </article>
    <article class="" style="background-image: url(<?php echo get_theme_file_uri('/images/popcorn-movie.jpg')?>)">
      <a href="#" class="read"></a>
      <div class="post-details">
        <a href="#">Reviews</a>
        <h3>Movie title</h3>
        <p>By Alexander</p>
        <p>review summary</p>
      </div>
    </article>
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


  <div class="grid-container">
    <h2>Reviews / Movies</h2>

        <article class="" style="background-image: url(<?php echo get_theme_file_uri('/images/popcorn-movie.jpg')?>)">
          <a href="#" class="read"></a>
          <div class="post-details">
            <a href="#">Reviews</a>
            <h3>Movie title</h3>
            <p>By Alexander</p>
            <p>review summary</p>
          </div>
        </article>
        <article class="" style="background-image: url(<?php echo get_theme_file_uri('/images/popcorn-movie.jpg')?>)">
          <a href="#" class="read"></a>
          <div class="post-details">
            <a href="#">Reviews</a>
            <h3>Movie title</h3>
            <p>By Alexander</p>
            <p>review summary</p>
          </div>
        </article>
        <article class="" style="background-image: url(<?php echo get_theme_file_uri('/images/popcorn-movie.jpg')?>)">
          <a href="#" class="read"></a>
          <div class="post-details">
            <a href="#">Reviews</a>
            <h3>Movie title</h3>
            <p>By Alexander</p>
            <p>review summary</p>
          </div>
        </article>
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

</section>


<section class="home__post-section home__post-section--analysis">
  <div class="grid-container">
    <h2>Analysis</h2>
    <article class="" style="background-image: url(<?php echo get_theme_file_uri('/images/popcorn-movie.jpg')?>)">
      <a href="#" class="read"></a>
      <div class="post-details">
        <a href="#">Analysis</a>
        <h3>The disappointing demise of Game of Thrones</h3>
        <p>By Alexander</p>
        <p>review summary</p>
      </div>
    </article>
    <article class="" style="background-image: url(<?php echo get_theme_file_uri('/images/popcorn-movie.jpg')?>)">
      <a href="#" class="read"></a>
      <div class="post-details">
        <a href="#">Analysis</a>
        <h3>The disappointing demise of Game of Thrones</h3>
        <p>By Alexander</p>
        <p>review summary</p>
      </div>
    </article>
    <article class="" style="background-image: url(<?php echo get_theme_file_uri('/images/popcorn-movie.jpg')?>)">
      <a href="#" class="read"></a>
      <div class="post-details">
        <a href="#">Analysis</a>
        <h3>The disappointing demise of Game of Thrones</h3>
        <p>By Alexander</p>
        <p>review summary</p>
      </div>
    </article>
    <article class="" style="background-image: url(<?php echo get_theme_file_uri('/images/popcorn-movie.jpg')?>)">
      <a href="#" class="read"></a>
      <div class="post-details">
        <a href="#">Analysis</a>
        <h3>The disappointing demise of Game of Thrones</h3>
        <p>By Alexander</p>
        <p>review summary</p>
      </div>
    </article>
  </div>

</section>



<?php

get_footer();

?>

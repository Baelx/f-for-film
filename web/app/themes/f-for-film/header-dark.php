<?php
if ( function_exists( 'the_custom_logo' ) ) {
  $logo = get_custom_logo();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php wp_head(); ?>
  <meta charset="utf-8">
</head>
<body>

  <header class="site-header site-header--dark">
    <div class="container">
      <h1 class="site-logo float-left"><?php echo $logo ?></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger site-header__menu-trigger--dark fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation main-navigation--dark">
          <ul>
            <li><a class="dark-link" href="#">About</a></li>
            <li><a class="dark-link" href="#">Analysis</a></li>
            <li><a class="dark-link" href="#">Reviews</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--dark float-left push-right">Login</a>
          <a href="#" class="btn btn--dark float-left">Sign Up</a>
          <span class="dark-link search-trigger js-search-trigger"><i class="fa fa-search dark-link" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>

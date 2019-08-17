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

  <header class="site-header">
    <div class="container">
      <h1 class="site-logo float-left"><?php echo $logo ?></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Analysis</a></li>
            <li><a href="#">Reviews</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn float-left push-right">Login</a>
          <a href="#" class="btn float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>

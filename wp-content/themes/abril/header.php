<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>

    <div id="main-container" class="container">

    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="search visible-xs visible-sm pull-left navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse-form">
          <span class="glyphicon glyphicon-search"></span>
        </button>
        <button type="button" class="menu navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="glyphicon glyphicon-menu-hamburger"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/image/logo.png" height="43" width="187">
        </a>
      </div>

      <div class="collapse navbar-collapse-form">
        <form class="navbar-form" role="search">
          <div class="hold">
            <div class="center">
              <div class="form-group">
              <input type="text" class="form-control" placeholder="Pesquisar">
              </div>
              <button type="submit" class="btn btn-default"><span aria-hidden="true" class="glyphicon glyphicon-search"></span></button>
            </div>
          </div>
        </form>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse">
       <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
         <button type="button" class="search visible-md pull-right navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse-form">
          <span class="glyphicon glyphicon-search"></span>
        </button>
      </div><!-- /.navbar-collapse -->

    </nav>
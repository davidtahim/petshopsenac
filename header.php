<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>
	<?php wp_title ('|', true,'right'); ?>	
	<?php bloginfo( 'name' ); ?>	
	</title>

    <!-- Principal CSS do Bootstrap -->
      <?php wp_head(); ?>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark bg">
        <a class="navbar-brand" href="<?php bloginfo ('url'); ?>"><?php bloginfo ('name'); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
			<?php
			$args = array (
			'menu' => 'header-menu',
			'menu_class' => 'nav navbar-nav mr-auto',
			'container' => 'false'	
			);
				wp_nav_menu ($args);
			?>
        </div>
      </nav>
    </header>

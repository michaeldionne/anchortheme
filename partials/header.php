<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <meta name="description" content="<?php echo site_description(); ?>">
    <title><?php echo site_name(); ?></title>

    <?php echo site_meta('google_analytics'); ?>

     <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo theme_url('assets/css/bootstrap.css'); ?>">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo theme_url('assets/css/main.css'); ?>">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo theme_url('assets/js/hover.zoom.js'); ?>"></script>
    <script src="<?php echo theme_url('assets/js/hover.zoom.conf.js'); ?>"></script>
    <script src="<?php echo theme_url('assets/js/app.js'); ?>"></script>
    <script src="<?php echo theme_url('assets/js/share.min.js'); ?>"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
    <link rel="shortcut icon" href="<?php echo theme_url('assets/img/favicon.ico'); ?>">

    <?php if(customised()): ?>
    <!-- Custom CSS -->
    <style><?php echo article_css(); ?></style>
    <!-- Custom Javascript -->
    <script><?php echo article_js(); ?></script>
    <?php endif; ?>
</head>

     <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img alt="" src="http://michaeldionne.co/themes/Custom/img/logo.png" class="img-responsive navbar-brand hidden-xs hidden-sm"/>
          <a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
        </div><!-- /navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right cl-effect-3">
            <?php if(has_menu_items()): ?>
				  <?php while(menu_items()): ?>
				  	<li <?php echo (menu_active()); ?>>
                            <a href="<?php echo menu_url(); ?>"><?php echo menu_name(); ?></a>
                        </li>
		          <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /container -->
    </div><!-- /navbar -->

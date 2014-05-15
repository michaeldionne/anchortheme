<?php theme_include('partials/header'); ?>

<li style=".navbar-inverse {background-color:<?php echo page_custom_field('custom_header_color'); ?>}">

    <div class="container">
        <div class="row mt resp centered">
            <h1><?php echo page_title(); ?></h1>
            <p><?php echo page_content(); ?></p>
        </div><!-- /row -->
    </div><!-- /container -->
<?php theme_include('partials/footer'); ?>

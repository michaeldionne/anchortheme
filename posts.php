<?php theme_include('partials/header'); ?>

<!-- +++++ Posts Lists +++++ -->
<?php if(has_posts()): ?>
<!-- We have posts, it's safe to loop. -->
    <?php $i = 0; while(posts()): $i++; ?>
	<div id="bg<?php echo $i % 2; ?>">
	    <div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
                    <div class="col-lg-4">
                    	<h1><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h1>
                    	<p><bd><?php echo article_date(); ?></bd></p>
                    	<p><bd><?php echo dg_est_reading_time(); ?></bd></p>
                    </div>
                    <div class="col-lg-8">
                    	<p><?php echo article_markdown(); ?></p>
                    </div>
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
     </div><!-- /#bg -->
    <?php endwhile; ?>

<?php if(has_pagination()): ?>
    <div id="grey">
        <div class="col-lg-8 col-lg-offset-2">
        <?php echo posts_prev('< Older Posts'); ?>
        <?php echo posts_next('Newer Posts >'); ?>
        </div>
    </div><!-- /#grey -->
<?php endif; ?>

<?php else: ?>
    <div id="white">
        <div class="col-lg-8 col-lg-offset-2">
            <p>Looks like you have some writing to do!</p>
        </div>
    </div><!-- /#white -->
<?php endif; ?>
<!-- +++++ Posts Lists +++++ -->

<?php theme_include('partials/footer'); ?>

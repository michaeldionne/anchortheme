<?php theme_include('partials/header'); ?>

<!-- +++++ Projects Section +++++ -->

	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-10 col-lg-offset-1">
            	<div class="col-lg-4">
                    <h1><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h1>
                    <p><bd><?php echo article_date(); ?>    |    <?php echo dg_est_reading_time(); ?></bd></p>
                    <?php echo site_meta('share_buttons'); ?>
                </div>
                <div class="col-lg-8">
                    <p><?php echo article_markdown(); ?></p>
                </div>
			</div>
		</div><!-- /row -->
		<div class="row mt">
			<div class="col-lg-8 col-lg-offset-2">
				<hr>
				<p><bt>Category: <a href="<?php echo category_url(); ?>"><?php echo category_title(); ?></a></bt> - <bt>Written: <a><?php echo article_date(); ?></a></bt><?php echo site_meta('share-buttons-mobile'); ?></p>
					<p><a href="http://michaeldionne.co" onclick="goBack()">Back to Main</a></p>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->

<script>
function goBack()
  {
  window.history.back()
  }
</script>

<?php theme_include('partials/footer'); ?>

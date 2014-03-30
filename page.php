<?php theme_include('partials/sidebar'); ?>

<div class="col-4-5">
	
	<div class="page">
		<h2><?php echo page_title(); ?></h2>
		<div class="prettyprint">
			<?php echo page_content(); ?>
		</div>
	</div>
	
</div>

<?php theme_include('partials/footer'); ?>
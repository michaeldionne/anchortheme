<?php theme_include('partials/sidebar'); ?>

<div class="col-4-5">
	
	<div class="search">
	
	<?php if(has_search_results()): ?>
		<?php while(search_results()): ?>
			<h2><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h2>
		<?php endwhile; ?> 
	<?php endif; ?>
	
	
	</div>
	
</div>

<?php theme_include('partials/footer'); ?>
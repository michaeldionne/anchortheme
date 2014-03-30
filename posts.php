<?php theme_include('partials/sidebar'); ?>

<div class="col-4-5">
	
	<div class="posts">
	
	<?php if(has_posts()) : ?>
		<?php while(posts()) : ?>
			
			<h2><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h2>
			<p><?php echo article_description(); ?></p>
			
		<?php endwhile; ?>
	<?php endif; ?>
	
	</div>
	
</div>

<?php theme_include('partials/footer'); ?>
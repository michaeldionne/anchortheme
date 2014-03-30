<?php theme_include('partials/sidebar'); ?>

<div class="col-4-5">
	
	<div class="article">
	
	<h2><?php echo article_title(); ?></h2>
	<?php echo article_markdown(); ?>
	
	</div>
	
	<?php if(comments_open() and has_comments()): ?>
		<hr size="1" />
		<div class="comments">
			<h3>Comments:</h3>
    		<?php while(comments()): ?>
				<h4><?php echo comment_name(); ?> <span><?php echo comment_date(); ?></span></h4>
				<p><?php echo comment_text(); ?></p>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
	
	<?php if(comments_open()): ?>
		<form id="commentform" method="post" action="<?php echo comment_form_url(); ?>#comment">
			
			<?php echo comment_form_notifications(); ?>
			
			<?php echo comment_form_input_name('placeholder="Name"'); ?>
			<?php echo comment_form_input_email('placeholder="Email"'); ?>
			
			<p><?php echo comment_form_input_text('placeholder="Comment"'); ?></p>
				
			<p class="button"><?php echo comment_form_button('Submit'); ?></p>
			
		</form>
	<?php endif; ?>
	
</div>

<?php theme_include('partials/footer'); ?>
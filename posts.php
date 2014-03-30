<?php theme_include('header'); ?>

<div class="page-content inset">

	<div class="content-header">
      <h1>
          <a id="menu-toggle" href="#" class="btn btn-default"><i class="icon-reorder"></i></a>
      </h1>
  </div>

	<div class="row">
		<div class="col-md-10">
			<section class="sheet answer">
			<!-- 	<header class="ribbon"><?php echo page_title(); ?></header> -->
				<?php if(has_posts()): ?>
					<!-- We have posts, it's safe to loop. -->
					<?php while(posts()): ?>
					     <h1><?php echo article_title(); ?></h1>
					     <?php echo article_markdown(); ?>
					<?php endwhile; ?>

					<?php if(has_pagination()): ?>
					<nav class="pagination">
						<div class="wrap">
							<?php echo posts_prev(); ?>
							<?php echo posts_next(); ?>
						</div>
					</nav>
					<?php endif; ?>
				<?php else: ?>
					<p>Looks like you have some writing to do!</p>
				<?php endif; ?>
			</section>
		</div>
	</div>
<?php theme_include('footer'); ?>

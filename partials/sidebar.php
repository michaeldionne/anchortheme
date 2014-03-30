<!DOCTYPE html>
<html>
	<head>
		<title><?php echo site_name(); ?> &middot; <?php echo page_title('Page can’t be found'); ?> </title>
		<meta charset="utf-8">
		<meta name="description" content="<?php echo site_description(); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('assets/css/grid.css'); ?>"/>
		<link rel="stylesheet" href="<?php echo theme_url('assets/css/main.css'); ?>"/>
	</head>
	<body>
		<div class="col-1-5" id="sidebar">
		
			<h2><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h2>
		
			<nav>
				<?php if(has_menu_items()): ?>
					<nav id="main" role="navigation">
						<ul>
							<?php while(menu_items()): ?>
								<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
									<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
										<?php echo menu_name(); ?>
									</a>
								</li>
							<?php endwhile; ?>
						</ul>
					</nav>
				<?php endif; ?>
			</nav>
			
			<h2 id="cat">Categories</h2>
			<ul>
				<?php while(categories()): ?>
					<li>
					<a href="<?php echo category_url(); ?>">
						<?php echo category_title(); ?>
					</a>
					</li>
					
				<?php endwhile; ?>
			</ul>
			
			<form id="search" action="<?php echo search_url(); ?>" method="post">
				<input type="text" name="term" placeholder="Search">
			</form>
			
		</div>
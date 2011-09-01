<div class="span-6 last" id="mainSideWrapper">
			<div id="sidebar">				
				<!-- feed -->
				<div id="feedLogo">
					<a title="Subscribe to the RSS Feed" href="http://feeds.feedburner.com/MidnightLight">
						<span>RSS Feed</span>
					</a>
				</div>
				
				<!-- Blog info -->
				<div class="widgetMain">
					<h2 class="widgetMainTitle"><?php bloginfo('name'); ?></h2>
					<span class="widgetMainDescription"><?php bloginfo('description'); ?></span>
				</div>
				
				<br />
			
			<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
				<!-- categories -->
				<div class="widget">
					<h3 class="widgetTitle">Categories</h3>
					<ul>
						<?php wp_list_cats('sort_column=name&optioncount=0&depth=1'); ?>
					</ul>
				</div>

				<!-- archives -->
				<div class="widget">
					<h3 class="widgetTitle">Archives</h3>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</div>
				
				<?php endif; ?>
				
				<!-- posts -->
				<?php
					if (is_single()) {
						$posts_widget_title = 'Recent Posts';
					} else {
						$posts_widget_title = 'Random Posts';
					}
				?>
				
				<div class="widget">
					<h3 class="widgetTitle"><?php echo $posts_widget_title; ?></h3>
					<ul>
						<?php
							if (is_single()) {
								$posts = get_posts('numberposts=10&orderby=post_date');
							} else {
								$posts = get_posts('numberposts=5&orderby=rand');
							}
							foreach($posts as $post) {
								setup_postdata($post);
								echo '<li><a title="' . get_the_title() . '" href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
							}
							$post = $posts[0];
						?>
					</ul>
				</div>
				
				<!-- blogroll -->
				<div class="widget">
					<h3 class="widgetTitle">Links</h3>
					<ul>
						<?php get_links(2, '<li>', '</li>', '', TRUE, 'url', FALSE); ?>
					</ul>
				</div>
				
			</div>
		</div>
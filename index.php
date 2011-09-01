<?php get_header(); ?>



	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); update_post_caches($posts); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2 class="postTitle"><a class="postTitleLink" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('l, F jS, Y') ?></small>
				<div class="entry">
					<p></p>
					<div class="entryContent">
						<?php 
							the_content(__('Read more...', 'midnightlight'));
							//if(is_category() || is_archive() || is_home()) {
							//	the_excerpt();
							//} else {
							//	the_content();
							//} 
						?> 
					</div>
					<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted by <span class="author"><?php the_author_posts_link(); ?></span> in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				</div>
			</div>
		<?php endwhile; ?>

	<?php else : ?>
		<div class="errorbox">
			<?php _e('Sorry, no posts matched your criteria.', 'midnightlight'); ?>
		</div>
	<?php endif; ?>

	<div id="pagenavi">
		<?php if(function_exists('wp_pagenavi')) : ?>
			<?php wp_pagenavi() ?>
		<?php else : ?>
			<span class="newer"><?php previous_posts_link(__('Newer Entries', 'midnightlight')); ?></span>
			<span class="older"><?php next_posts_link(__('Older Entries', 'midnightlight')); ?></span>
		<?php endif; ?>
		<div class="fixed"></div>
	</div>

	
<?php get_footer(); ?>
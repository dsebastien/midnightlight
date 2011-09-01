<?php get_header(); ?>

<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>

	<div id="postpath">
		<a title="<?php _e('Home!', 'midnightlight'); ?>" href="<?php echo get_settings('home'); ?>/"><?php _e('Home', 'midnightlight'); ?></a>
		 &gt; <?php the_category(', '); ?>
		 &gt; <?php the_title(); ?>
	</div>
	
	<div class="post" id="post-<?php the_ID(); ?>">
				<h2 class="postTitle"><a class="postTitleLink" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('l, F jS, Y') ?></small>
				<div class="entry">
					<p></p>
					<div class="entryContent"><?php the_content(); ?></div>
					<br />
					<p class="postmetadata">
						<?php the_tags('Tags: ', ', ', '<br />'); ?> 
						Posted by <span class="author"><?php the_author_posts_link(); ?></span> in <?php the_category(', ') ?></span> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				</div>
	</div>
	
<?php else : ?>
	<div class="errorbox">
		<?php _e('Sorry, no posts matched your criteria.', 'midnightlight'); ?>
	</div>
<?php endif; ?>


<?php comments_template(); ?>

<br />

<?php get_footer(); ?>

<?php include(TEMPLATEPATH.'/head.php'); ?>
<?php get_header(); ?>
<body="body_index">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<div class="post" id="<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php the_content(); ?>         
			</div>
		</div> <!-- .post -->

		<?php endwhile; else : ?>

		<div class="post">
			<h2>Page Not Found</h2>
			<p>Looks like the page you're looking for isn't here anymore. Try browsing the <a href="">categories</a>, <a href="">archives</a>, or using the search box below.</p>
		</div> <!-- .post -->

		<?php endif; ?>
	
<?php next_posts_link('&laquo; Older Entries') ?>
<?php previous_posts_link('Newer Entries &raquo;') ?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>

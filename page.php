<?php include(TEMPLATEPATH.'/head.php'); ?>
<?php get_header(); ?>

<body="body_page">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>	
		<div class="post" id="<?php the_ID(); ?>">	
			<h2><?php the_title(); ?></h2>
		
			<div class="entry">
				<?php the_content(); ?>
			</div>		
		</div> <!-- .post -->

		<?php endwhile; endif; ?>
	
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>
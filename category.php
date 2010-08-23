<?php get_header(); ?>

<?php if (is_category('3')) { ?>
<body id="body_botanics">
<?php } else if (is_category('4')) { ?>
<body id="body_etnography">
<?php } else if (is_category('5') || is_category('6')) { ?>
<body id="body_normal">
<?php } ?>
    
  <?php if (is_category('3') || is_category('4')) { ?>
	<h1><?php single_cat_title(); ?></h1>
	<!-- news -->
	<p>Notizias</p>
	<?php global $post;
	if (is_category('3')) {
	$myposts = get_posts(array('category__and' => array(3,5)));
	} elseif (is_category('4')) { 
	$myposts = get_posts(array('category__and' => array(4,5)));
  }
	foreach($myposts as $post) :
	setup_postdata($post);
	?>
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="text"><?php the_title(); ?></a></h2>
	<?php endforeach; ?>
	<!-- /news -->
	
	<!-- agenda -->
	<p>Eventus</p>
	<?php global $post;
	if (is_category('3')) {
	$myposts = get_posts(array('category__and' => array(3,6)));
	} elseif (is_category('4')) { 
	$myposts = get_posts(array('category__and' => array(4,6)));
  }
	foreach($myposts as $post) :
	setup_postdata($post);
	?>
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="text"><?php the_title(); ?></a></h2>
	<?php endforeach; ?>
	
	<?php ec3_get_calendar("ec3default",1); ?>
	<!-- /agenda -->
  <?php } ?>
  
  <?php if (is_category('5') || is_category('6')) { ?>
	<h1><?php single_cat_title(); ?></h1>
	<?php if(have_posts()) : ?>		
	<?php while(have_posts()) : the_post(); ?>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php endwhile; else : ?>
	<h2>Page Not Found</h2>
	<p>Looks like the page you're looking for isn't here anymore. Try browsing the <a href="">categories</a>, <a href="">archives</a>, or using the search box below.</p>	
	<?php include(TEMPLATEPATH.'/searchform.php'); ?>
	<?php endif; ?>
  <?php } ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
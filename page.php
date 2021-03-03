<?php get_header(); 
/* 
Template Name Posts: Post 
*/ 
?>

<main role="main" class="container shadow-sm">
	
		<?php if ( is_home() &&  has_post_thumbnail() ) {
		the_post_thumbnail();}
	?>
    
    <div id="content">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post();
                the_content();
            endwhile; ?>
		<?php comments_template(); ?>
    </div>

  <div class="faceCircle">
    <img class="faceImg d-none d-md-block" src="<?php bloginfo('template_directory'); ?>/images/miesieczny.jpg" data-toggle="modal" data-target="#exampleModal">
  </div>
  
</main><!-- /.container -->

<?php get_footer();  ?>

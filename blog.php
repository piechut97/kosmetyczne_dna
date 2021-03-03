<?php get_header(); /* Template Name: Blog */?>

<main role="main" 
	  class="container shadow-sm">
    
<!--Początkowo wyświetlane 5 postów, poźniej po kliknięciu buttona na dole kolejne 5 itd. Paginację ogarnę jak bedzie 
  już troche tych postów, póki co wystarczy takie rozwiązanie-->

  <div id="content">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post();
                the_content();
            endwhile;
	  ?>
	  
	  <div class="row justify-content-center mb-4">
			 <?php echo do_shortcode('[ajax_load_more loading_style="infinite fading-blocks" container_type="div" post_type="post" posts_per_page="1" offset="5" button_label="Zobacz starsze"]'); ?>
	</div>
            
  </div>
  
	
  <div class="faceCircle">
    <img class="faceImg" src="<?php bloginfo('template_directory'); ?>/images/miesieczny.jpg" data-toggle="modal" data-target="#Modal" alt="Portret autorki">
  </div>
  <div class="faceCircle">
    <img class="faceImg d-none d-md-block" src="<?php bloginfo('template_directory'); ?>/images/miesieczny.jpg" data-toggle="modal" data-target="#Modal">
  </div>
  
</main><!-- /.container -->

<?php get_footer();  ?>

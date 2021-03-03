 <?php get_header(); /* Template Name: Strona główna */ ?>
 
<div class="landing margin_bott">
     <img src="<?php bloginfo('template_directory'); ?>/images/landing.png" alt="Kosmetyka okiem chemika" style="width: 100%;">
</div>
 
 
<main role="main" class="container shadow-sm">
<!--Wyświetlane 3 najnowsze posty-->

        <div id="content">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post();
                the_content();
            endwhile; ?>
        </div>

  <div class="row justify-content-center mb-4">
    <a href="https://www.kosmetycznedna.pl/blog" class="link"><h5>Zobacz więcej postów</h5></a>
  </div>
  <div>
    <img src="<?php bloginfo('template_directory'); ?>/images/igicon.png" style="max-width: 50px; max-height: 50px;display: block; margin-left: auto; margin-right: auto;">
  </div>
  <hr>
  <div class="row">
  <?php if ( is_active_sidebar( 'ig-1' ) ) : ?>
    <div class="ig-area">
      <?php dynamic_sidebar( 'ig-1' ); ?>
    </div>
    <?php endif; ?>
   
  </div>
  <hr>
  <div class="faceCircle">
    <img class="faceImg d-none d-md-block" src="<?php bloginfo('template_directory'); ?>/images/miesieczny.jpg" data-toggle="modal" data-target="#Modal" alt="Portret autorki">
  </div>

</main><!-- /.container -->

<?php get_footer(); ?>
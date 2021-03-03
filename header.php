<!doctype html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title><?php wp_title("",true); ?> | <?php bloginfo('name'); ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">
    
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Quicksand">
          
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css" rel="stylesheet">

    <?php wp_head(); ?>
  </head>
  <body>
<nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="Menu główne"  >
    <?php wp_nav_menu([
        'theme_location' => 'primary_menu',
        'menu_class' => 'nav justify-content-center',
        ]);?>
</nav>
<!-- Modal Starts -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">O mnie</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="row">
              <div class="col-md-4">
                <img src="<?php bloginfo('template_directory'); ?>/images/miesieczny.jpg" style="max-width: 100%;" class="mb-3" alt="Portret autorki">
              </div>
              <div class="col-md-8">
                <h6>Cześć! Bardzo mi miło, że tutaj jesteś!</h6>
                <h6>Dna z definicji jest nośnikiem informacji. Dlatego też nazwa tej strony nie jest przypadkowa. Chce, aby ta strona była nośnikiem wiedzy z zakresu chemii kosmetyków. Rzetelnej wiedzy. Wiedzy, której nie znajdziesz prawdopodobnie na żadnym innym blogu. Oraz takiej, którą wykorzystasz w praktyce i  pozwoli Ci stać się świadomym konsumentem. A co za tym idzie, zaoszczędzić pieniądze na kosmetykach niewartych swojej ceny. </h6>
		<h6>Bo pamiętaj nie ma czegoś takiego jak zły składnik czy zły skład kosmetyku, są tylko kosmetyki nie warte swojej ceny.</h6>
		<h6>Ja nazywam się Agata Owczarek. </h6>
		<h6>Od wielu lat pasjonują mnie kosmetyki pielęgnacyjne. Swoją pasję postanowiłam przenieść do życia zawodowego. Dlatego też w tym kierunku ukończyłam studia chemiczne, a dokładnie kierunek chemia kosmetyczna. Na tym polu uzyskałam tytuł magistra. </h6>
		<h6>Wszelka wiedza, którą tu znajdziecie jest racjonalna i obiektywna, poparta badaniami naukowymi.</h6>
		<h6>To miejsce stworzyłam z myślą o Tobie.</h6>
		<h6>Przyjemnego czytania!</h6>
              </div>
            </div>

        </div>

      </div>
    </div>
  </div>
    <!-- Modal Ends -->
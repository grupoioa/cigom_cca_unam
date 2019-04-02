<!DOCTYPE html>
<html lang="en" class="no-js">
  <!-- Head -->
  <head>
    <title><?php echo $title; ?></title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="CIGoM, CCA-UNAM, Grupo IOA, Investigacion">
    <meta name="description" content="Página del Grupo CCA-UNAM de CIGoM">
    <meta name="author" content="Samantha Pantoja Ortiz y Cuauhtémoc Silva Vega">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('favicon.ico');?>" type="image/x-icon">

    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,600,700" rel="stylesheet">

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/bootstrap/css/bootstrap.css');?>">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/font-awesome/css/fontawesome-all.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/slick-carousel/slick.css');?>">

    <!-- Theme Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css');?>">

    <style type="text/css">

    </style>
  </head>
  <!-- End Head -->

  <body>
    <!-- Header -->
    <header>
    	<!-- Header CIGoM --> 
 <!--<section class="py-1 bg-primary">-->
		 <section class="py-1" style="background-color: #0F2C55;">
		    <div class="container">
		      <div class="row">
		        <div class="mx-auto text-lg-left col-lg-6 pr-4">
		          <h1 class="text-right mt-4 text-white font-weight-bold"->Grupo CCA-UNAM</h1>
		          <p class="mb-0 text-right text-white">Consorcio de Investigación del Golfo de México.</p>
		        </div>
		        <div class="mr-auto d-flex justify-content-center align-items-center p-3 col-lg-4">
		        	<img class="img-fluid d-block w-25 mx-auto px-2" src="<?php echo base_url('assets/img/logos/ioa_blanco.png');?>">
		        	<img class="img-fluid d-block w-25 mx-auto px-2" src="<?php echo base_url('assets/img/logos/cca_blanco.png');?>">
		        	<img class="img-fluid d-block w-25 mx-auto px-2" src="<?php echo base_url('assets/img/logos/unam_blanco.png');?>">
		        	<img class="img-fluid d-block w-25 mx-auto px-2" src="<?php echo base_url('assets/img/logos/cigom_blanco.png');?>">
            </div>
		      </div>
		    </div>
		  </section>
    	<!-- End Header CIGoM -->
      <!-- Navbar -->
  <!--<nav class="navbar navbar-expand-lg navbar-dark bg-primary">-->
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0F2C55;">
        <div class="container-fluid">
         <!-- <a class="navbar-brand" href="<?php echo base_url('inicio'); ?>">
            <img src="<?php echo base_url('assets/img/logo-white.png');?>" alt="CCA-UNAM" style="width: 100px;">
          </a> -->

          <button class="navbar-toggler ml-auto" type="button"
                  data-toggle="collapse"
                  data-target="#navbarTogglerDemo"

                  aria-controls="navbarTogglerDemo"
                  aria-expanded="false"
                  aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
              <li class="nav-item mr-4 mb-2 mb-lg-0">
                <a class="nav-link active" href="<?php echo base_url(''); ?>">Inicio</a>
              </li>
              <li class="nav-item dropdown mr-4 mb-2 mb-lg-0">
                <a class="nav-link" href="<?php echo base_url('proyectos'); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Proyectos <i class="fas fa-angle-down small ml-1"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo base_url(''); ?>index.php/modelacion_atmosferica">Modelación atmosférica</a>
                  <a class="dropdown-item" href="<?php echo base_url(''); ?>index.php/modelacion_oceanica">Modelación oceánica</a>
                  <a class="dropdown-item" href="<?php echo base_url(''); ?>index.php/modelacion_mallas">Modelación de mallas no estructuradas</a>
                  <a class="dropdown-item" href="<?php echo base_url(''); ?>index.php/atlas_meteorologico">Atlas meteorológico digital</a>
                  <a class="dropdown-item" href="<?php echo base_url(''); ?>index.php/tomo_1">Tomo 1: Meteorología</a>
                  <a class="dropdown-item" href="<?php echo base_url(''); ?>index.php/modulos_derrames">Módulos de derrames</a>
                  <a class="dropdown-item" href="<?php echo base_url(''); ?>index.php/bases_datos">Bases de datos</a>
                </div>
              </li>
              <li class="nav-item dropdown mr-4 mb-2 mb-lg-0">
                <a class="nav-link" href="<?php echo base_url('publicaciones'); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Publicaciones <i class="fas fa-angle-down small ml-1"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo base_url('tesis'); ?>">Tesis</a>
                  <a class="dropdown-item" href="<?php echo base_url('articulos'); ?>">Artículos</a>
                  <a class="dropdown-item" href="<?php echo base_url(''); ?>index.php/carteles">Carteles</a>
                  <a class="dropdown-item" href="<?php echo base_url(''); ?>index.php/presentaciones">Presentaciones orales</a>
                </div>
              </li>
              <li class="nav-item dropdown mr-4 mb-2 mb-lg-0">
                <a class="nav-link" href="<?php echo base_url('proyectos'); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Galerías <i class="fas fa-angle-down small ml-1"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo base_url(''); ?>index.php/fotos">Fotos</a>
                  <a class="dropdown-item" href="<?php echo base_url(''); ?>index.php/videos">Vídeos</a>
                </div>
              </li>
              <li class="nav-item mr-4 mb-2 mb-lg-0">
                <a class="nav-link" href="<?php echo base_url(''); ?>index.php/quienes_somos">Quiénes somos</a>
              </li>
              <!-- <li class="nav-item mr-4 mb-2 mb-lg-0">
                <a class="nav-link" href="<?php echo base_url(''); ?>index.php/noticias">Noticias</a>
              </li>-->
              <li class="nav-item mr-4 mb-2 mb-lg-0">
                <a class="nav-link" href="<?php echo base_url(''); ?>index.php/contacto">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
    </header>
    <!-- End Header -->

<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>

  <meta charset="<?php echo bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo bloginfo('title');?></title>

  <!-- Bootstrap core CSS -->
  <!-- Custom styles for this template -->
  <?php wp_head();?>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo home_url();?>">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <?php 
          wp_nav_menu(array(
            "theme_location" => 'sbt_primary_menu_id',
            "container" => false,
            "items_wrap" => '<ul class = "navbar-nav ml-auto">%3$s</ul>',


          ));
        
        ?>
        <!-- <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul> -->
      </div>
    </div>
  </nav>
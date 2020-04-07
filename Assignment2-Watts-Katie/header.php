<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>

  <!--link to style sheet css file -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" />
<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <?php if(get_header_image()==''){?>
            <h1><a href="<?php echo get_home_url();?>"><?php bloginfo('name');?></a></h1><?php
          }else{?>
              <a href="<?php echo get_home_url();?>"><img src="<?php header_image();?>"height="<?php echo get_custom_header()->height;?>
                "width="<?php echo get_custom_header()->width;?>" alt="logo"/></a>
            <?php } ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 d-flex align-items-cent">
          <nav class="navigation-bar">
        <?php
        if(has_nav_menu('top-menu')){
        wp_nav_menu(array('theme_location'=> 'top-menu' , 'container_class'=> 'top-menu-class'));
      }else{
        echo'please select a top menu  in dashboard';
      }
        ?>
          </nav>
        </div>
      </div>


          <div class="col-sm-4 widget-header float-right">
          <?php dynamic_sidebar('right-header');

           ?>

    </div>
  </div>



  </header>

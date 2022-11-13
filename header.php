<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device=width, initial-scale-1" />

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header>
      <div class="container">
        <nav>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#posts">Posts</a></li>
          </ul>
        </nav>
        <div class="row">
          <div class="col-lg-6 logo-container">
            <?php
              //Display logo if it's set, if not, display site title.
              if(get_header_image() == ''){ ?>
                <h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                  <?php
                  }else { ?>
                    <a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Company Logo"/></a>
                  <?php
                  }
            ?>

          </div>
          <div class="col-lg-6 navigation"></div>
        </div>
      </div>

    </header>

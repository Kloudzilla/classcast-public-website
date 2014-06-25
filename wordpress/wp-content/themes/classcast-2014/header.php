<?php
  global $template_section;
?>
<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Wed Jun 18 2014 05:44:26 GMT+0000 (UTC) -->
<html data-wf-site="538bcc732502ff2560203e03">
<head>
  <meta charset="utf-8">
  <title>Classcast External</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/webflow.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/classcast-external.webflow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Raleway:100,200,300,regular,500,600,700,800,900"]
      }
    });
  </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/placeholder/favicon.ico">
  <!-------------------------------
IOS 7 ICON FONT - DEMO PAGE HERE: http://ios7-icon-font-demo.herokuapp.com/
-------------------------------->
  <style>
    @font-face {
  font-family: 'ios7-icon';
  src:
    url('fonts/ios7-icon.woff') format('woff');
  font-weight: normal;
  font-style: normal;
}
.icon {
  display: inline-block;
  font-size: 32px;
  font-family: 'ios7-icon';
  margin-right: 20px;
  -webkit-text-rendering: geometricPrecision;
  -moz-text-rendering: geometricPrecision;
  -ms-text-rendering: geometricPrecision;
  -o-text-rendering: geometricPrecision;
  text-rendering: geometricPrecision;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -ms-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
}
.text {
  font-size: 24px;
  line-height: 32px;
}
  </style>
  <!-------------------------------
TOP NAVIGATION & FOOTER UNDERLINE HOVER
-------------------------------->
  <style>
    .cc-navigation-menu-list-item-link:hover .cc-navigation-menu-list-item-text {
        border-bottom:2px solid white;
    }
    .cc-navigation-menu-list-item-link:hover .cc-navigation-menu-list-item-text-dark {
        border-bottom:2px solid #555;
    }
    .cc-footer-list-item-link:hover .cc-footer-list-item-text {
        border-bottom:2px solid white;
    }
  </style>
  <!-------------------------------
QUOTE DOTS
-------------------------------->
  <style>
    .w-slider-dot {
        background:none;
        border:1px solid #555;
    }
    .w-slider-dot.w-active {
        background:none;
        border:3px solid #555;
    }
  </style>

  <?php
    wp_head();
  ?>
</head>
<body>
  <div class="cc-external-wrap">
    <div class="cc-navigation" data-ix="navigation-past-hero">
      <div class="w-container cc-navigation-items-wrap">
        <a class="w-inline-block cc-navigation-item-logo" href="<?php echo get_home_url(); ?>"></a>
        <ul class="w-list-unstyled w-clearfix cc-navigation-menu-list">
          <?php 
            foreach(wp_get_nav_menu_items('primary') as $primary_menu_item){
          ?>
            <li class="cc-navigation-menu-list-item">
              <a class="w-inline-block cc-navigation-menu-list-item-link" href="<?php echo $primary_menu_item->url;?>">
                <div class="cc-navigation-menu-list-item-text"><?php echo $primary_menu_item->title;?></div>
              </a>
            </li>
      
          <?php
            }
          ?>

          
          <li class="w-hidden-small w-hidden-tiny cc-navigation-menu-list-item">
            <a class="w-inline-block cc-navigation-menu-list-item-link" href="http://manage.classcast.co">
              <div class="cc-navigation-menu-list-item-text">Log In</div>
            </a>
          </li>
          <li class="cc-navigation-menu-list-item">
            <a class="w-inline-block cc-navigation-menu-list-item-link" href="#">
              <div class="cc-navigation-menu-list-item-text-signup">Get Started</div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="cc-navigation-past-hero">
      <div class="w-container cc-navigation-items-wrap">
        <a class="w-inline-block cc-navigation-item-logo-pasthero" href="#"></a>
        <ul class="w-list-unstyled w-clearfix cc-navigation-menu-list pop-down">
            
          <?php 
            foreach(wp_get_nav_menu_items('primary') as $primary_menu_item){
          ?>
            <li class="w-clearfix cc-navigation-menu-list-item">
              <a class="w-inline-block cc-navigation-menu-list-item-link pop-down" href="<?php echo $primary_menu_item->url;?>">
                <div class="cc-navigation-menu-list-item-text-dark"><?php echo $primary_menu_item->title;?></div>
              </a>
            </li>
          <?php
            }
          ?>

          <li class="w-hidden-small w-hidden-tiny w-clearfix cc-navigation-menu-list-item">
            <a class="w-inline-block cc-navigation-menu-list-item-link pop-down" href="http://manage.classcast.co">
              <div class="cc-navigation-menu-list-item-text-dark">Log In</div>
            </a>
          </li>
          
          <li class="cc-navigation-menu-list-item">
            <a class="w-inline-block cc-navigation-menu-list-item-link pop-down sign-up" href="#">
              <div class="cc-navigation-menu-list-item-text-signup-dark">Get Started</div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <?php
      if($template_section == 'home') {
    ?>
        <div class="cc-hero home">
          <div class="w-container cc-content-container cc-home-hero-content">
            <h3 class="cc-home-hero-headline">Monetize your&nbsp;<br>mobile content <br>today.</h3>
            <div class="cc-home-hero-subtext">Collect reoccuring revenue by delivering classes the way
              <br>your customers want it, direct to their mobile.</div>
            <a class="w-inline-block cc-button-s blue" href="#">
              <div>Get Started</div>
            </a>
          </div>
          <div class="w-hidden-medium w-hidden-small w-hidden-tiny cc-home-hero-image" data-ix="slide-from-right"></div>
          <div class="w-hidden-small w-hidden-tiny cc-section cc-trusted">
            <div class="w-container cc-content-container">
              <h3 class="cc-trusted-headline">Trusted and loved by these great companies</h3>
              <div class="cc-trusted-logo-wrap">
                <div class="cc-trusted-logo total-gym"></div>
                <div class="cc-trusted-logo gymstick"></div>
                <div class="cc-trusted-logo kettleworx"></div>
                <div class="cc-trusted-logo yogafit"></div>
                <div class="cc-trusted-logo iom"></div>
              </div>
            </div>
          </div>
      <?php
        } else if($template_section == 'about') {
      ?>
          <div class="cc-hero about" data-ix="navigation-past-hero">
          <div class="w-container cc-content-container cc-about-hero-content">
            <h1 class="cc-about-hero-headline"><?php the_title(); ?></h1>
          </div>
          <div class="cc-section cc-hero-navigation">
            <div class="w-container cc-content-container">
              <ul class="w-list-unstyled w-clearfix cc-hero-navigation-list">
                <li class="w-clearfix cc-hero-navigation-list-item">
                  <a class="w-inline-block cc-hero-navigation-list-item-link" href="about-team.html">
                    <div>Team</div>
                  </a>
                </li>
                <li class="w-clearfix cc-hero-navigation-list-item">
                  <a class="w-inline-block cc-hero-navigation-list-item-link" href="about-resources.html">
                    <div>Resources</div>
                  </a>
                </li>
                <li class="w-clearfix cc-hero-navigation-list-item">
                  <a class="w-inline-block cc-hero-navigation-list-item-link" href="about-jobs.html">
                    <div>Jobs</div>
                  </a>
                </li>
                <li class="w-clearfix cc-hero-navigation-list-item">
                  <a class="w-inline-block cc-hero-navigation-list-item-link" href="about-press.html">
                    <div>Press</div>
                  </a>
                </li>
                <li class="w-clearfix cc-hero-navigation-list-item">
                  <a class="w-inline-block cc-hero-navigation-list-item-link" href="about-contact.html">
                    <div>Contact</div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

    <?php 
      } elseif ($template_section == 'blog') {
    ?>
      <div class="cc-hero blog" data-ix="navigation-past-hero">
        <div class="w-container cc-content-container cc-blog-hero-content">
          <h1 class="cc-blog-hero-headline">
            Blog
          </h1>
        </div>
      </div>

    <?php
      } elseif ($template_section == 'pricing') {
    ?>

      <div class="cc-hero pricing" data-ix="navigation-past-hero">
        <div class="w-container cc-content-container cc-pricing-hero-content">
          <h3 class="cc-pricing-hero-headline">Pricing. Plain and simple</h3>
          <p class="cc-pricing-hero-subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.</p>
        </div>
      </div>

    <?php
      }
      else {}
    ?>
    </div>
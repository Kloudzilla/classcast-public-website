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

  <!--<?php
    wp_head();
  ?>-->

</head>
<body>
  <div class="cc-external-wrap">
    <div class="w-clearfix modal-background">
      <a class="w-inline-block close-modal" href="#">
        <div>CLOSE</div>
      </a>
      <div class="modal-window">
        <h3>Heading</h3>
        <div class="w-form">
          <form id="email-form-2" name="email-form-2" data-name="Email Form 2">
            <div class="cc-modal-scroll">
              <div class="w-row cc-modal-form-row">
                <div class="w-col w-col-6">
                  <input class="w-input cc-input" id="field-2" type="text" placeholder="Full Name" name="field-2" required="required">
                </div>
                <div class="w-col w-col-6">
                  <input class="w-input cc-input" id="field-3" type="text" placeholder="Company Name" name="field-3" required="required" data-name="Field 3">
                </div>
              </div>
              <div class="w-row cc-modal-form-row">
                <div class="w-col w-col-6">
                  <input class="w-input cc-input" id="field-6" type="text" placeholder="Email Address" name="field-6" required="required" data-name="Field 6">
                </div>
                <div class="w-col w-col-6">
                  <input class="w-input cc-input" id="field-7" type="text" placeholder="Phone Number" name="field-7" required="required" data-name="Field 7">
                </div>
              </div>
              <div class="w-row cc-modal-form-row">
                <div class="w-col w-col-6">
                  <label for="field-9">Do you have any content that you distribute now?</label>
                  <select class="w-select cc-dropdown" id="field-9" name="field-9" data-name="Field 9">
                    <option value="">Select one...</option>
                    <option value="Content-First">I'm just getting started, not yet</option>
                    <option value="Content-Second">I'm selling physical products but not digital</option>
                    <option value="Content-Third">I'm selling online but not yet on mobile</option>
                  </select>
                </div>
                <div class="w-col w-col-6">
                  <label for="field-8">What Industry are you involved with?</label>
                  <select class="w-select cc-dropdown" id="field-8" name="field-8">
                    <option value="">Select one...</option>
                    <option value="Industry-First">Fitness</option>
                    <option value="Industry-Second">Education</option>
                    <option value="Industry-Third">Health</option>
                    <option value="Industry-Fourth">Other</option>
                  </select>
                </div>
              </div>
              <input class="w-button cc-button-s blue" type="submit" value="Submit" data-wait="Please wait...">
            </div>
          </form>
          <div class="w-form-done">
            <p>Thank you! Your submission has been received!</p>
          </div>
          <div class="w-form-fail">
            <p>Oops! Something went wrong while submitting the form :(</p>
          </div>
        </div>
      </div>
    </div>
    <div class="cc-hero <?php echo(($template_section =='home')?'home' :'');?> <?php echo(($template_section =='about')?'about' :'');?>
      <?php echo(($template_section =='blog')?'blog' :'');?> <?php echo(($template_section =='pricing')?'pricing' :'');?>">
      <div class="cc-navigation" data-ix="navigation-past-hero">
        <div class="w-container cc-navigation-items-wrap">
          <ul class="w-list-unstyled w-clearfix cc-navigation-menu-list">

            <li class="w-clearfix cc-navigation-menu-list-item cc-logo">
              <a class="w-inline-block cc-navigation-item-logo" href="/"></a>
            </li>

            <li class="w-hidden-medium w-hidden-small w-hidden-tiny cc-navigation-menu-list-item">
              <a class="w-inline-block cc-navigation-menu-list-item-link modal-link" href="#">
                <div class="cc-navigation-menu-list-item-text-signup">Get Started</div>
              </a>
            </li>

          <?php 
            foreach(wp_get_nav_menu_items('primary') as $primary_menu_item){
          ?>
            <li class="w-hidden-medium w-hidden-small w-hidden-tiny cc-navigation-menu-list-item">
              <a class="w-inline-block cc-navigation-menu-list-item-link" href="<?php echo $primary_menu_item->url;?>">
                <div class="cc-navigation-menu-list-item-text"><?php echo $primary_menu_item->title;?></div>
              </a>
            </li>      
          <?php
            }
          ?>
            <li class="w-hidden-main cc-navigation-menu-list-item">
              <a class="w-inline-block cc-navigation-menu-list-item-link cc-drop-link" href="#">
                <div class="cc-navigation-menu-list-item-text">Menu</div>
              </a>
            </li>

          </ul>
        </div>
        <div class="cc-drop">
          <div class="w-container cc-content-container cc-drop-content">
            <ul class="w-list-unstyled cc-drop-list">

              <?php 
                foreach(wp_get_nav_menu_items('drop') as $drop_menu_item){
              ?>
                <li class="cc-drop-list-item">
                  <a class="w-inline-block cc-drop-list-item-link" href="<?php echo $drop_menu_item->url;?>">
                    <div class="cc-drop-list-item-link-text"><?php echo $drop_menu_item->title;?></div>
                  </a>
                </li>
              <?php
                }
              ?>

              <li class="cc-drop-list-item">
                <a class="w-inline-block cc-drop-list-item-link modal-link" href="#">
                  <div>Get Started</div>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>
      <div class="cc-navigation-past-hero">
        <div class="w-container cc-navigation-items-wrap">
          <ul class="w-list-unstyled w-clearfix cc-navigation-menu-list">

            <li class="w-hidden-medium w-hidden-small w-hidden-tiny cc-navigation-menu-list-item">
              <a class="w-inline-block cc-navigation-menu-list-item-link pop-down sign-up modal-link" href="#">
                <div class="cc-navigation-menu-list-item-text-signup-dark">Get Started</div>
              </a>
            </li>

          <?php 
            foreach(wp_get_nav_menu_items('primary') as $primary_menu_item){
          ?>
            <li class="w-hidden-medium w-hidden-small w-hidden-tiny w-clearfix cc-navigation-menu-list-item">
              <a class="w-inline-block cc-navigation-menu-list-item-link pop-down" href="<?php echo $primary_menu_item->url;?>">
                <div class="cc-navigation-menu-list-item-text-dark"><?php echo $primary_menu_item->title;?></div>
              </a>
            </li>
          <?php
            }
          ?>

            <li class="w-hidden-main cc-navigation-menu-list-item">
              <a class="w-inline-block cc-navigation-menu-list-item-link pop-down cc-drop-pasthero-link" href="#">
                <div class="cc-navigation-menu-list-item-text-dark">Menu</div>
              </a>
            </li>

            <li class="w-clearfix cc-navigation-menu-list-item cc-logo">
              <a class="w-inline-block cc-navigation-item-logo-pasthero" href="/"></a>
            </li>

          </ul>
        </div>
        <div class="cc-drop-pasthero">
          <div class="w-container cc-content-container cc-drop-content">
            <ul class="w-list-unstyled cc-drop-list">

              <?php 
                foreach(wp_get_nav_menu_items('drop') as $drop_menu_item){
              ?>
                <li class="cc-drop-list-item">
                  <a class="w-inline-block cc-drop-list-item-link" href="<?php echo $drop_menu_item->url;?>">
                    <div class="cc-drop-list-item-link-text"><?php echo $drop_menu_item->title;?></div>
                  </a>
                </li>
              <?php
                }
              ?>

              <li class="cc-drop-list-item">
                <a class="w-inline-block cc-drop-list-item-link modal-link" href="#">
                  <div>Get Started</div>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>

    <?php
      if($template_section == 'home') {
    ?>

    <div class="w-container cc-content-container cc-home-hero-content">
        <h3 class="cc-home-hero-headline">Monetize your&nbsp;<br>mobile content <br>today.</h3>
        <div class="cc-home-hero-subtext">Collect reoccuring revenue by delivering classes the way
          <br>your customers want it, direct to their mobile.</div>
        <a class="w-inline-block cc-button-s blue modal-link" href="#">
          <div>Get Started</div>
        </a>
      </div>
      <div class="w-hidden-medium w-hidden-small w-hidden-tiny cc-home-hero-image" data-ix="slide-from-right"></div>
    </div>
    <div class="w-hidden-small w-hidden-tiny cc-section cc-trusted">
      <div class="w-container cc-content-container">
        <h3 class="cc-trusted-headline">Trusted and loved by these great companies</h3>
        <div class="w-clearfix cc-trusted-logo-wrap">
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
        <div class="w-container cc-content-container cc-about-hero-content">
          <h1 class="cc-about-hero-headline">ABOUT&nbsp;US</h1>
        </div>
        <div class="cc-section cc-hero-navigation">
          <div class="w-container cc-content-container">
            <ul class="w-list-unstyled cc-hero-navigation-list">

              <?php 
                foreach(wp_get_nav_menu_items('heronav') as $heronav_menu_item){
              ?>
                <li class="w-clearfix cc-hero-navigation-list-item">
                  <a class="w-inline-block cc-hero-navigation-list-item-link" href="<?php echo $heronav_menu_item->url;?>">
                    <div><?php echo $heronav_menu_item->title;?></div>
                  </a>
                </li>
              <?php
                }
              ?>

            </ul>
          </div>
        </div>
      </div>

    <?php
      } else if($template_section == 'blog') {
    ?>
      <div class="w-container cc-content-container cc-blog-hero-content">
        <h1 class="cc-blog-hero-headline">BLOG</h1>
      </div>
    </div>

    <?php
      } else if($template_section == 'pricing') {
    ?>
      <div class="w-container cc-content-container cc-pricing-hero-content">
        <h3 class="cc-pricing-hero-headline">Pricing. Plain and simple</h3>
        <p class="cc-pricing-hero-subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.</p>
      </div>
    </div>

    <?php
      }
      else {}
    ?>
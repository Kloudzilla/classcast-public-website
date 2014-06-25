<?php
/* about */
?>
<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Wed Jun 25 2014 00:36:10 GMT+0000 (UTC) -->
<html data-wf-site="538bcc732502ff2560203e03">
<head>
  <meta charset="utf-8">
  <title>Classcast <?php the_title(); ?></title>
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
</head>
<body>
  <div class="cc-external-wrap">
    <div class="cc-navigation" data-ix="navigation-past-hero">
      <div class="w-container cc-navigation-items-wrap">
        <a class="w-inline-block cc-navigation-item-logo" href="index.html"></a>
        <ul class="w-list-unstyled w-clearfix cc-navigation-menu-list">
          <li class="cc-navigation-menu-list-item">
            <a class="w-inline-block cc-navigation-menu-list-item-link" href="about-team.html">
              <div class="cc-navigation-menu-list-item-text">About</div>
            </a>
          </li>
          <li class="cc-navigation-menu-list-item">
            <a class="w-inline-block cc-navigation-menu-list-item-link" href="pricing.html">
              <div class="cc-navigation-menu-list-item-text">Pricing</div>
            </a>
          </li>
          <li class="w-hidden-small w-hidden-tiny cc-navigation-menu-list-item">
            <a class="w-inline-block cc-navigation-menu-list-item-link" href="blog.html">
              <div class="cc-navigation-menu-list-item-text">Log In</div>
            </a>
          </li>
          <li class="cc-navigation-menu-list-item">
            <a class="w-inline-block cc-navigation-menu-list-item-link" href="blog.html">
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
          <li class="w-clearfix cc-navigation-menu-list-item">
            <a class="w-inline-block cc-navigation-menu-list-item-link pop-down" href="about-team.html">
              <div class="cc-navigation-menu-list-item-text-dark">About</div>
            </a>
          </li>
          <li class="w-clearfix cc-navigation-menu-list-item">
            <a class="w-inline-block cc-navigation-menu-list-item-link pop-down" href="pricing.html">
              <div class="cc-navigation-menu-list-item-text-dark">Pricing</div>
            </a>
          </li>
          <li class="w-hidden-small w-hidden-tiny w-clearfix cc-navigation-menu-list-item">
            <a class="w-inline-block cc-navigation-menu-list-item-link pop-down" href="#">
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
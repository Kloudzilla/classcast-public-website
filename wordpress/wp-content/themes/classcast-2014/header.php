<?php
  global $template_section;
?>
<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Wed Jun 18 2014 05:44:26 GMT+0000 (UTC) -->
<html data-wf-site="538bcc732502ff2560203e03" ng-app="cc">
<head>
  <meta charset="utf-8">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/webflow.css">
  <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/classcast-external.webflow.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/extra-styles.css">

  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Raleway:100,200,300,regular,500,600,700,800,900"]
      }
    });
  </script>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>

  <!-- FAVICONS -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/icons/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/icons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/icons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/icons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/icons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/icons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/icons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/icons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/icons/apple-touch-icon-152x152.png">
  <meta name="apple-mobile-web-app-title" content="Classcast">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/icons/favicon-196x196.png" sizes="196x196">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/icons/favicon-160x160.png" sizes="160x160">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/icons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/icons/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/icons/favicon-32x32.png" sizes="32x32">
  <meta name="msapplication-TileColor" content="#3e6bae">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/icons/mstile-144x144.png">
  <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/icons/browserconfig.xml">
  <meta name="application-name" content="Classcast">
  <!-- END OF: FAVICONS -->

  <?php
    if(CC_ENVIRONMENT && CC_ENVIRONMENT == 'PRODUCTION') {
  ?>
      <script type="text/javascript">
        var _kmq = _kmq || [];
        var _kmk = _kmk || 'd1956d77b1fd9e9437566c72b0ab784ddba4a119';
        function _kms(u){
          setTimeout(function(){
            var d = document, f = d.getElementsByTagName('script')[0],
            s = d.createElement('script');
            s.type = 'text/javascript'; s.async = true; s.src = u;
            f.parentNode.insertBefore(s, f);
          }, 1);
        }
        _kms('//i.kissmetrics.com/i.js');
        _kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js');
      </script>
      
      <?php
        /*<script type="text/javascript">  _kmq.push(['record', 'Clicked on Sign Up Form Confirm']);</script>
        <script type="text/javascript">  _kmq.push(['record', 'Clicked on Request a Demo in Hero/Footer']);</script>
        <script type="text/javascript">  _kmq.push(['record', 'Visited Sign Up Page']);</script>
        <script type="text/javascript">  _kmq.push(['record', 'Visited Pricing Page']);</script>
        <script type="text/javascript">  _kmq.push(['record', 'Visited Blog Page']);</script>
        <script type="text/javascript">  _kmq.push(['record', 'Visited Contact Page']);</script>
        <script type="text/javascript">  _kmq.push(['record', 'Visited Press Page']);</script>
        <script type="text/javascript">  _kmq.push(['record', 'Visited Learning Centre Page']);</script>
        <script type="text/javascript">  _kmq.push(['record', 'Visited Team Page']);</script>
        <script type="text/javascript">  _kmq.push(['record', 'Clicked on Request a Demo in Navigation']);</script>*/
      ?>
  <?php
    }
  ?>
</head>

<body>
  <div class="cc-external-wrap">
    <div class="cc-hero <?php echo(($template_section =='home')?'home' :'');?> <?php echo(($template_section =='about')?'about' :'');?> <?php echo(($template_section =='aboutpost')?'about' :'');?>
      <?php echo(($template_section =='blog')?'blog' :'');?> <?php echo(($template_section =='blogpost')?'blog' :'');?> <?php echo(($template_section =='pricing')?'pricing' :'');?> <?php echo(($template_section =='form')?'form' :'');?> 
      <?php echo(($template_section =='privacy')?'legal' :'');?> <?php echo(($template_section =='terms')?'legal' :'');?>">
      
    <?php
      if($template_section == 'form') { }
      else { ?>
      <div class="cc-navigation" data-ix="navigation-past-hero">
        <div class="w-container cc-navigation-items-wrap">
          <ul class="w-list-unstyled w-clearfix cc-navigation-menu-list">

            <li class="w-clearfix cc-navigation-menu-list-item cc-logo">
              <a class="w-inline-block cc-navigation-item-logo" href="/"></a>
            </li>

            <li class="w-hidden-medium w-hidden-small w-hidden-tiny cc-navigation-menu-list-item sign-up">
              <a class="w-inline-block cc-navigation-menu-list-item-link sign-up" href="/register">
                <div class="cc-navigation-menu-list-item-text-signup">
                  Register
                </div>
              </a>
            </li>

          <?php 
            foreach(wp_get_nav_menu_items('primary') as $primary_menu_item){
          ?>
            <li class="w-hidden-medium w-hidden-small w-hidden-tiny cc-navigation-menu-list-item">
              <a class="w-clearfix w-inline-block cc-navigation-menu-list-item-link <?php echo implode(' ', $primary_menu_item->classes); ?>" href="<?php echo $primary_menu_item->url;?>">
                <div class="cc-navigation-menu-list-item-text"><?php echo $primary_menu_item->title;?></div>
              </a>
            </li>      
          <?php
            }
          ?>
            <li class="w-hidden-main cc-navigation-menu-list-item">
              <a class="w-clearfix w-inline-block cc-navigation-menu-list-item-link cc-drop-link" href="#">
                <div class="cc-navigation-menu-list-item-text">MENU</div>
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
                <a class="w-inline-block cc-drop-list-item-link" href="/register">
                  <div>
                    Register
                  </div>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>
      <div class="cc-navigation-past-hero">
        <div class="w-container cc-navigation-items-wrap">
          <ul class="w-list-unstyled w-clearfix cc-navigation-menu-list">

            <li class="w-hidden-medium w-hidden-small w-hidden-tiny cc-navigation-menu-list-item sign-up">
              <a class="w-clearfix w-inline-block cc-navigation-menu-list-item-link pop-down sign-up" href="/register">
                <div class="cc-navigation-menu-list-item-text-signup-dark">
                  Register
                </div>
              </a>
            </li>

          <?php 
            foreach(wp_get_nav_menu_items('primary') as $primary_menu_item){
          ?>
            <li class="w-hidden-medium w-hidden-small w-hidden-tiny w-clearfix cc-navigation-menu-list-item">
              <a class="w-clearfix w-inline-block cc-navigation-menu-list-item-link pop-down" href="<?php echo $primary_menu_item->url;?>">
                <div class="cc-navigation-menu-list-item-text-dark"><?php echo $primary_menu_item->title;?></div>
              </a>
            </li>
          <?php
            }
          ?>

            <li class="w-hidden-main cc-navigation-menu-list-item">
              <a class="w-clearfix  w-inline-block cc-navigation-menu-list-item-link pop-down cc-drop-pasthero-link" href="#">
                <div class="cc-navigation-menu-list-item-text-dark">MENU</div>
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
                <a class="w-inline-block cc-drop-list-item-link" href="/register">
                  <div>
                    Register
                  </div>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>
    <?php 
       };
    ?>

    <?php
      if($template_section == 'home') {
    ?>

        <div class="cc-section">
          <div class="w-slider cc-home-hero-slider" data-animation="slide" data-duration="800" data-infinite="1">
            <div class="w-slider-mask">
              <div class="w-slide">
                <div class="w-container">
                  <div class="cc-home-hero-slider-text">
                    <h3 class="cc-home-hero-headline">
                      HARNESS&nbsp;THE POWER&nbsp;OF<br>MOBILE CONTENT
                    </h3>

                    <div class="cc-home-hero-subtext">
                      <em>The <strong class='bolded-italics'>No.1 Health &amp; Fitness</strong> content publishing platform</em>
                    </div>
                    
                    <a class="w-inline-block cc-button-l get-started" href="/register">
                      <div>
                        Register
                      </div>
                    </a>

                    <a class="w-inline-block cc-button-l tour" href="/#tour">
                      <div>TAKE&nbsp;A&nbsp;TOUR</div>
                    </a>
                    
                    <div class="w-hidden-medium w-hidden-small w-hidden-tiny cc-hero-scrolldown">SCROLL&nbsp;DOWN&nbsp;TO&nbsp;LEARN&nbsp;MORE&nbsp;↓</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-slider-arrow-left cc-home-hero-slider-arrow">
              <div class="w-icon-slider-left"></div>
            </div>
            <div class="w-slider-arrow-right cc-home-hero-slider-arrow">
              <div class="w-icon-slider-right"></div>
            </div>
            <div class="w-slider-nav w-round cc-home-hero-slider-nav"></div>
          </div>
        </div>
      </div>

    <?php
      } else if($template_section == 'about') {
    ?>
        <div class="w-container cc-content-container cc-about-hero-content">
          <h1 class="cc-about-hero-headline">COMPANY</h1>
          <div class="cc-company-subline">See behind the scenes at Classcast and meet the folks that work here.</div>
        </div>
      </div>

    <?php
      } else if($template_section == 'aboutpost') {
    ?>

      <div class="w-container cc-content-container cc-about-hero-content">
        <h3 class="cc-blog-post-hero-headline"><?php the_title(); ?></h3>
        <div class="cc-blog-hero-post-date"><?php the_time('F jS, Y') ?></div>
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
      } else if($template_section == 'blogpost') {
    ?>

      <div class="w-container cc-content-container cc-blog-hero-content">
        <h3 class="cc-blog-post-hero-headline"><?php the_title(); ?></h3>
        <div class="cc-blog-hero-post-date"><?php the_time('F jS, Y') ?></div>
      </div>
    </div>

    <?php
      } else if($template_section == 'pricing') {
    ?>
      <div class="w-container cc-content-container cc-pricing-hero-content">
        <h3 class="cc-pricing-hero-headline">Simple pricing to fit your business</h3>
        <p class="cc-pricing-hero-subtext">Plans that grow with you, each with additional features. Upgrade at the right time, anytime.</p>
      </div>
    </div>

    <?php
      } else if($template_section == 'privacy') {
    ?>

      <div class="w-container cc-content-container cc-blog-hero-content">
        <h1 class="cc-form-hero-headline">Privacy</h1>
      </div>
    </div>

    <?php
      } else if($template_section == 'terms') {
    ?>

      <div class="w-container cc-content-container cc-blog-hero-content">
        <h1 class="cc-form-hero-headline">Terms</h1>
      </div>
    </div>

    <?php
      }
      else {}
    ?>
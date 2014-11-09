<?php
  /*
  Template Name: Form - Register
  */
  global $template_section;
  $template_section = 'form';
?>

<?php
  get_header();
?>

<div class="w-container cc-content-container cc-form-hero-content">
  <a class="w-inline-block cc-form-logo" href="/"></a>
  
  <div class="cc-form">
    <h4 class="cc-form-headline">
      Get Started with Classcast today
    </h4>

    <div class="cc-form-subheadline">
      lorem ipsum dolor
    </div>

    <div ng-controller="RegisterCtrl">
      {{test}}
    </div>

    <div ng-view></div>
  </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular-route.min.js"></script>

<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.min.js"></script> -->

<script src="<?php echo get_template_directory_uri(); ?>/js/angular.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/angular-factories.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/angular-controllers.js"></script>
<!--<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie-1.4.1.min.js"></script>-->

<?php
  get_footer('min');
?>
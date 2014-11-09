<?php
  /*
  Template Name: Form - Register
  */
  global $template_section;
  $template_section = 'register';
?>

<?php
  get_header();
?>

<div class="cc-section">
  <div class="w-container cc-content-container cc-form-content">
    <div class="cc-free-trial-col1">
      <div class="w-form">
        <div ng-view></div>
      </div>
    </div>
    <div class="cc-free-trial-col2">
      <div class="w-clearfix cc-testimonial-block"><img class="cc-testimonial-photo" src="<?php echo get_template_directory_uri(); ?>/images/jesse_profile.jpg" alt="545aecb39318b17f26345415_jesse_profile.jpg">
        <div class="cc-form-quote">“...It’s simply the best solution for class content delivery we’ve found”</div>
        <div class="cc-form-quote-author">Jesse Campanaro, President Total Gym</div>
      </div>
      <div class="cc-form-title">Engage, connect and deliver content to your customers today.</div>
      <div class="cc-form-text">Give it a try and you will be able to see what Classcast can do for your business. Feel the power and ease of our product.</div>
      <div class="cc-form-text">Join these great companies/people in delivering content mobile.</div>
      <ul class="w-list-unstyled w-clearfix cc-form-list">
        <li class="cc-form-list-item iom"></li>
        <li class="cc-form-list-item kettleworx"></li>
        <li class="cc-form-list-item totalgym"></li>
        <li class="cc-form-list-item yogafit"></li>
      </ul>
    </div>
  </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular-route.min.js"></script>

<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.min.js"></script> -->

<script type="text/javascript">
  var CC_ENVIRONMENT = '<?php echo CC_ENVIRONMENT; ?>';
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/angular.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/angular-factories.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/angular-controllers.js"></script>
<!--<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie-1.4.1.min.js"></script>-->

<?php
  get_footer('min');
?>
<?php
	/*
	Template Name: About Contact Page
	*/
    global $template_section;
  $template_section = 'about';
?>

<?php
	get_header();
?>
 
     <div class="cc-section">
      <div class="w-container cc-content-container cc-about-contact-content">
        <div class="cc-about-contact-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis augue quis suscipit convallis. Nunc vitae gravida dui. Nam eu mattis enim. Curabitur facilisis sem lectus, nec eleifend justo luctus eget. Etiam vestibulum sapien ut sodales
          pretium.&nbsp;</div>
        <div class="cc-about-contact-description">Contact us via email below. Your message will be sent to: emailaddress1@company.co</div>
        


        <div class="w-form">
          <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup">
        <form action="//classcast.us2.list-manage.com/subscribe/post?u=1c01ae6d41b7efa731691c63a&amp;id=74296c3792" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div class="mc-field-group">
          <!-- <label for="mce-NAME">Name </label> -->
          <input type="text" value="" name="NAME" class="" id="mce-NAME" placeholder="Name">
        </div>
        <div class="mc-field-group">
          <!-- <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span> -->
        </label>
          <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"  placeholder="Email Address">
        </div>
        <div class="mc-field-group">
          <!-- <label for="mce-MESSAGE">Message </label> -->
          <input type="text" value="" name="MESSAGE" class="cc-contact-message" id="mce-MESSAGE"  placeholder="Enter your message here">
        </div>
          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;"><input type="text" name="b_1c01ae6d41b7efa731691c63a_74296c3792" tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="cc-button-s green"></div>
        </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
        <script type='text/javascript'>
        (function($) {
        window.fnames = new Array(); window.ftypes = new Array();fnames[1]='NAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='MESSAGE';ftypes[2]='text';
        }(jQuery));
        var $mcj = jQuery.noConflict(true);
        </script>
        <!--End mc_embed_signup-->
        </div>
      </div>
    </div>

<?php
	get_footer('min');
?>
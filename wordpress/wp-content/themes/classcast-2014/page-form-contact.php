<?php
	/*
	Template Name: Form Contact
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
          <h4 class="cc-form-headline">Contact Us</h4>
          <div class="cc-form-subheadline">Our team will reply to your enquiry soon.</div>
          <!-- Begin MailChimp Signup Form -->
          <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
          <style type="text/css">
            #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
            #mc_embed_signup div#mce-responses { padding:0 0; margin:0 0; width:100%; padding-bottom:10px;}
            #mc-embedded-subscribe { margin:0 0;}
            #mc_embed_signup .mc-field-group input { height:60px; width:100%; border:1px solid #ccc; border-radius:6px; font-weight:100;}
            #mc_embed_signup .mc-field-group label { font-weight:100;}
            #mc_embed_signup .mc-field-group select { min-height:60px;}            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
          </style>
          <div id="mc_embed_signup">
          <form action="//classcast.us2.list-manage.com/subscribe/post?u=1c01ae6d41b7efa731691c63a&amp;id=74296c3792" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div class="mc-field-group">
            <!-- <label for="mce-NAME">Name </label> -->
            <input type="text" value="" name="NAME" class="" id="mce-NAME" placeholder="Your Name">
          </div>
          <div class="mc-field-group">
            <!-- <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span> -->
          </label>
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your Email Address">
          </div>
          <div class="mc-field-group">
            <!-- <label for="mce-MESSAGE">Message </label> -->
            <input type="text" value="" name="MESSAGE" class="" id="mce-MESSAGE" placeholder="Your Message">
          </div>
            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;"><input type="text" name="b_1c01ae6d41b7efa731691c63a_74296c3792" tabindex="-1" value=""></div>
              <div class="clear"><input type="submit" value="Confirm" name="subscribe" id="mc-embedded-subscribe" class="cc-button-s blue"></div>
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
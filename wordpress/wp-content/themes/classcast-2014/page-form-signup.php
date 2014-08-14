<?php
	/*
	Template Name: Form Signup
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
          <h4 class="cc-form-headline">Get Started with Classcast today</h4>
          <div class="cc-form-subheadline"></div>
<!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
            <style type="text/css">
             #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
            #mc_embed_signup div#mce-responses { padding:0 0; margin:0 0; width:100%; padding-bottom:10px;}
            #mc-embedded-subscribe { margin:0 0;}
            #mc_embed_signup .mc-field-group input { height:60px; width:100%; border:1px solid #ccc; border-radius:6px; font-weight:100;}
            #mc_embed_signup .mc-field-group label { font-weight:100;}
            #mc_embed_signup .mc-field-group select { min-height:60px; width:100%; margin-top:10px;}
            select { border:1px solid #c9c9c9; height:60px; background-color:white; background:white; width:100%; color:#ccc;}
              /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>
            <div id="mc_embed_signup">
            <form action="//classcast.us2.list-manage.com/subscribe/post?u=1c01ae6d41b7efa731691c63a&amp;id=168b1a7f71" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div class="mc-field-group">
            <!-- <label for="mce-FULLNAME">Full Name  <span class="asterisk">*</span> -->
          </label>
            <input type="text" value="" name="FULLNAME" class="required" id="mce-FULLNAME" placeholder="Full Name">
          </div>
          <div class="mc-field-group">
            <!-- <label for="mce-CNAME">Company Name  <span class="asterisk">*</span> -->
          </label>
            <input type="text" value="" name="CNAME" class="required" id="mce-CNAME" placeholder="Company Name">
          </div>
          <div class="mc-field-group">
            <!-- <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span> -->
          </label>
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
          </div>
          <div class="mc-field-group">
              <!-- <label for="mce-PNUMBER">Phone Number  <span class="asterisk">*</span> -->
            </label>
              <input type="text" value="" name="PNUMBER" class="required" id="mce-PNUMBER" placeholder="Phone Number">
            </div>


          <div class="mc-field-group">
            <label for="mce-CONTENT">Do you have any content that you distribute?</label>
          </label>
            <select name="CONTENT" class="required cc-form-select" id="mce-CONTENT">
            <option value=""></option>
            <option value="First Choice">First Choice</option>
          <option value="Second Choice">Second Choice</option>
          <option value="Third Choice">Third Choice</option>

            </select>
          </div>
          <div class="mc-field-group">
            <label for="mce-INDUSTRY">What Industry are you a part of?</label>
          </label>
            <select name="INDUSTRY" class="required" id="mce-INDUSTRY">
            <option value=""></option>
            <option value="First Choice">First Choice</option>
          <option value="Second Choice">Second Choice</option>
          <option value="Third Choice">Third Choice</option>

            </select>
          </div>

              <div class="mc-field-group">
                <label for="mce-PACKAGE">What is your desired Classcast Package?  <span class="asterisk">*</span>
              </label>
                <select name="PACKAGE" class="required" id="mce-PACKAGE">
                <option value=""></option>
                <option value="Starter $299 /mo">Starter $299 /mo</option>
              <option value="Grow $499 /mo">Grow $499 /mo</option>
              <option value="Max $899 /mo">Max $899 /mo</option>
              <option value="Enterprise">Enterprise</option>

                </select>
              </div>

              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_1c01ae6d41b7efa731691c63a_168b1a7f71" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="cc-button-s green"></div>
            </form>
            </div>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[3]='FULLNAME';ftypes[3]='text';fnames[1]='CNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='PNUMBER';ftypes[2]='text';fnames[4]='CONTENT';ftypes[4]='dropdown';fnames[5]='INDUSTRY';ftypes[5]='dropdown';fnames[6]='PACKAGE';ftypes[6]='dropdown';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            <!--End mc_embed_signup-->
        </div>
      </div>
    </div>

<?php
	get_footer('min');
?>
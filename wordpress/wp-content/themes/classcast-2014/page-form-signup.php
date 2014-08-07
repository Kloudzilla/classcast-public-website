<?php
	/*
	Template Name: About Contact Page
	*/
    global $template_section;
  $template_section = 'form';
?>

<?php
	get_header();
?>
 
     <div class="w-container cc-content-container cc-form-hero-content">
        <a class="w-inline-block cc-form-logo" href="#"></a>
        <div class="cc-form">
          <h4 class="cc-form-headline">Get Started with Classcast today</h4>
          <div class="cc-form-subheadline">This is some text inside of a div block.</div>
          <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
            <form action="//classcast.us2.list-manage.com/subscribe/post?u=1c01ae6d41b7efa731691c63a&amp;id=168b1a7f71" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <!-- <div class="indicates-required"><span class="asterisk">*</span> indicates required</div> -->
            <div class="mc-field-group">
              <!-- <label for="mce-FULLNAME">Full Name  <span class="asterisk">*</span> -->
            </label>
              <input type="text" value="" name="FULLNAME" class="required" id="mce-FULLNAME" placeholdr="Full Name">
            </div>
            <div class="mc-field-group">
              <!-- <label for="mce-CNAME">Company Name  <span class="asterisk">*</span> -->
            </label>
              <input type="text" value="" name="CNAME" class="required" id="mce-CNAME" placeholdr="Company Name">
            </div>
            <div class="mc-field-group">
              <!-- <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span> -->
            </label>
              <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholdr="Email Address">
            </div>
            <div class="mc-field-group">
              <!-- <label for="mce-PNUMBER">Phone Number  <span class="asterisk">*</span>-->
            </label>
              <input type="number" name="PNUMBER" class="required" value="" id="mce-PNUMBER" placeholder="Phone Number">
            </div>
            <div class="mc-field-group">
              <label for="mce-CONTENT">Do you have any content that you distribute?  <span class="asterisk">*</span>
            </label>
              <select name="CONTENT" class="required" id="mce-CONTENT">
              <option value=""></option>
              <option value="First Choice">First Choice</option>
            <option value="Second Choice">Second Choice</option>
            <option value="Third Choice">Third Choice</option>

              </select>
            </div>
            <div class="mc-field-group">
              <label for="mce-INDUSTRY">What Industry are you a part of?  <span class="asterisk">*</span>
            </label>
              <select name="INDUSTRY" class="required" id="mce-INDUSTRY">
              <option value=""></option>
              <option value="First Choice">First Choice</option>
            <option value="Second Choice">Second Choice</option>
            <option value="Third Choice">Third Choice</option>

              </select>
            </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_1c01ae6d41b7efa731691c63a_168b1a7f71" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </form>
            </div>

            <!--End mc_embed_signup-->
        </div>
      </div>
    </div>

<?php
	get_footer('min');
?>
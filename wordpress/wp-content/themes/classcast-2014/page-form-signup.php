<?php
	/*
	Template Name: Form Signup
	*/
    global $template_section;
  $template_section = 'signup';
?>

<?php
	get_header();
?>

    <div class="cc-section">
      <div class="w-container cc-content-container cc-form-content">
        <div class="w-row">
          <div class="w-col w-col-6 cc-form-col">
            <div class="cc-form-title">Engage, connect and deliver content to your customers today.</div>
            <div class="cc-form-text">Spend time with one of our Classcast experts. You will be able to see what Classcast could do for your business. Let us demonstrate the
              <br>power and ease of our product.</div>
            <div class="cc-form-text-center">Join these great companies/people in delivering content mobile.</div>
            <ul class="w-list-unstyled w-clearfix cc-form-list">
              <li class="cc-form-list-item gymstick"></li>
              <li class="cc-form-list-item iom"></li>
              <li class="cc-form-list-item kettleworx"></li>
              <li class="cc-form-list-item totalgym"></li>
              <li class="cc-form-list-item yogafit"></li>
            </ul>
            <div class="cc-form-text">To connect with us, all you need to do is complete the form and one of our friendly team will reach out to schedule a time and provide a complete walk through of the product!
              <br>
              <br>We can’t wait to hear from you!</div>
            <div class="cc-form-quote">“...It’s simply the best solution for
              <br>class content delivery weve found”</div>
            <div class="cc-form-quote-author">Jesse Campanaro, President Total Gym</div>
          </div>
          <div class="w-col w-col-6 cc-form-col">
            <!-- Begin MailChimp Signup Form -->
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
                          <select name="CONTENT" class="required" id="mce-CONTENT">
                          <option value=""></option>
                          <option value="Yes">Yes</option>
                        <option value="No">No</option>

                          </select>
                        </div>


                      <div class="mc-field-group">
                      <label for="mce-INDUSTRY">What Industry are you a part of?</label>
                      <select name="INDUSTRY" class="required" id="mce-INDUSTRY">
                      <option value=""></option>
                      <option value="Fitness Instructor">Fitness Instructor</option>
                      <option value="Personal Trainer">Personal Trainer</option>
                      <option value="Fitness Club or Studio">Fitness Club or Studio</option>
                      <option value="Physiotherapist">Physiotherapist</option>
                      <option value="Rehabilitation Specialist">Rehabilitation Specialist</option>
                      <option value="Dietician / Nutrionist">Dietician / Nutrionist</option>
                      <option value="Life Coach / Transformational Consultant">Life Coach / Transformational Consultant</option>
                      <option value="Other">Other</option>

                        </select>
                      </div>

                      <div class="mc-field-group">
                        <label for="mce-PACKAGE">What is your desired Classcast Package?</label>
                        <select name="PACKAGE" class="required" id="mce-PACKAGE">
                        <option value=""></option>
                        <option value="Starter $299 /mo (100 Users)">Starter $299 /mo (100 Users)</option>
                      <option value="Grow $499 /mo (200 Users)">Grow $499 /mo (200 Users)</option>
                      <option value="Max $899 /mo (400 Users)">Max $899 /mo (400 Users)</option>
                      <option value="Enterprise">Enterprise</option>

                        </select>
                      </div>

                          <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;"><input type="text" name="b_1c01ae6d41b7efa731691c63a_168b1a7f71" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Schedule Your Demo" name="subscribe" id="mc-embedded-subscribe" class="cc-button-s blue"></div>
                        </form>
                        </div>
                        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[3]='FULLNAME';ftypes[3]='text';fnames[1]='CNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='PNUMBER';ftypes[2]='text';fnames[4]='CONTENT';ftypes[4]='dropdown';fnames[5]='INDUSTRY';ftypes[5]='dropdown';fnames[6]='PACKAGE';ftypes[6]='dropdown';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                        <!--End mc_embed_signup-->
          </div>
        </div>
      </div>
    </div>

<?php
	get_footer('min');
?>
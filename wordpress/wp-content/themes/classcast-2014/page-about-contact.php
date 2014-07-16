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
          <form class="cc-about-contact-form" id="email-form" name="email-form" data-name="Email Form">
            <label for="name">Name:</label>
            <input class="w-input cc-input" id="name" type="text" placeholder="Enter your name" name="name" data-name="Name">
            <label for="email">Email Address:</label>
            <input class="w-input cc-input" id="email" type="email" placeholder="Enter your email address" name="email" data-name="Email" required="required">
            <label for="message">Your Message:</label>
            <textarea class="w-input cc-input cc-text-area" id="message" placeholder="Enter your message here" name="message" data-name="Message" required="required"></textarea>
            <input class="w-button cc-button-s green" type="submit" value="Submit" data-wait="Please wait...">
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

<?php
	get_footer('min');
?>
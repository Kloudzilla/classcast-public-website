<?php
	/*
	Template Name: Form Contact
	*/
    global $template_section;
  $template_section = 'contact';
?>

<?php
	get_header();
?>
 
     <div class="w-container cc-content-container cc-form-hero-content">
        <div class="cc-form">
          
			<?php
			    if(have_posts()) {
			        while(have_posts()) {
			            the_post();
			
			            the_content();
			        }
			    }
			?>
          
        </div>
      </div>
    </div>
<script type="text/javascript">  _kmq.push(['record', 'Visited contact page']);</script>
<?php
	get_footer('min');
?>
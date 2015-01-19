<?php
	/*
	Template Name: Home Page
	*/

  global $template_section;
  $template_section = 'home';
?>

<?php
	get_header();
?>

	<div class="cc-section cc-industry cc-white-bg">
		<div class="w-container cc-content-container cc-industry-content">
		  <h3 class="cc-features-headline">Take a video tour</h3><a name='tour'></a>
		  <div class="cc-features-subline">See an app being created and previewed instantly.</div>
		  <div class="w-embed w-script">
		    <div id='playerzaoTZwanHVgF'></div>
		    <script type='text/javascript'>
		      jwplayer('playerzaoTZwanHVgF').setup({
		          file: '<?php echo get_template_directory_uri(); ?>/videos/demo.mov',
		          image: '<?php echo get_template_directory_uri(); ?>/images/demo.jpg',
		          width: '100%',
		          aspectratio: '16:10',
		          skin: 'five'
		      });
		    </script>
		  </div>
		</div>
	</div>

     <div class="w-hidden-small w-hidden-tiny cc-section cc-trusted">
      <div class="w-container cc-content-container">
        <h3 class="cc-trusted-headline-top">Trusted by these companies</h3><a name='trusted'></a>
        <div class="w-clearfix cc-trusted-logo-wrap">
          <div class="cc-trusted-logo total-gym"></div>
          <div class="cc-trusted-logo gymstick"></div>
          <div class="cc-trusted-logo kettleworx"></div>
          <div class="cc-trusted-logo yogafit"></div>
          <div class="cc-trusted-logo iom"></div>
        </div>
        
		<div class="w-embed w-script cc-testimonial-video-block">
		  <div id='playerUACpVPxMogbc'></div>
		  <script type='text/javascript'>
		    jwplayer('playerUACpVPxMogbc').setup({
		        file: '<?php echo get_template_directory_uri(); ?>/videos/testimonial-thump-boxing.mp4',
		        image: '<?php echo get_template_directory_uri(); ?>/images/testimonial-thump-boxing.jpg',
		        width: '100%',
		        aspectratio: '16:9',
		        skin: 'five'
		    });
		  </script>
		</div>
        
      </div>
    </div>

    <div class="cc-section cc-industry">
    
      <div class="w-container cc-content-container cc-industry-content">
        <h3 class="cc-features-headline">Everything you need in one platform</h3>
        <div class="cc-features-subline">Built from the ground up for health &amp; fitness professionals everywhere. Classcast is designed to quickly give you the information you need to run your business today.</div>
        <div class="w-row">
          <div class="w-col w-col-3">
            <img class="cc-features-icon" src="<?php echo get_template_directory_uri(); ?>/images/phone.png" width="150" alt="53ede3b3bb0cca8f74f90f84_phone.png">
            <div class="cc-features-title">Send content directly</div>
            <p class="cc-features-text">Pack your content up and send directly to your customers mobile device. Customers receive an alert as soon as you do!</p>
          </div>
          <div class="w-col w-col-3">
            <img class="cc-features-icon" src="<?php echo get_template_directory_uri(); ?>/images/clock.png" width="150" alt="53eed1f2cdfb381d7a49311b_clock.png">
            <div class="cc-features-title">Deliver content super fast</div>
            <p class="cc-features-text">To your customers in seconds, not days or weeks. No more postage headaches with DVDs/CDs.</p>
          </div>
          <div class="w-col w-col-3">
            <img class="cc-features-icon" src="<?php echo get_template_directory_uri(); ?>/images/revenue2.png" width="150" alt="53eee29e3013e11e7a83d2db_revenue2.png">
            <div class="cc-features-title">Make money from content</div>
            <p class="cc-features-text">Your content is valuable, secure recurring revenue from it, globally – and give your customers even more ways to enjoy it. See payments in your bank account every month.</p>
          </div>
          <div class="w-col w-col-3">
            <img class="cc-features-icon" src="<?php echo get_template_directory_uri(); ?>/images/graph.png" width="150" alt="53ede40454f8e79e17592d25_graph.png">
            <div class="cc-features-title">Track and improve</div>
            <p class="cc-features-text">From new customers to what’s been used by item, Classcast Analytics helps you see what’s working or where you need to improve.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="cc-section cc-brand">
      <div class="w-container cc-content-container cc-brand-content">
        <div class="cc-branding-img-wrap">
          <div class="cc-branding-img"></div>
        </div>
        <div class="cc-branding-text-wrap">
          <h3 class="cc-branding-headline">Content with your brand</h3>
          <p class="cc-branding-text">Whether you need simple pages, amazing exercise libraries, professional release, music access, or a rich video list, it’s all included with your Classcast mobile product. Best of all,
            <br>everything is published with your brand.</p>
          <div class="w-row">
            <div class="w-col w-col-6">
              <div class="cc-branding-subline">Easy theme setup</div>
              <div class="cc-branding-subtext">Publishing your content with a range of formats that fit your business. Classcast provides a simple and intuitive process.</div>
            </div>
            <div class="w-col w-col-6">
              <div class="cc-branding-subline">Simple styling</div>
              <div>Classcast gives you the tools to easily apply your brand feel and color. Just select and upload your brand assets – a few clicks and you’re done.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cc-section cc-users">
      <div class="cc-users-img"></div>
      <div class="w-container cc-content-container cc-users-content">
        <h3 class="cc-users-headline">Know your customers</h3>
        <p class="cc-users-text">Intelligently manage and connect with customers. Notify them of upcoming events, see who is viewing your content, and how much they love it – or don’t. Keep in touch with your customers and reach out to them when you need to on their device.</p>
        <div
        class="w-row">
          <div class="w-col w-col-6">
            <div class="cc-users-subline">Know what they do</div>
            <div class="cc-users-subtext">With Classcast you know who is using your product and how, so it’s easy to target your content, marketing or sales to the right customers and&nbsp;drive growth in your business</div>
          </div>
          <div class="w-col w-col-6">
            <div class="cc-users-subline">One single view</div>
            <div>Everything you need to do in one simple intuitive interface. Setup, manage and send notifications so you can connect better with your customers.</div>
          </div>
      </div>
    </div>
  </div>
  <div class="w-clearfix cc-section cc-content">
    <div class="cc-content-img"></div>
    <div class="w-container cc-content-container cc-content-content">
      <h3 class="cc-content-headline">Content done right</h3>
      <p class="cc-content-text">This is at the heart of what you do, create great content that changes peoples lives. So we have dedicated ourselves to making this fast and easy for you to load content and when you’re ready publish instantly to your customers.</p>
      <div class="w-row">
        <div class="w-col w-col-6">
          <div class="cc-content-subline">Beautiful content</div>
          <div class="cc-content-subtext">No more printing DVD’s and Booklets, broadcast your content to your customers with fast streaming video, beautiful text and in a way that is effortless to use.</div>
        </div>
        <div class="w-col w-col-6">
          <div class="cc-content-subline">More time to create</div>
          <div class="cc-content-subtext">We make it easy for you to publish content so you can spend more time creating.</div>
        </div>
      </div>
    </div>
  </div>
  <div class="cc-section cc-stats">
    <div class="cc-stats-img"></div>
    <div class="w-container cc-content-container cc-stats-content">
      <h3 class="cc-stats-headline">Make smart moves</h3>
      <p class="cc-stats-text">You spend countless hours creating great content but do you really know who your customers are and how your customers are using it? With Classcast you have unparrallell access to statistics which help you make better decisions and grow your business.
        <br>
        <br>Classcast lets you see what content they are consuming and what is more popular. This allows you to dig deeper, compare and figure out how you can improve going forward.</p>
      <div class="w-row">
        <div class="w-col w-col-6 cc-stats-icon-col">
          <div class="w-clearfix cc-stats-icon-wrap">
            <img class="cc-stats-icon" src="<?php echo get_template_directory_uri(); ?>/images/bars.png" width="76" alt="53ef1c41313225c07e04c893_bars.png">
            <div class="cc-stats-subline">Measure real-time,
              <br>act now.</div>
          </div>
        </div>
        <div class="w-col w-col-6 cc-stats-icon-col">
          <div class="w-clearfix cc-stats-icon-wrap">
            <img class="cc-stats-icon" src="<?php echo get_template_directory_uri(); ?>/images/funnel.png" width="76" alt="53ef1bef980b47c27ec5674a_funnel.png">
            <div class="cc-stats-subline">Know why customers
              <br>stay or don’t.</div>
          </div>
        </div>
      </div>
      <div class="w-row">
        <div class="w-col w-col-6 cc-stats-icon-col">
          <div class="w-clearfix cc-stats-icon-wrap">
            <img class="cc-stats-icon" src="<?php echo get_template_directory_uri(); ?>/images/interact.png" width="76" alt="53ef1c4a29b00a2c22513742_interact.png">
            <div class="cc-stats-subline">What they use when
              <br>they use it.</div>
          </div>
        </div>
        <div class="w-col w-col-6 cc-stats-icon-col">
          <div class="w-clearfix cc-stats-icon-wrap">
            <img class="cc-stats-icon" src="<?php echo get_template_directory_uri(); ?>/images/globe.png" width="75" alt="53ef1c36313225c07e04c891_globe.png">
            <div class="cc-stats-subline">What location do they
              <br>come from.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php /*
  
  <div class="w-slider cc-quote" data-animation="slide" data-duration="500" data-infinite="1">
    <div class="w-slider-mask">
      <div class="w-slide">
        <div class="w-container cc-content-container">
          <p class="cc-quote-text">“We discovered Classcast through our own network of professionals: it’s simply the best solution for class delivery we found.”</p>
          <div class="cc-quote-author-wrap">
            <div class="cc-quote-author">
              <div class="cc-quote-author-img-wrap">
                <img class="cc-quote-author-img" src="<?php echo get_template_directory_uri(); ?>/images/jesse.png" alt="jesse-Campanaro">
              </div>
              <div class="cc-quote-author-name">Jesse Campanaro</div>
              <div class="cc-author-titleposition">President, Total Gym</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-slider-nav w-round cc-quote-slide-nav"></div>
  </div>
*/
?>

<?php
	get_footer();
?>
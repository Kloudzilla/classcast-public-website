<?php
	/*
	Template Name: About Team Page
	*/

  global $post, $template_section;
  $template_section = 'about';
?>

<?php
	get_header();
?>  
<div class="cc-section cc-hero-navigation">
          <div class="w-container cc-content-container">
            <ul class="w-list-unstyled cc-hero-navigation-list">

              <?php 
                foreach(wp_get_nav_menu_items('heronav') as $heronav_menu_item){
              ?>
                <li class="w-clearfix cc-hero-navigation-list-item">
                  <a class="w-inline-block cc-hero-navigation-list-item-link <?php echo ($post->ID == $heronav_menu_item->object_id) ? 'cc-heronav-active' : ''; ?> <?php echo implode(' ', $heronav_menu_item->classes); ?>" href="<?php echo $heronav_menu_item->url;?>">
                    <div><?php echo $heronav_menu_item->title;?></div>
                  </a>
                </li>
              <?php
                }
              ?>

            </ul>
          </div>
        </div>
 
    <div class="w-hidden-small w-hidden-tiny cc-section cc-about-tagline">
      <div class="w-container cc-content-container cc-about-tagline-content">
        <h4 class="cc-about-tagline-headline">The Team dedicated to building a solution<br>for your business</h4>
      </div>
    </div>
        <div class="cc-section">
      <div class="w-container cc-content-container cc-about-team">
        <h3 class="cc-about-team-headline">Our Story</h3>
        <div class="cc-about-team-subtext">Classcast is the groundbreaking content monetisation service that is reinventing the way companies distribute and charge for their content. With simple non-technical ways of delivering content to your own app in the app store, and charging for
          it, Classcast is helping turn your current DVD sales channel into a mobile SAAS&nbsp;business.
          <br>
          <br>Launched in August 2013, Classcast started from Stuart Guest-Smith and Suren Tippireddy being frustrated with content distribution in the health and fitness industry and set out with a founding team to help solve that problem for the industry.</div>
        <h4
        class="cc-about-team-values-headline">Why Classcast?</h4>
          <div class="cc-about-team-subtext">We set out to change the way in which the health and fitness industry delivers and packages content. Given the vast array of content available to professionals and consumers alike it's hard for many organizations to 'stick-out'. So we created
            our platform to provide all the enabling technology, content marketing/production capabilities and the global insight to ensure business have all the tools to do this successfully in the future.</div>
          <!--<div class="w-row cc-team-row">
            <div class="w-col w-col-3 w-col-small-6 cc-team-col">
              <div class="cc-team-img"></div>
              <div class="cc-team-name">VALUE</div>
              <div class="cc-team-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
            <div class="w-col w-col-3 w-col-small-6 cc-team-col">
              <div class="cc-team-img"></div>
              <div class="cc-team-name">VALUE</div>
              <div class="cc-team-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
            <div class="w-col w-col-3 w-col-small-6 cc-team-col">
              <div class="cc-team-img"></div>
              <div class="cc-team-name">VALUE</div>
              <div class="cc-team-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
            <div class="w-col w-col-3 w-col-small-6 cc-team-col">
              <div class="cc-team-img"></div>
              <div class="cc-team-name">VALUE</div>
              <div class="cc-team-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </div>-->
      </div>
    </div>
    <div class="cc-section cc-about-team-mini-hero">
      <div class="w-container cc-content-container cc-about-team-mini-hero-content">
        <h1 class="cc-about-team-mini-hero-headline">GREAT&nbsp;TEAM, HUGE&nbsp;SCALE</h1>
        <div class="cc-about-team-mini-hero-subtext">We get the technology to do the heavy lifting.</div>
      </div>
    </div>
    <div class="cc-section">
      <div class="w-container cc-content-container cc-about-team">
        <h3 class="cc-about-team-headline">Core Team</h3>
        <div class="cc-about-team-subtext">The Classcast headquarters are in San Francisco but we embrace remote working so everyone at Classcast is free to live and work wherever they want.&nbsp;&nbsp;</div>
        <div class="w-row cc-team-row">
          <div class="w-col w-col-3 w-col-small-6 cc-team-col">
            <div class="cc-team-img">
              <img class="cc-team-img" src="<?php echo get_template_directory_uri(); ?>/images/stuart.jpg" width="129" alt="53ead9eca6f42a2f6a366809_stuart.jpg">
            </div>
            <div class="cc-team-name">Stuart Guest-Smith</div>
            <div class="cc-team-title">CEO &amp;&nbsp;C0-Founder</div>
          </div>
          <div class="w-col w-col-3 w-col-small-6 cc-team-col">
            <div class="cc-team-img">
              <img class="cc-team-img" src="<?php echo get_template_directory_uri(); ?>/images/suren.jpg" width="150" alt="53eada2ef90240c2448f697f_suren.jpg">
            </div>
            <div class="cc-team-name">Suren Tippireddy</div>
            <div class="cc-team-title">CTO &amp; Co-Founder</div>
          </div>
          <div class="w-col w-col-3 w-col-small-6 cc-team-col">
            <div class="cc-team-img">
              <img class="cc-team-img" src="<?php echo get_template_directory_uri(); ?>/images/aidan.jpg" width="186" alt="53eada45d056242e6a4c87ae_aidan.jpg">
            </div>
            <div class="cc-team-name">Aidan Green</div>
            <div class="cc-team-title">Head of Product Design</div>
          </div>
          <div class="w-col w-col-3 w-col-small-6 cc-team-col">
            <div class="cc-team-img">
              <img class="cc-team-img" src="<?php echo get_template_directory_uri(); ?>/images/Dallas_2.jpg" width="124" alt="53eb09b4d056242e6a4c8a31_Dallas_2.jpg">
            </div>
            <div class="cc-team-name">Dallas Clark</div>
            <div class="cc-team-title">Head of Web</div>
          </div>
        </div>
        <div class="w-row cc-team-row">
          <div class="w-col w-col-3 w-col-small-6 cc-team-col">
            <div class="cc-team-img">
              <img class="cc-team-img" src="<?php echo get_template_directory_uri(); ?>/images/brad.jpg" width="225" alt="53eada64a6f42a2f6a36680d_brad.jpg">
            </div>
            <div class="cc-team-name">Bradley Dwyer</div>
            <div class="cc-team-title">Head of Mobile</div>
          </div>
          <div class="w-col w-col-3 w-col-small-6 cc-team-col">
            <div class="cc-team-img">
              <img class="cc-team-img" src="<?php echo get_template_directory_uri(); ?>/images/brian.png" alt="53eada6ea6f42a2f6a36680e_brian.png">
            </div>
            <div class="cc-team-name">Brian Bettendorf</div>
            <div class="cc-team-title">Head of Growth</div>
          </div>
          <div class="w-col w-col-3 w-col-small-6 cc-team-col">
            <img class="cc-team-img" src="<?php echo get_template_directory_uri(); ?>/images/samprofilebnwsmall.png" alt="53ec4a98cd8267b75faeb1dd_samprofilebnwsmall.png">
            <div class="cc-team-name">Sam Stewart</div>
            <div class="cc-team-title">Designer</div>
          </div>
          <div class="w-col w-col-3 w-col-small-6 cc-team-col">
            <div class="cc-team-img">
              <div class="cc-join-us-question">+</div>
            </div>
            <a class="w-inline-block cc-button-l join-us" href="mailto:jobs@classcast.co?subject=Job%20Opportunity">
              <div>JOIN&nbsp;US</div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <h4 class="cc-about-team-location-headline">Where to find us</h4>
    <div class="cc-section cc-about-team-location">
      <div class="w-container cc-content-container cc-about-team-location-content">
        <div class="w-row cc-location-row">
          <div class="w-col w-col-2 w-col-small-6 cc-location-col">
            <div class="cc-location-info-headline">Palo Alto Office</div>
            <div class="cc-location-info-text">2225 East bay Shore Rd,
              <br>Palo Alto
              <br>94303</div>
          </div>
          <div class="w-col w-col-4 w-col-small-6 cc-location-col palo-alto">
            <!-- <a class="w-inline-block cc-location-link ca" href="#"></a> -->
          </div>
          <div class="w-col w-col-4 w-col-small-6 cc-location-col sydney">
            <!-- <a class="w-inline-block cc-location-link" href="#"></a> -->
          </div>
          <div class="w-col w-col-2 w-col-small-6 cc-location-col">
            <div class="cc-location-info-headline">Sydney Office</div>
            <div class="cc-location-info-text">Suite 304, 29 Kiora Road, Miranda
              <br>2228</div>
          </div>
        </div>
      </div>
    </div>
                

<?php
	get_footer('min');
?>
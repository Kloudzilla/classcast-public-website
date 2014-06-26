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
      <div class="w-hidden-small w-hidden-tiny cc-section cc-industry">
      <div class="w-container cc-content-container cc-industry-content">
        <div class="w-tabs" data-duration-in="300" data-duration-out="100">
          <div class="w-tab-menu cc-industry-menu">
            <a class="w-tab-link w--current w-inline-block cc-industry-tab fitness" data-w-tab="Fitness">
              <div class="cc-industry-tab-title">Fitness &amp; Training</div>
            </a>
            <a class="w-tab-link w-inline-block cc-industry-tab education" data-w-tab="Education">
              <div class="cc-industry-tab-title">Education &amp; Learning</div>
            </a>
            <a class="w-tab-link w-inline-block cc-industry-tab health" data-w-tab="Health">
              <div class="cc-industry-tab-title">Health &amp; Well-being</div>
            </a>
            <a class="w-tab-link w-inline-block cc-industry-tab request" data-w-tab="Request">
              <div class="cc-industry-tab-title">Request an Industry</div>
            </a>
          </div>
          <div class="w-tab-content cc-industry-tab-content">
            <div class="w-tab-pane w--tab-active cc-industry-tab-pane" data-w-tab="Fitness">
              <h4 class="cc-industry-title">Fitness &amp; Training</h4>
              <div class="w-row">
                <div class="w-col w-col-4">
                  <div class="cc-industry-feature-icon"></div>
                  <div class="w-clearfix cc-industry-feature-text">
                    <div class="cc-industry-secondary-tab-item-headline">Music direct to mobile</div>
                    <div class="cc-industry-secondary-tab-item-subtext">Instructors can play music to their classes direct from mobile, even without an internet connection.</div>
                  </div>
                </div>
                <div class="w-col w-col-4">
                  <div class="cc-industry-feature-icon"></div>
                  <div class="w-clearfix cc-industry-feature-text">
                    <div class="cc-industry-secondary-tab-item-headline">Replace DVD’s</div>
                    <div class="cc-industry-secondary-tab-item-subtext">Stream video direct to your mobile,&nbsp;replacing all those
                      <br>clunky DVD’s</div>
                  </div>
                </div>
                <div class="w-col w-col-4">
                  <div class="cc-industry-feature-icon"></div>
                  <div class="w-clearfix cc-industry-feature-text">
                    <div class="cc-industry-secondary-tab-item-headline">Choreography Notes
                      <br>without Printing</div>
                    <div class="cc-industry-secondary-tab-item-subtext">Your choreography notes are tailored for mobile delivery, no more printing.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-tab-pane cc-industry-tab-pane" data-w-tab="Education">
              <h4 class="cc-industry-title">Education &amp; Learning</h4>
              <div class="w-row">
                <div class="w-col w-col-4">
                  <div class="cc-industry-feature-icon"></div>
                  <div class="w-clearfix cc-industry-feature-text">
                    <div class="cc-industry-secondary-tab-item-headline">Teach your classes</div>
                    <div class="cc-industry-secondary-tab-item-subtext">Instructors can play music to their classes direct from mobile, even without an internet connection.</div>
                  </div>
                </div>
                <div class="w-col w-col-4">
                  <div class="cc-industry-feature-icon"></div>
                  <div class="w-clearfix cc-industry-feature-text">
                    <div class="cc-industry-secondary-tab-item-headline">Package your classes</div>
                    <div class="cc-industry-secondary-tab-item-subtext">Stream video direct to your mobile,&nbsp;replacing all those
                      <br>clunky DVD’s</div>
                  </div>
                </div>
                <div class="w-col w-col-4">
                  <div class="cc-industry-feature-icon"></div>
                  <div class="w-clearfix cc-industry-feature-text">
                    <div class="cc-industry-secondary-tab-item-headline">Get your lectures out there</div>
                    <div class="cc-industry-secondary-tab-item-subtext">Your choreography notes are tailored for mobile delivery, no more printing.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-tab-pane cc-industry-tab-pane" data-w-tab="Health">
              <h4 class="cc-industry-title">Health &amp; Well-being</h4>
              <div class="w-row">
                <div class="w-col w-col-4">
                  <div class="cc-industry-feature-icon"></div>
                  <div class="w-clearfix cc-industry-feature-text">
                    <div class="cc-industry-secondary-tab-item-headline">Packaged Care</div>
                    <div class="cc-industry-secondary-tab-item-subtext">Instructors can play music to their classes direct from mobile, even without an internet connection.</div>
                  </div>
                </div>
                <div class="w-col w-col-4">
                  <div class="cc-industry-feature-icon"></div>
                  <div class="w-clearfix cc-industry-feature-text">
                    <div class="cc-industry-secondary-tab-item-headline">Tangible Results</div>
                    <div class="cc-industry-secondary-tab-item-subtext">Stream video direct to your mobile,&nbsp;replacing all those
                      <br>clunky DVD’s</div>
                  </div>
                </div>
                <div class="w-col w-col-4">
                  <div class="cc-industry-feature-icon"></div>
                  <div class="w-clearfix cc-industry-feature-text">
                    <div class="cc-industry-secondary-tab-item-headline">Life Saving Education</div>
                    <div class="cc-industry-secondary-tab-item-subtext">Your choreography notes are tailored for mobile delivery, no more printing.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-tab-pane cc-industry-tab-pane" data-w-tab="Request">
              <div class="w-form cc-industry-request-form">
                <form id="email-form" name="email-form" data-name="Email Form">
                  <label for="name">Name:</label>
                  <input class="w-input cc-input" id="name" type="text" placeholder="Enter your name" name="name" data-name="Name">
                  <label for="email">Email Address:</label>
                  <input class="w-input cc-input" id="email" type="email" placeholder="Enter your email address" name="email" data-name="Email" required="required">
                  <input class="w-input cc-input cc-text-area" id="field" type="text" placeholder="Example Text" name="field" required="required">
                  <input class="w-button cc-button-s blue" type="submit" value="Submit" data-wait="Please wait...">
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
        </div>
      </div>
    </div>
    <div class="w-hidden-main w-hidden-medium cc-industry-mobile">
      <div class="cc-industry-block-mobile">
        <div class="w-clearfix cc-industry-ring-mobile">
          <div class="cc-industry-icon-mobile fitness"></div>
        </div>
        <div class="cc-industry-headline-mobile">Fitness &amp; Training</div>
        <div class="cc-industry-subtext-mobile">Mould your Classcast fitness app to the limits of your environment and provide your clients fitness solutions at a digital level</div>
      </div>
      <div class="cc-industry-block-mobile">
        <div class="w-clearfix cc-industry-ring-mobile">
          <div class="cc-industry-icon-mobile"></div>
        </div>
        <div class="cc-industry-headline-mobile">Health &amp;&nbsp;Well-being</div>
        <div class="cc-industry-subtext-mobile">Deliver simple solutions for providing health &amp; well being education and training</div>
      </div>
      <div class="cc-industry-block-mobile">
        <div class="w-clearfix cc-industry-ring-mobile">
          <div class="cc-industry-icon-mobile"></div>
        </div>
        <div class="cc-industry-headline-mobile">Education &amp; Learning</div>
        <div class="cc-industry-subtext-mobile">Create classes, lectures and training modules for monetisation</div>
      </div>
      <div class="w-hidden-small w-hidden-tiny cc-industry-block-mobile">
        <div class="w-clearfix cc-industry-ring-mobile">
          <div class="cc-industry-icon-mobile"></div>
        </div>
        <div class="cc-industry-headline-mobile">Request an Industry</div>
        <div class="cc-industry-subtext-mobile">Your industry not listed? Request it and join the Classcast community</div>
      </div>
    </div>
    <div class="cc-section cc-brand">
      <div class="w-container cc-content-container cc-brand-content">
        <div class="w-row">
          <div class="w-col w-col-6">
            <div class="cc-branding-img" data-ix="fade-in">
              <div class="cc-branding-logo">
                <div class="cc-branding-logo-text">Your
                  <br>Brand</div>
              </div>
            </div>
          </div>
          <div class="w-col w-col-6">
            <h3 class="cc-branding-headline">Your App,Your Brand</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo
              cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="cc-section cc-users">
      <div class="cc-users-img" data-ix="slide-from-right"></div>
      <div class="w-container cc-content-container cc-users-content" data-ix="fade-in">
        <h3>Manage your users</h3>
        <p>Manage your users and notify them of upcomming events. See who is viewing your content and what market to reach out to. Keep in touch with your members and reach out to them with offers.</p>
      </div>
    </div>
    <div class="w-slider cc-content-slider" data-animation="slide" data-duration="500" data-infinite="1" data-delay="4000" data-autoplay="1">
      <div class="w-container cc-content-container cc-content-content" data-ix="fade-in">
        <h3 class="cc-content-headline">Package your content</h3>
        <p class="cc-content-subtext">Create the content that you need and get it out to your customers quickly. Classcast offers unrivaled abilty to instantly broadcast your content to your user=base.</p>
        <ul class="w-list-unstyled w-clearfix cc-content-list">
          <li class="w-clearfix cc-content-list-item">
            <div class="cc-content-list-item-icon"></div>
            <div class="w-clearfix cc-content-list-item-text-wrap">
              <div class="cc-content-list-item-headline">Box it up</div>
              <div class="cc-content-list-item-text">Package your content easily and reliably</div>
            </div>
          </li>
          <li class="w-clearfix cc-content-list-item">
            <div class="cc-content-list-item-icon"></div>
            <div class="w-clearfix cc-content-list-item-text-wrap">
              <div class="cc-content-list-item-headline">Fit it in</div>
              <div class="cc-content-list-item-text">Create content tailored for mobile platforms</div>
            </div>
          </li>
          <li class="w-clearfix cc-content-list-item">
            <div class="cc-content-list-item-icon"></div>
            <div class="w-clearfix cc-content-list-item-text-wrap">
              <div class="cc-content-list-item-headline">Ship it out</div>
              <div class="cc-content-list-item-text">Deliver your content worldwide instantly</div>
            </div>
          </li>
          <li class="w-clearfix cc-content-list-item">
            <div class="cc-content-list-item-icon"></div>
            <div class="w-clearfix cc-content-list-item-text-wrap">
              <div class="cc-content-list-item-headline">Rate it up</div>
              <div class="cc-content-list-item-text">Let your users rate your content</div>
            </div>
          </li>
        </ul>
      </div>
      <div class="w-slider-mask">
        <div class="w-slide cc-content-slide-1">
          <div class="cc-content-img" data-ix="slide-from-right"></div>
        </div>
        <div class="w-slide cc-content-slide-2">
          <div class="cc-content-img" data-ix="slide-from-right"></div>
        </div>
      </div>
      <div class="w-slider-arrow-left w-hidden-small w-hidden-tiny cc-content-left-arrow">
        <div class="w-icon-slider-left"></div>
      </div>
      <div class="w-slider-arrow-right w-hidden-small w-hidden-tiny cc-content-right-arrow">
        <div class="w-icon-slider-right"></div>
      </div>
      <div class="w-slider-nav w-round cc-content-slide-nav"></div>
    </div>
    <div class="cc-section cc-stats">
      <div class="cc-stats-img" data-ix="slide-from-right"></div>
      <div class="w-container cc-content-container cc-stats-content" data-ix="fade-in">
        <h3>Make smart moves</h3>
        <p>With Classcast you have the power to calculate your business decisions with detailed statistics. Statistics that show who your users are and what content they are consuming.</p>
      </div>
    </div>
    <div class="w-slider cc-quote" data-animation="slide" data-duration="500" data-infinite="1" data-delay="4000" data-autoplay="1">
      <div class="w-slider-mask">
        <div class="w-slide">
          <div class="w-container cc-content-container">
            <p class="cc-quote-text">“We discovered Classcast through our own network of professionals: it’s simply the best solution for class delivery we found.”</p>
            <div class="cc-quote-author-wrap">
              <div class="cc-quote-author">
                <div class="cc-quote-author-img-wrap">
                  <img class="cc-quote-author-img" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" alt="538e951301b066d112564048_avatar.png">
                </div>
                <div class="cc-quote-author-name">Craig Bradley</div>
                <div class="cc-author-titleposition">VP Global Sales, Pivotal 5 (KettleWorX)</div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-slide">
          <div class="w-container cc-quote-content">
            <p class="cc-quote-text">“We discovered Classcast through our own network of professionals: it’s simply the best solution for class delivery we found.”</p>
            <div class="cc-quote-author-wrap">
              <div class="cc-quote-author">
                <div class="cc-quote-author-img-wrap">
                  <img class="cc-quote-author-img" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" alt="538e951301b066d112564048_avatar.png">
                </div>
                <div class="cc-quote-author-name">Craig Bradley</div>
                <div class="cc-author-titleposition">VP Global Sales, Pivotal 5 (KettleWorX)</div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-slide">
          <div class="w-container cc-quote-content">
            <p class="cc-quote-text">“We discovered Classcast through our own network of professionals: it’s simply the best solution for class delivery we found.”</p>
            <div class="cc-quote-author-wrap">
              <div class="cc-quote-author">
                <div class="cc-quote-author-img-wrap">
                  <img class="cc-quote-author-img" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" alt="538e951301b066d112564048_avatar.png">
                </div>
                <div class="cc-quote-author-name">Craig Bradley</div>
                <div class="cc-author-titleposition">VP Global Sales, Pivotal 5 (KettleWorX)</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-slider-nav w-round cc-quote-slide-nav"></div>
    </div>

<?php
	get_footer();
?>
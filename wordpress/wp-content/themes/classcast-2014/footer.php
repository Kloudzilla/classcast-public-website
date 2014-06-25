    <div class="cc-section cc-footer-sign-up">
      <div class="w-container cc-content-container cc-footer-signup-content">
        <div class="cc-signup-headline">Start monetizing your content today. Request your Classcast demo.</div>
        <a class="w-inline-block cc-button-s blue footer-signup" href="#">
          <div>Get Started</div>
        </a>
        <h3 class="cc-trusted-headline">Trusted and loved by these great companies</h3>
        <div class="cc-trusted-logo-wrap">
          <a class="w-inline-block cc-trusted-logo-link total-gym" href="http://www.totalgym.com/"></a>
          <a class="w-inline-block cc-trusted-logo-link gymstick" href="http://www.gymstick.com/"></a>
          <a class="w-inline-block cc-trusted-logo-link kettleworx" href="http://www.kettleworx.com/"></a>
          <a class="w-inline-block cc-trusted-logo-link yogafit" href="http://www.yogafit.com/"></a>
          <a class="w-inline-block cc-trusted-logo-link iom" href="http://www.qpec.com.au/"></a>
        </div>
      </div>
    </div>
    <div class="cc-section cc-footer-section">
      <div class="w-container w-hidden-small w-hidden-tiny cc-content-container cc-footer-content">
        <div class="w-row">
          <?php 
            $footer_menu_items = wp_get_nav_menu_items('footer');
            foreach($footer_menu_items as $footer_menu_item){
          ?>
              <?php
                if($footer_menu_item->menu_item_parent == 0) {
              ?>
                  <div class="w-col w-col-3">
                    <ul class="w-list-unstyled">
                      <li class="cc-footer-list-item-heading">
                        <?php
                          echo $footer_menu_item->title;
                        ?>
                      </li>

                      <?php
                      foreach($footer_menu_items as $sub_footer_menu_item){
                      ?>
                        <?php
                          if($sub_footer_menu_item->menu_item_parent == $footer_menu_item->ID) {
                        ?>
                            <li class="cc-footer-list-item">
                              <a class="w-inline-block cc-footer-list-item-link" href="<?php echo $sub_footer_menu_item->url;?>">
                                <div class="cc-footer-list-item-text"><?php echo $sub_footer_menu_item->title;?></div>
                              </a>
                            </li>
                        <?php
                          }
                        ?>
                      <?php
                      }
                      ?>
                    </ul>
                  </div>
              <?php
                }
              ?>
          <?php
            }
          ?>
        </div>
        <div class="w-clearfix cc-footer-branding">
          <div class="cc-footer-legal">© Classcast Inc&nbsp;2014. All&nbsp;Rights Reserved</div>
        </div>
      </div>
      <div class="w-hidden-main w-hidden-medium cc-footer-legal-mobile">© Classcast Inc&nbsp;2014. All&nbsp;Rights Reserved</div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->

  <?php
    wp_footer();
  ?>
</body>
</html>
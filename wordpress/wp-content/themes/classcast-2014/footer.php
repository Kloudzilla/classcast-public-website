    <div class="cc-section cc-footer-sign-up">
      <div class="w-container cc-content-container cc-footer-signup-content">
        <div class="cc-signup-headline">Start monetizing your content today. Request your Classcast demo.</div>
        <a class="w-inline-block cc-button-l get-started center" href="<?php echo get_permalink(49); ?>">
        <div>Request a Demo</div>
      </a>
        <h3 class="cc-trusted-headline">Trusted and loved by these great companies</h3>
        <div class="w-clearfix cc-trusted-logo-wrap">
          <a class="w-inline-block cc-trusted-logo-link total-gym" href="http://www.totalgym.com/" target="_blank"></a>
          <a class="w-inline-block cc-trusted-logo-link gymstick" href="http://www.gymstick.com" target="_blank"></a>
          <a class="w-inline-block cc-trusted-logo-link kettleworx" href="http://www.kettleworx.com/" target="_blank"></a>
          <a class="w-inline-block cc-trusted-logo-link yogafit" href="http://www.yogafit.com/" target="_blank"></a>
          <a class="w-inline-block cc-trusted-logo-link iom" href="http://www.instituteofmotion.com" target="_blank"></a>
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
                              <a class="w-inline-block cc-footer-list-item-link" href="<?php echo $sub_footer_menu_item->url;?>" target="<?php echo $sub_footer_menu_item->target; ?>">
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
          <div class="cc-footer-legal">© Classcast Inc&nbsp;2014. All&nbsp;Rights Reserved. Made with&nbsp;♡ in Palo Alto &amp;&nbsp;Sydney.&nbsp;</div>
        </div>
      </div>
      <div class="w-hidden-main w-hidden-medium cc-footer-legal-mobile">© Classcast Inc&nbsp;2014. All&nbsp;Rights Reserved. Made with&nbsp;♡ in Palo Alto &amp;&nbsp;Sydney.&nbsp;</div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
   <!-------------------------------
MODAL
-------------------------------->
  <script type="text/javascript">
    $(document).ready(function() {
      $('.modal-link').click(function() {
        $('.modal-background').slideDown();
      });
      $('.close-modal').click(function() {
        $('.modal-background').slideUp();
      });
    });
  </script>
  <!-------------------------------
VIDEO MODAL
-------------------------------->
  <script type="text/javascript">
    $(function() { // More efficient jQuery detector, less letters
        // Do this for each tutorial video (or whatever you call the class around it)
        $('.video').each(function(){
            var self = $(this);
            
            // Open
            self.find('.modal-video-link').on('click', function(){
                self.find('.modal-video-background').slideDown(500); // Half second
            });
            
            // Close
            self.find('.close-modal-video').on('click', function(){
                self.find('.modal-video-background').slideUp(500); // Half second
            });
        });
    });
  </script>
  <!-------------------------------
HASH REMOVAL
-------------------------------->
  <script type="text/javascript">
    $('a[href="#"]').on('click', function(e) { e.preventDefault(); });
  </script>
  <!-------------------------------
MOBILE SLIDE DOWN MENU
-------------------------------->
  <script type="text/javascript">
    $(function(){
        var menuBindPairs = [
             { key: '.cc-drop-link', menu: '.cc-drop'}, 
             { key: '.cc-drop-pasthero-link', menu: '.cc-drop-pasthero'}
       ];
        $.map(menuBindPairs, function(pair, index) {
            $(pair.key).on('click', function(ev) {
                var menu = $(pair.menu);
                // Slide it down and then bind a new event to do the opposite
                menu.slideDown(400, function(){
                    $(document).on('click.closemenu' + index, '*', function(e){
                        e.stopPropagation();
                        var clickedElement = $(this);
                        console.log(clickedElement);
                        if (!clickedElement.is(menu) && clickedElement.closest(menu).length <= 0) {
                             // Close menu
                            menu.slideUp(400, function(){
                                 $(document).off('click.closemenu' + index); // Close the bind
                            })
                        }
                        // Else
                    });
                });
            })
        });
    });
  </script>

</body>
<!-- KISSmetrics tracking snippet -->
  <script type="text/javascript">var _kmq = _kmq || [];
  var _kmk = _kmk || 'd1956d77b1fd9e9437566c72b0ab784ddba4a119';
  function _kms(u){
    setTimeout(function(){
      var d = document, f = d.getElementsByTagName('script')[0],
      s = d.createElement('script');
      s.type = 'text/javascript'; s.async = true; s.src = u;
      f.parentNode.insertBefore(s, f);
    }, 1);
  }
  _kms('//i.kissmetrics.com/i.js');
  _kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js');
  </script>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-24829332-2', 'auto');
  ga('send', 'pageview');
</script>

</html>
<!-- min -->
    <div class="cc-section cc-footer-min-section">
      <div class="w-container cc-content-container cc-footer-min-content">
        <div class="w-clearfix cc-footer-min">
          <ul class="w-list-unstyled w-clearfix cc-footer-min-list">

          <?php
            $tinyfooter_menu_items = wp_get_nav_menu_items('tinyfooter');
            foreach($tinyfooter_menu_items as $tinyfooter_menu_item)
            { 
          ?>
          
            <li class="cc-footer-min-list-item">
              <a href="<?php echo $tinyfooter_menu_item->url;?>" class="cc-footer-min-list-item-link">
                <?php echo $tinyfooter_menu_item->title;?>
              </a>
            </li>

          <?php 
            }
          ?>
          
          </ul>
          <div class="cc-footer-min-legal">© Classcast Inc&nbsp;2014. All&nbsp;Rights Reserved</div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
  
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

  <script type="text/javascript">
    $('a[href="#"]').on('click', function(e) { e.preventDefault(); });
  </script>

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

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-24829332-2', 'auto');
  ga('send', 'pageview');
</script>

</html>
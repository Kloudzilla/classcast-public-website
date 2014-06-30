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
    $(document).ready(function(){
      $(".cc-drop-link").click(function(){
        $(".cc-drop").slideToggle(300);
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".cc-drop-pasthero-link").click(function(){
        $(".cc-drop-pasthero").slideToggle(300);
      });
    });
  </script>
  <script>
    $('a[href="#"]').on('click',function(e){e.preventDefault();});
  </script>
</body>
</html>
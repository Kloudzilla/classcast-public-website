<?php
	/*
	Template Name: About Resources Page
	*/
  global $template_section;
  $template_section = 'about';
?>

<?php
	get_header();
?>
  <div class="cc-section cc-about-tagline">
    <div class="w-container cc-content-container cc-about-tagline-content">
      <h4 class="cc-about-resources-tagline">Your best source of knowledge and education to get your mobile content monetized</h4>
    </div>
  </div>
  <div class="cc-section">
    <div class="w-container cc-content-container cc-about-team">
      <h3 class="cc-about-resources-headline">EBOOKS</h3>
      <div class="w-row cc-ebook-row">
        <?php $loop = new WP_Query( array( 'post_type' => 'ebook' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>    
        <div class="w-col w-col-3 cc-ebook-col">
          <?php $ebook_release = get_post_meta($post->ID, 'ebook_release', true); ?>
          <a href="<?php echo wp_get_attachment_url($ebook_release); ?>" class='cc-ebook-link'>
          <?php $ebook_cover = get_field('ebook_cover');?>
            <img src="<?php echo $ebook_cover['url']; ?>" class="cc-ebook-cover">
            <h5 class="cc-ebook-title"><?php the_title(); ?></h5>
          </a>
          <a href="<?php echo wp_get_attachment_url($ebook_release); ?>" class="w-inline-block cc-button-s keyline" >Download</a>      
        </div>
        <?php endwhile; ?>
      </div>

      <!--<h3 class="cc-about-resources-headline">VIDEOS</h3>
      <div class="w-row cc-video-row">
        <?php $loop = new WP_Query( array( 'post_type' => 'video' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="video"> 
          <div class="w-col w-col-3 cc-video-col">
            <div class="w-clearfix modal-video-background">
              <a class="w-inline-block close-modal-video" href="#">
                <div>CLOSE</div>
              </a>
              <div class="w-container">
                <div class="modal-video-window">
                  <?php $videoID = get_post_meta($post->ID, 'tutorial_release', true);?>
                  <iframe src="<?php echo 'http://player.vimeo.com/video/'. $videoID;?>" width="600" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
              </div>
            </div>
            <a href="#" class="w-inline-block cc-video-link modal-video-link">
              <?php $video_thumbnail = get_field('video_thumbnail');?>
              <img src="<?php echo $video_thumbnail['url']; ?>" class="cc-video-cover">
              <h5 class="cc-video-title"><?php the_title(); ?></h5>
            </a>
          </div>
        </div>
          <?php endwhile; ?>
        </div>

      <h3 class="cc-about-resources-headline">TUTORIALS</h3>
      <?php $loop = new WP_Query( array( 'post_type' => 'tutorial', 'order' => 'ASC') ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class='video'>
        <div class="w-clearfix modal-video-background">
        <a class="w-inline-block close-modal-video" href="#">
          <div>CLOSE</div>
        </a>
        <div class="w-container">
          <div class="modal-video-window">
            <?php $videoID = get_post_meta($post->ID, 'tutorial_release', true);?>
            <iframe src="<?php echo 'http://player.vimeo.com/video/'. $videoID;?>" width="600" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
        <div class="w-row">
          <a class="w-inline-block cc-tutorial-link modal-video-link" href="#">
            <div class="w-col w-col-3">
              <?php $tutorial_thumbnail = get_field('tutorial_thumbnail');?>
              <img src="<?php echo $tutorial_thumbnail['url']; ?>" class="cc-video-cover">
            </div>
            <div class="w-col w-col-9">
              <h5 class="cc-tutorial-title"><?php the_title(); ?></h5>
              <div class="cc-tutorial-subtext"><?php the_excerpt(); ?></div>
            </div>  
          </a> 
        </div>
    </div>
      <?php endwhile; ?>-->

    </div>
  </div>
                

<?php
	get_footer('min');
?>
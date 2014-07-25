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
          <div class="cc-ebook-cover"></div>
          <h5 class="cc-ebook-title"><?php the_title(); ?></h5>
          <?php $ebook = get_post_meta($post->ID, 'ebook_release', true); ?>
          <?php if ($ebook): ?>
          <a href="<?php echo wp_get_attachment_url($ebook); ?>" class="w-inline-block cc-button-s keyline" >Download</a>
          <?php endif; ?>          
        </div>
        <?php endwhile; ?>
      </div>

      <h3 class="cc-about-resources-headline">VIDEOS</h3>
      <div class="w-row cc-video-row">
        <?php $loop = new WP_Query( array( 'post_type' => 'video' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>   
        <div class="w-col w-col-3 cc-video-col">
          <?php $video = get_post_meta($post->ID, 'video_release', true); ?>
          <?php if ($video): ?>
          <a href="<?php echo wp_get_attachment_url($video); ?>" class="w-inline-block cc-video-link modal-video-link">
            <div class="cc-video-cover"></div>
            <h5 class="cc-video-title"><?php the_title(); ?></h5>
          </a>
          <?php endif; ?> 
        </div>
        <?php endwhile; ?>
      </div>

      <iframe src="//player.vimeo.com/video/46748490" width="500" height="313" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

      <h3 class="cc-about-resources-headline">TUTORIALS</h3>
      <?php $loop = new WP_Query( array( 'post_type' => 'tutorial', 'order' => 'ASC') ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class='tutorial-video'>
      <div class="w-clearfix modal-video-background">
      <a class="w-inline-block close-modal-video" href="#">
        <div>CLOSE</div>
      </a>
      <div class="w-container">
        <div class="modal-video-window">
          <?php
          // Get the video URL and put it in the $video variable
          $videoID = get_post_meta($post->ID, 'tutorial_release', true);
          // Echo the embed code via oEmbed
          echo wp_oembed_get( 'http://vimeo.com/' . $videoID );
          ?>
        </div>
      </div>
    </div>


      <div class="w-row">
        <!--<?php $tutorial = get_post_meta($post->ID, 'tutorial_release', true); ?>
        <?php if ($tutorial): ?>-->
        <a class="w-inline-block cc-tutorial-link modal-video-link" href="#">
          <div class="w-col w-col-3">
            <div class="cc-video-cover"></div>
          </div>
          <div class="w-col w-col-9">
            <h5 class="cc-tutorial-title"><?php the_title(); ?></h5>
            <div class="cc-tutorial-subtext"><?php the_excerpt(); ?></div>
          </div>  
        </a> 
        <!--<?php endif; ?>-->
      </div>
    </div>
      <?php endwhile; ?>

    </div>
  </div>
                

<?php
	get_footer('min');
?>
<?php
	/*
	Template Name: About Jobs Page
	*/
  global $template_section;
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
  <div class="cc-section">
    <div class="w-container cc-content-container cc-about-jobs-content">
      <p class="cc-job-headline"><strong>AVAILABLE&nbsp;POSITIONS</strong>
      </p>
        <div class="w-row">
          <?php $loop = new WP_Query( array( 'post_type' => 'job' ) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <div class="w-col w-col-6 cc-job-col">
                <h4 class="cc-job-title-headline"><?php the_title(); ?></h4>
                <p class="cc-job-text"><?php the_content(); ?></p>
                <a class="w-inline-block cc-button-s keyline" href="mailto:jobs@classcast.co?subject=<?php the_title(); ?>">
                  <div>Apply</div>
                </a>
              </div>
            <?php endwhile; ?>
        </div>
      </div>
    </div>

<?php
	get_footer('min');
?>
<?php
	/*
	Template Name: About Press Page
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
                  <a class="w-inline-block cc-hero-navigation-list-item-link" href="<?php echo $heronav_menu_item->url;?>">
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
      <div class="w-container cc-content-container cc-about-press-content">
        <?php $loop = new WP_Query( array( 'post_type' => 'press' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
          <div class="w-clearfix cc-press-post">
            <div class="cc-press-post-content">
              <div class="cc-press-post-headline"><a class="cc-blog-post-headline-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div>
              <div class="cc-press-post-text"><?php the_excerpt(); ?></div>
              <div class="cc-press-post-author-text">By <?php the_author() ?> – <?php the_time('F jS, Y') ?></div>
            </div>
          </div>
        <?php endwhile; ?>          
      </div>
    </div>
                

<?php
	get_footer('min');
?>
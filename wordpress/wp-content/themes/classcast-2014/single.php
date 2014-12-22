<?php
	/*
	Template Name: Blog Post Page
	*/
  global $template_section;
  $template_section = 'blogpost';
?>

<?php
	get_header();
?>

<?php
	echo get_blog_subscribe_form();
?>

    <div class="cc-section">
      <div class="w-container cc-content-container cc-blog-content">
        <div class="cc-blog-post-full">
        <?php if (have_posts()) :
          while (have_posts()) : the_post(); ?>

          <div class="w-clearfix cc-blog-post-full-content">
            <div class="cc-blog-post-full-text">
            
            
			<div class="addthis_sharing_toolbox"></div>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5492699514f56463" async="async"></script>
            
              <?php the_content(); ?>
            </div>
            <div class="w-clearfix cc-blog-post-full-author-info">
              <?php if ( has_post_thumbnail() ) { ?>
              <div class="cc-blog-post-full-author-img"><?php the_post_thumbnail('thumbnail');?></div>
              <?php 
                  }
                ?>
              <div class="cc-blog-post-full-author-text">By <?php the_author() ?> – <?php the_time('F jS, Y') ?></div>
            </div>
            <?php 
              if ( in_category( 'press' )) { ?>
                <a class="w-inline-block cc-blog-post-full-return" href="/category/press">
              <?php } else { ?>
                <a class="w-inline-block cc-blog-post-full-return" href="/blog/">
              <?php
              }
              ?>
            
              <div>&lt; Return</div>
            </a>
          </div>
        </div>
        <?php endwhile;
        endif;?>
      </div>
    </div>
                

<?php
	get_footer('min');
?>
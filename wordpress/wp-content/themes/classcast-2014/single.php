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
 
    <div class="cc-section">
      <div class="w-container cc-content-container cc-blog-content">
        <div class="cc-blog-post-full">
<!--<?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>   
              <div class="w-clearfix cc-blog-post">
                <?php if ( has_post_thumbnail() ) { ?>
                  <div class="w-hidden-tiny cc-blog-post-author-img"><?php the_post_thumbnail('thumbnail');?></div>
                <?php 
                  }
                ?>
                <div class="cc-blog-post-content">
                  <div class="cc-blog-post-headline"><a class="cc-blog-post-headline-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </div>
                  <div class="cc-blog-post-text"><?php the_content(); ?></div>
                  <div class="cc-blog-post-author-text">By <?php the_author() ?> – <?php the_time('F jS, Y') ?></div>
                </div>
              </div>
          <?php endwhile;
        endif;?>-->


        <?php if (have_posts()) :
          while (have_posts()) : the_post(); ?>

          <div class="w-clearfix cc-blog-post-full-content">
            <div class="cc-blog-post-full-text">
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
            <a class="w-inline-block cc-blog-post-full-return" href="/blog/">
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
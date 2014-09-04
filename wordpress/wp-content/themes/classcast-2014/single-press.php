<?php
  global $template_section;
  $template_section = 'aboutpost';
?>

<?php
	get_header();
?>
<div class="cc-section">
  <div class="w-container cc-content-container cc-blog-content">
    <div class="cc-blog-post-full">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="w-clearfix cc-blog-post-full-content">
        <div class="cc-blog-post-full-text">
          <?php the_content(); ?>
          <?php $press = get_post_meta($post->ID, 'pdf_release', true); ?>
          <?php if ($press): ?>
          <a href="<?php echo wp_get_attachment_url($press); ?>" class="cc-button-s keyline">Download Release</a>
          <?php endif; ?> 
        </div>
        <div class="w-clearfix cc-blog-post-full-author-info">
            <!--<?php if ( has_post_thumbnail() ) { ?>
            <div class="cc-blog-post-full-author-img"><?php the_post_thumbnail('thumbnail');?></div>
            <?php 
                }
              ?>-->
          <div class="cc-blog-post-full-author-text">By <?php the_author() ?> – <?php the_time('F jS, Y') ?></div>
          </div>
          <a class="w-inline-block cc-blog-post-full-return" href="/about/press">
            <div>&lt; Return</div>
          </a>
        </div>
      </div>
    <?php endwhile; endif;?>
  </div>
</div>
<?php
	get_footer('min');
?>
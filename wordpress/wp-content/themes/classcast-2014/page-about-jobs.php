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
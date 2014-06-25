<?php

  global $template_section;
  $template_section = 'blog';
?>

<?php
	get_header();
?>
 
    <div class="cc-section">
      <div class="w-container cc-content-container cc-blog-content">
        <div class="w-clearfix cc-blog-post">
          <img class="w-hidden-tiny cc-blog-post-author-img" src="<?php echo get_template_directory_uri(); ?>/img/image-placeholder.svg" alt="image-placeholder.svg">
          <div class="cc-blog-post-content">
            <div class="cc-blog-post-headline"><a class="cc-blog-post-headline-link" href="blog-post.html">Case Study: How KettleWorkX Uses Classcast To Engage Instructors</a>
            </div>
            <div class="cc-blog-post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ipsum non commodo laoreet. Vivamus ut imperdiet orci. Maecenas dapibus nisi tellus, ac facilisis metus tristique et. Morbi adipiscing accumsan lectus non rutrum. Duis
              facilisis id enim eget iaculis. Nulla tellus arcu, ultricies ac dictum at, commodo in nibh. Morbi eu lorem imperdiet, posuere velit semper, convallis dolor.</div>
            <div class="cc-blog-post-author-text">By Firstname Last – May 26th, 2014</div>
          </div>
        </div>
        <div class="w-clearfix cc-blog-post">
          <img class="w-hidden-tiny cc-blog-post-author-img" src="<?php echo get_template_directory_uri(); ?>/img/image-placeholder.svg" alt="image-placeholder.svg">
          <div class="cc-blog-post-content">
            <div class="cc-blog-post-headline"><a href="blog-post.html" class="cc-blog-post-headline-link">Case Study: How KettleWorkX Uses Classcast To Engage Instructors</a>
            </div>
            <div class="cc-blog-post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ipsum non commodo laoreet. Vivamus ut imperdiet orci. Maecenas dapibus nisi tellus, ac facilisis metus tristique et. Morbi adipiscing accumsan lectus non rutrum. Duis
              facilisis id enim eget iaculis. Nulla tellus arcu, ultricies ac dictum at, commodo in nibh. Morbi eu lorem imperdiet, posuere velit semper, convallis dolor.</div>
            <div class="cc-blog-post-author-text">By Firstname Last – May 26th, 2014</div>
          </div>
        </div>
        <div class="w-clearfix cc-blog-post">
          <img class="w-hidden-tiny cc-blog-post-author-img" src="<?php echo get_template_directory_uri(); ?>/img/image-placeholder.svg" alt="image-placeholder.svg">
          <div class="cc-blog-post-content last">
            <div class="cc-blog-post-headline"><a class="cc-blog-post-headline-link" href="blog-post.html">Case Study: How KettleWorkX Uses Classcast To Engage Instructors</a>
            </div>
            <div class="cc-blog-post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique ipsum non commodo laoreet. Vivamus ut imperdiet orci. Maecenas dapibus nisi tellus, ac facilisis metus tristique et. Morbi adipiscing accumsan lectus non rutrum. Duis
              facilisis id enim eget iaculis. Nulla tellus arcu, ultricies ac dictum at, commodo in nibh. Morbi eu lorem imperdiet, posuere velit semper, convallis dolor.</div>
            <div class="cc-blog-post-author-text">By Firstname Last – May 26th, 2014</div>
          </div>
        </div>
      </div>
    </div>
                

<?php
	get_footer('minified');
?>


<?php get_header(); ?>
<div class="container">
    <div class="row">
      <?php if(have_posts()){
        while(have_posts()){
          the_post(); ?>
          <div class="col-md-4">
            <h3 class="mytitles"><?php the_title();?></h3>
            <div class="featured-image">
              <?php the_post_thumbnail('thumbnail'); ?>
            </div>
            <p class="post-info"><?php echo "<span class='bold'>Published:</span> " . get_the_date(); echo" | "; echo "<span class='bold'>Written by: </span> "
            . get_the_author(); ?>
            <?php the_excerpt(); ?>

            <a class="btn btn-primary btn-sm" href="<?php the_permalink();?>">Read More >></a>
          </div>
      <?php
    } /*ends while*/
  }/*ends if*/


       ?>
    </div>
  </div>














<?php get_footer(); ?>

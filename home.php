    <?php
        get_header();
    ?>
   <div class="mast page-mast">
      <?php
          if( has_post_thumbnail() ) {
              the_post_thumbnail();
          } else {?>
              <img src="<?php echo home_url(); ?>/wp-content/uploads/2018/09/BlogBanner.jpg" />
        <?php  } 
          $mast_title       = get_post_meta( get_the_ID(), 'mast_title', true );
          $mast_description = get_post_meta( get_the_ID(), 'mast_description', true );
      ?>
      <div class="container mast-overlay">
          <?php
             if( !empty($mast_title) ) {
                 echo '<h1 class="titleText">'.$mast_title.'</h1>';
             }
             else{
                 echo '<h1 class="titleText">Blog</h1><p>Our Latest News</p>';
             }
            if( !empty($mast_description) ) {
                echo wpautop( $mast_description );
            }
          ?>
      </div>
  </div>
<div class="container-fluid  introtext" style="background-color: #61082B;"><div class="container">
<div class="row padding40">
<div class="col col-lg-12 col-md-12 col-sm-12 col-xsm-12 whiteText">
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent </p>
</div>
</div>
</div></div>
   <article class="page-content eventssection">
     <div class="container">
       <div class="row">
         <div class="col col-lg-9 col-md-12 col-sm-12 col-xsm-12 articles">

              <?php while ( have_posts() ) : the_post(); ?>

                <div id="Post" class="blogposts">
                  <!---a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><div class="date txt-primary">
                    <span><?php the_time('d') ?></span>
                    <span><?php the_time('F') ?></span>
                    <span><?php the_time('Y') ?></span>
                  </div></a---->
                  <h2 class="post-title">
                      <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h2>
                  <?php the_excerpt(); ?>
                </div>

              <?php endwhile; // End of the loop. ?>

          </div>
          <div class="col col-lg-3 col-md-12 col-sm-12 col-xsm-12">

            <div class="blog-sidebar">
                <?php dynamic_sidebar( 'page_sidebar_1' ); ?>
            </div>

           </div>
        </div>
      </div>
    </article>

    <?php
        get_footer();

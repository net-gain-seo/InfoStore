<?php
    // TESTIMONIALS
    get_header();
?>
<div class="mast page-mast">
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2018/09/SubPageBanner.jpg" />
    <div class="container mast-overlay">
        <h1>Customer Testimonials</h1>
        <p>Read What Our Customers Are Saying About Us</p>
    </div>
</div>
<div class="container-fluid  introtext" style="  background-color: #61082B;"><div class="container">
<div class="row padding40">
<div class="col col-lg-12 col-md-12 col-sm-12 col-xsm-12 whiteText">
<p><em>“It was absolutely fantastic. The service and ordering what I wanted was simple and always on schedule. I would recommend it to anyone any business. Thanks.”</em></p>
<p>Joseph J.</p>
</div>
</div>
</div></div>
<div class="container-fluid testimonials-listing">
  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php $auth = get_post_meta($post->ID, 'testimonial_author', true);?>
    <div class="row padding20">
      <article class="col col-lg-12 col-md-12 col-sm-12 col-xsm-12">


          <h3 class="post-title">
              <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
          <div class="the-testimonial">
              <?php the_content(); ?>
          </div>
          <p><?php echo $auth ?></p>

      </article>
    </div>
            <?php endwhile; // End of the loop. ?>
  </div>
</div>
<?php echo do_shortcode( '[common_element id="198"]<br/><br/>' ); ?>
<?php
    get_footer();

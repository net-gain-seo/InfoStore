</main>

<footer class="container-fluid site-footer">
    <div class="container flex-footer">
      <div class="f-item logo">
        <a href="http://www.naidonline.org/nitl/en/cert/history-purpose.html" target="_blank" class="clientlogo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/NaidFooterLogo.png" width="95px" alt="Naid Certified"></a>
        <a href="https://prismintl.org/privacy-certified-companies/" target="_blank" class="clientlogo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/CertifiedPrivacyLogo.png" width="95px" alt="Certified Privacy"></a>
        <a href="https://www.nationalrecordscenters.com/" target="_blank" class="clientlogo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/NRCFooterLogo.png" width="160px" alt="National Records Centers"></a>
        <a href="https://www.iofm.com/" target="_blank" class="clientlogo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/IOFMFooterLogo.png" width="135px" alt="IOFM"></a>
      </div>
      <div class="f-item social">
          <a href="https://www.linkedin.com/company/infostore-llc" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedinicon.png" width="55px" alt="LinkedIn"></a>
          <a href="https://www.facebook.com/pages/InfoStore-Records-Center/150912068268492" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebookicon.png" width="55px" alt="Facebook"></a>
          <a href="https://twitter.com/Infostorerc" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twittericon.png" width="55px" alt="Twitter"></a>
      </div>
      <div class="f-item address">
        <h3>InfoStore LLC</h3>
        1200 East Granger Road<br/>
        Cleveland, Ohio 44131
      </div>
      <div class="f-item phone-assoc">
        <div class="phone">
            <a href="tel:12167494636">Call: (216) 749-INFO (4636)</a>
            <a>Fax: (216) 741-6750</a>
        </div>
      </div>
      <div class="f-item copyright">&copy; <?php echo date("Y"); ?> InfoStore LLC</div>
      <div class="f-item netgain">Website Designed by <a href="http://www.netgainseo.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/netgain.png" alt=""></a></div>

    </div>
</footer>
<div class="modal fade" id="popForm" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <h1 class="modal-title title">WORK WITH US</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            <div class="modal-body">
                <?php echo do_shortcode( '[contact-form-7 id="386" title="Pop-Out Form"]' ); ?>
            </div>
        </div>
    </div>
</div>
<a href="#" class="scrollToTop">&uarr;</a>
<div id="closeNav" class="close-nav">Close <i class="fa fa-times"></i></button></div>
<?php wp_footer(); ?>
</body>
</html>

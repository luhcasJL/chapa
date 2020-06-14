<!--Start Footer-->
<footer class="footer" id="footer">
  <div class="container">
    <div class="main-footer">
      <div class="row">
        <div class="col-md-3">
          <div class="newsletter">
            <div class="title">
              <h5>NEWSLETTER</h5>
            </div>
            <div class="detail">
              <div class="signup-text">
                <i class="icon-dollar"></i>
                <span>Receba novidades.</span>
              </div>
              <div class="form">
                <p class="subscribe_success" id="subscribe_success" style="display:none;"></p>
                <p class="subscribe_error" id="subscribe_error" style="display:none;"></p>
                <form name="subscribe_form" id="subscribe_form" method="post" action="#" onSubmit="return false">
                  <input type="text" data-delay="300" placeholder="Seu nome" name="subscribe_name" id="subscribe_name" onKeyPress="removeChecks();" class="input" >
                  <input type="text" data-delay="300" placeholder="E-mail" name="subscribe_email" id="subscribe_email" onKeyPress="removeChecks();" class="input" >
                  <input name="Subscribe" type="submit" value="Inscrever" onClick="validateSubscription();">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">
          <div class="get-touch">
            <div class="title">
              <h5>Saiba mais</h5>
            </div>
            <div class="detail">
              <div class="get-touch">
                <span class="text">Chapa!</span>
                <ul>
                  <li><i class="icon-location"></i> <span>Chapa! Company Ltd, Brasil</span></li>
                  <li><i class="icon-phone4"></i> <span>(+55) XX X567-8X01</span></li>
                  <li><a href="#."><i class="icon-dollar"></i> <span>contato@chapa.com.br</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <span class="copyrights">Chapa! 2020.</span>
        </div>
        <div class="col-md-6">
          <div class="social-icons">
            <a href="#." class="fb"><i class="icon-euro"></i></a>
            <a href="#." class="tw"><i class="icon-yen"></i></a>
            <a href="#." class="gp"><i class="icon-google-plus"></i></a>
            <a href="#." class="vimeo"><i class="icon-vimeo4"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<a href="#0" class="cd-top"></a>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

<!-- SMOOTH SCROLL -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/scroll-desktop.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/scroll-desktop-smooth.js"></script>

<!-- START REVOLUTION SLIDER -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.themepunch.tools.min.js"></script>


<!-- Date Picker and input hover -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/classie.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.js"></script>

<!-- Fun Facts Counter -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/counter.js"></script>


<!-- Welcome Tabs -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tabs.js"></script>


<!-- All Carousel -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mmenu.min.all.js"></script>

<!-- All Scripts -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>


<!-- Revolution Slider -->
<script type="text/javascript">
jQuery('.tp-banner').show().revolution(
  {
    dottedOverlay:"none",
    delay:16000,
    startwidth:1170,
    startheight:720,
    hideThumbs:200,

    thumbWidth:100,
    thumbHeight:50,
    thumbAmount:5,

    navigationType:"nexttobullets",
    navigationArrows:"solo",
    navigationStyle:"preview",

    touchenabled:"on",
    onHoverStop:"on",

    swipe_velocity: 0.7,
    swipe_min_touches: 1,
    swipe_max_touches: 1,
    drag_block_vertical: false,

    parallax:"mouse",
    parallaxBgFreeze:"on",
    parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

    keyboardNavigation:"off",

    navigationHAlign:"center",
    navigationVAlign:"bottom",
    navigationHOffset:0,
    navigationVOffset:20,

    soloArrowLeftHalign:"left",
    soloArrowLeftValign:"center",
    soloArrowLeftHOffset:20,
    soloArrowLeftVOffset:0,

    soloArrowRightHalign:"right",
    soloArrowRightValign:"center",
    soloArrowRightHOffset:20,
    soloArrowRightVOffset:0,

    shadow:0,
    fullWidth:"on",
    fullScreen:"off",

    spinner:"spinner4",

    stopLoop:"off",
    stopAfterLoops:-1,
    stopAtSlide:-1,

    shuffle:"off",

    autoHeight:"off",
    forceFullWidth:"off",



    hideThumbsOnMobile:"off",
    hideNavDelayOnMobile:1500,
    hideBulletsOnMobile:"off",
    hideArrowsOnMobile:"off",
    hideThumbsUnderResolution:0,

    hideSliderAtLimit:0,
    hideCaptionAtLimit:0,
    hideAllCaptionAtLilmit:0,
    startWithSlide:0,
    videoJsPath:"rs-plugin/videojs/",
    fullScreenOffsetContainer: ""
  });
</script>


</body>
</html>

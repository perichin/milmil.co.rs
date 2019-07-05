<!-- JS Global Compulsory -->
<script src="../../assets/vendor/jquery/jquery.min.js"></script>
<script src="../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="../../assets/vendor/tether.min.js"></script>
<script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>

<!-- JS Revolution Slider -->
<script src="../../assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="../../assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="../../assets/vendor/revolution-slider/revolution-addons/slicey/js/revolution.addon.slicey.min.js"></script>
<script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- JS Unify -->
<script src="../../assets/js/hs.core.js"></script>
<script src="../../assets/js/components/hs.header.js"></script>
<script src="../../assets/js/helpers/hs.hamburgers.js"></script>
<script src="../../assets/js/components/hs.go-to.js"></script>

<!-- JS Plugins Init. -->
<script>
  // initialization of slider revolution
  var tpj = jQuery,
    revapi24;

  tpj(document).ready(function () {
    if (tpj("#rev_slider_24_1").revolution == undefined) {
      revslider_showDoubleJqueryError("#rev_slider_24_1");
    } else {
      revapi24 = tpj("#rev_slider_24_1").show().revolution({
        sliderType: "standard",
        jsFileLocation: "../../assets/vendor/revolution-slider/revolution/js/",
        sliderLayout: "fullscreen",
        dottedOverlay: "none",
        delay: 9000,
        navigation: {
          keyboardNavigation: "off",
          keyboard_direction: "horizontal",
          mouseScrollNavigation: "off",
          mouseScrollReverse: "default",
          onHoverStop: "off",
          bullets: {
            enable: true,
            hide_onmobile: false,
            style: "bullet-bar",
            hide_onleave: false,
            direction: "horizontal",
            h_align: "center",
            v_align: "bottom",
            h_offset: 0,
            v_offset: 50,
            space: 5,
            tmp: ''
          }
        },
        responsiveLevels: [1240, 1024, 778, 480],
        visibilityLevels: [1240, 1024, 778, 480],
        gridwidth: [1240, 1024, 778, 480],
        gridheight: [868, 768, 960, 720],
        lazyType: "none",
        shadow: 0,
        spinner: "off",
        stopLoop: "off",
        stopAfterLoops: -1,
        stopAtSlide: -1,
        shuffle: "off",
        autoHeight: "off",
        fullScreenAutoWidth: "off",
        fullScreenAlignForce: "off",
        fullScreenOffsetContainer: "",
        fullScreenOffset: "60px",
        hideThumbsOnMobile: "off",
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        debugMode: false,
        fallbacks: {
          simplifyAll: "off",
          nextSlideOnWindowFocus: "off",
          disableFocusListener: false
        }
      });
    }

    if (revapi24) revapi24.revSliderSlicey();
  });

  $(document).on('ready', function () {

    // initialization of go to
    $.HSCore.components.HSGoTo.init('.js-go-to');
  });

  $(window).on('load', function () {
    // initialization of header
    $.HSCore.components.HSHeader.init($('#js-header'));
    $.HSCore.helpers.HSHamburgers.init('.hamburger');

    // initialization of HSMegaMenu component
    $('.js-mega-menu').HSMegaMenu({
      event: 'hover',
      pageContainer: $('.container'),
      breakpoint: 991
    });
  });

</script>

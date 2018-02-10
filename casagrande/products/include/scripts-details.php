<!-- JS Global Compulsory -->
<script src="../../../assets/vendor/jquery/jquery.min.js"></script>
<script src="../../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="../../../assets/vendor/tether.min.js"></script>
<script src="../../../assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="../../../assets/vendor/appear.js"></script>
<script src="../../../assets/vendor/custombox/custombox.min.js"></script>
<script src="../../../assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="../../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="../../../assets/vendor/fancybox/jquery.fancybox.min.js"></script>

<!-- JS Unify -->
<script src="../../../assets/js/hs.core.js"></script>
<script src="../../../assets/js/components/hs.carousel.js"></script>
<script src="../../../assets/js/components/hs.header.js"></script>
<script src="../../../assets/js/helpers/hs.hamburgers.js"></script>
<script src="../../../assets/js/components/hs.go-to.js"></script>
<script src="../../../assets/js/components/hs.popup.js"></script>

<!-- JS Customization -->
<script src="../../../assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>

  $(document).on('ready', function () {
    // initialization of popups
    $.HSCore.components.HSPopup.init('.js-fancybox');

    // initialization of carousel
    $.HSCore.components.HSCarousel.init('.js-carousel');

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

<!-- JS Global Compulsory -->
<script src="../../../assets/vendor/jquery/jquery.min.js"></script>
<script src="../../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="../../../assets/vendor/tether.min.js"></script>
<script src="../../../assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="../../../assets/vendor/appear.js"></script>
<script src="../../../assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="../../../assets/vendor/custombox/custombox.min.js"></script>
<script src="../../../assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="../../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="../../../assets/vendor/fancybox/jquery.fancybox.min.js"></script>

<!-- JS Unify -->
<script src="../../../assets/js/hs.core.js"></script>
<script src="../../../assets/js/components/hs.carousel.js"></script>
<script src="../../../assets/js/components/hs.header.js"></script>
<script src="../../../assets/js/components/hs.cubeportfolio.js"></script>
<script src="../../../assets/js/helpers/hs.hamburgers.js"></script>
<script src="../../../assets/js/components/hs.go-to.js"></script>
<script src="../../../assets/js/components/hs.popup.js"></script>

<!-- JS Plugins Init. -->
<script>

  $(document).on('ready', function () {
    // initialization of carousel
    $.HSCore.components.HSCarousel.init('.js-carousel');

    // initialization of go to
    $.HSCore.components.HSGoTo.init('.js-go-to');

    // initialization of popups
    $.HSCore.components.HSPopup.init('.js-fancybox');

    $('#carouselCus2').slick('setOption', 'responsive', [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 2
      }
    }, {
      breakpoint: 576,
      settings: {
        slidesToShow: 1
      }
    }], true);

    // sloba dodo
    $('#ourCourses').fadeTo(250, 1);

    $('*[data-category]').on('click', function(){
      $('[data-filter="' + $(this).data('category') + '"]').click();
    })
  });

  $(window).on('load', function () {
    // initialization of header
    $.HSCore.components.HSHeader.init($('#js-header'));
    $.HSCore.helpers.HSHamburgers.init('.hamburger');
    // initialization of cubeportfolio
    $.HSCore.components.HSCubeportfolio.init('.cbp');
    // initialization of HSMegaMenu component
    $('.js-mega-menu').HSMegaMenu({
      event: 'hover',
      pageContainer: $('.container'),
      breakpoint: 991
    });
  });

</script>

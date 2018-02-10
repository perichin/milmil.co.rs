<!-- JS Global Compulsory -->
<script src="../../assets/vendor/jquery/jquery.min.js"></script>
<script src="../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="../../assets/vendor/tether.min.js"></script>
<script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="../../assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
<script src="../../assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
<script src="../../assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
<script src="../../assets/vendor/fancybox/jquery.fancybox.min.js"></script>
<script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="../../assets/vendor/typedjs/typed.min.js"></script>
<!-- JS Unify -->
<script src="../../assets/js/hs.core.js"></script>
<script src="../../assets/js/components/hs.header.js"></script>
<script src="../../assets/js/helpers/hs.hamburgers.js"></script>
<script src="../../assets/js/components/hs.tabs.js"></script>
<script src="../../assets/js/components/hs.popup.js"></script>
<script src="../../assets/js/components/hs.carousel.js"></script>
<!-- <script src="../../assets/js/components/text-animation/hs.text-slideshow.js"></script> -->
<script src="../../assets/js/components/hs.go-to.js"></script>
<!-- JS Customization -->
<script src="../../assets/js/custom.js"></script>
<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of text animation (typing)
        $(".u-text-animation.u-text-animation--typing").typed({
        strings: [
            // "an awesome template",
            // "perfect template",
            ".sunoilespana.com"
        ],
        typeSpeed: 60,
        loop: true,
        backDelay: 1500
        });

        $('#scroll-down').on('click', function() {
            $('html,body').animate({
                scrollTop: $('#proizvodi').offset().top - 35},
                1000);
        });
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

    $(window).on('resize', function () {
        setTimeout(function () {
        $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
    });
</script>

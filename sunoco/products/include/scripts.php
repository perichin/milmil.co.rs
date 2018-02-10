<!-- JS Global Compulsory -->
<script src="../../../assets/vendor/jquery/jquery.min.js"></script>
<script src="../../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="../../../assets/vendor/tether.min.js"></script>
<script src="../../../assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="../../../assets/vendor/appear.js"></script>
<script src="../../../assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script  src="../../../assets/vendor/custombox/custombox.min.js"></script>

<!-- JS Unify -->
<script src="../../../assets/js/hs.core.js"></script>
<script src="../../../assets/js/components/hs.header.js"></script>
<script src="../../../assets/js/helpers/hs.hamburgers.js"></script>
<script src="../../../assets/js/components/hs.cubeportfolio.js"></script>
<script src="../../../assets/js/components/hs.go-to.js"></script>
<script src="../../../assets/js/components/hs.modal-window.js"></script>    

<!-- JS Customization -->
<script src="../../../assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
  $(document).on('ready', function () {
    // initialization of go to
    $.HSCore.components.HSGoTo.init('.js-go-to');
    // passing data to modal
    var products = <?php echo json_encode($products); ?>;
    $.HSCore.components.HSModalWindow.init('[data-modal-target]', {"products" : products});          
  });

  $(window).on('load', function () {
    // initialization of header
    $.HSCore.components.HSHeader.init($('#js-header'));
    $.HSCore.helpers.HSHamburgers.init('.hamburger');
    // initialization of cubeportfolio
    $.HSCore.components.HSCubeportfolio.init('.cbp');
  });
</script>

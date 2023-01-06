    <!-- STYLE SWITCHER END ==== -->
    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('js/jquery.bootstrap-touchspin.min.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('js/waypoints-sticky.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script><!-- MASONRY  -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
    <script src="{{ asset('js/scrolla.min.js') }}"></script><!-- ON SCROLL CONTENT ANIMTE   -->
    <script src="{{ asset('js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('js/shortcode.js') }}"></script><!-- SHORTCODE FUCTIONS  -->
    <script src="{{ asset('js/switcher.js') }}"></script><!-- SWITCHER FUCTIONS  -->
    @yield('scripts')
    <!-- SLIDER REVOLUTION -->
    <script src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>
    <!-- REVOLUTION SLIDER SCRIPT -->
    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script src="{{ asset('js/rev-script-1.js') }}"></script>

    <script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?15143';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
      "enabled":true,
      "chatButtonSetting":{
          "backgroundColor":"#4dc247",
          "ctaText":"Chat With Us",
          "borderRadius":"25",
          "marginLeft":"0",
          "marginBottom":"50",
          "marginRight":"50",
          "position":"left"
      },
      "brandSetting":{
          "brandName":"KMAE",
          "brandSubTitle":"We are here to help you.",
          "brandImg":"https://cdn.clare.ai/wati/images/WATI_logo_square_2.png",
          "welcomeText":"Hi there!\nHow can I help you?",
          "messageText":"hi",
          "backgroundColor":"#0a5f54",
          "ctaText":"Start Chat",
          "borderRadius":"25",
          "autoShow":false,
          "phoneNumber":"255766300777"
      }
    };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>

<script
    src=" {{ asset('assets/js/vendor/jquery-3.6.0.min.js') . '?v=' . filemtime(base_path() . '/public/assets/js/vendor/jquery-3.6.0.min.js') }}">
</script>
<script src="{{ asset('assets/js/vendor.js') . '?v=' . filemtime(base_path() . '/public/assets/js/vendor.js') }}">
</script>
<script src="{{ asset('assets/js/functions.js') . '?v=' . filemtime(base_path() . '/public/assets/js/functions.js') }}">
</script>
<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?15143';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
        "enabled": true,
        "chatButtonSetting": {
            "backgroundColor": "#4dc247",
            "ctaText": "Chat With Us",
            "borderRadius": "25",
            "marginLeft": "0",
            "marginBottom": "50",
            "marginRight": "50",
            "position": "left"
        },
        "brandSetting": {
            "brandName": "KMAE",
            "brandSubTitle": "We are here to help you.",
            "brandImg": "https://cdn.clare.ai/wati/images/WATI_logo_square_2.png",
            "welcomeText": "Hi there!\nHow can I help you?",
            "messageText": "hi",
            "backgroundColor": "#0a5f54",
            "ctaText": "Start Chat",
            "borderRadius": "25",
            "autoShow": false,
            "phoneNumber": "255766300777"
        }
    };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>

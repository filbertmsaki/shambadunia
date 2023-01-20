<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<x-web.head-component />

<body>
    <div class="preloader">
        <div class="dual-ring"></div>
    </div>
    <div class="wrapper clearfix" id="wrapperParallax">
        <x-web.header-component />
        {{ $slot }}
        <x-web.footer-component />


        <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
    </div>

    <x-web.scripts-component />

</body>


</html>

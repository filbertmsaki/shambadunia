<!DOCTYPE html>
<html lang="en">

<x-web.head-component />

<body id="bg">

    <div class="page-wraper">

        <!-- HEADER START -->
     <x-web.header-component />
        <!-- HEADER END -->

        <!-- CONTENT START -->
      {{ $slot }}
        <x-web.footer-component />
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>
    </div>



    <!-- LOADING AREA START ===== -->
    {{-- <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="loader">
                <span class="block-1"></span>
                <span class="block-2"></span>
                <span class="block-3"></span>
                <span class="block-4"></span>
                <span class="block-5"></span>
                <span class="block-6"></span>
                <span class="block-7"></span>
                <span class="block-8"></span>
                <span class="block-9"></span>
                <span class="block-10"></span>
                <span class="block-11"></span>
                <span class="block-12"></span>
                <span class="block-13"></span>
                <span class="block-14"></span>
                <span class="block-15"></span>
                <span class="block-16"></span>
            </div>
        </div>
    </div> --}}
    <!-- LOADING AREA  END ====== -->

<x-web.scripts-component />
</body>

</html>

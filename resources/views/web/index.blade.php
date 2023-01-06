<x-web-layout>
    @section('title', 'Home Page')
    <div class="page-content">
        <style>
            #rev_slider_1077_1_wrapper {
                height: 600px !important;
                overflow: hidden;
            }

            .tp-fullwidth-forcer {
                height: 600px !important;
            }

            .BigBold-Title,
            .BigBold-Title .site-text-primary {
                font-size: 40px !important;
                line-height: 24px !important
            }

            @media only screen and (max-width:991px) {
                #rev_slider_1077_1_wrapper {
                    height: 400px !important;
                }

                .tp-fullwidth-forcer {
                    height: 400px !important;
                }

                .BigBold-Title,
                .BigBold-Title .site-text-primary {
                    font-size: 20px !important;

                }
            }
        </style>
        <!-- SLIDER START -->
        <div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <!-- START REVOLUTION SLIDER 5.4.1 -->
                    <div id="rev_slider_1077_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                        data-alias="scroll-effect136" data-source="gallery" style="background-color:#111111;padding:0px;">
                        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                        <div id="rev_slider_1077_1" class="rev_slider fullscreenbanner" style="display:none; "
                            data-version="5.4.1">
                            <ul>
                                <!-- SLIDE  -->
                                <li data-index="rs-100" data-transition="slideoverhorizontal" data-slotamount="default"
                                    data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut"
                                    data-easeout="Power4.easeInOut" data-masterspeed="1000"
                                    data-thumb="{{ asset(__('response.sliders.0.image')) }}" data-rotate="0"
                                    data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                                    data-saveperformance="off" data-title="" data-param1="" data-param2=""
                                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                    data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset(__('response.sliders.0.image')) }}" alt=""
                                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                        data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper  " id="slide-100-layer-1"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                        data-width="full" data-height="['400','400','400','550']"
                                        data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                                        data-responsive_offset="off" data-responsive="off"
                                        data-frames='[{"from":"opacity:0;","speed":100,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":0,"to":"opacity:0;","ease":"nothing"}]'
                                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                           border-width:0px;background:linear-gradient(to top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.4) 100%);cursor:default;">
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper  " id="slide-100-layer-2"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                        data-width="full" data-height="['400','400','400','550']"
                                        data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                                        data-responsive_offset="off" data-responsive="off"
                                        data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                           border-width:0px;background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);cursor:default;">
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption BigBold-Title   tp-resizeme" id="slide-100-layer-3"
                                        data-x="['left','left','left','left']" data-hoffset="['50','50','30','17']"
                                        data-y="['bottom','bottom','bottom','bottom']"
                                        data-voffset="['110','110','180','180']" data-fontsize="['90','70','50','30']"
                                        data-lineheight="['100','90','60','60']"
                                        data-fontweight="['800','800','800','800']"
                                        data-width="['none','none','none','400']" data-height="none"
                                        data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text"
                                        data-basealign="slide" data-responsive_offset="off"
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},
                                           {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                        data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: 6;
                                           text-transform:uppercase;
                                           color:#fff;
                                           ">
                                        {!! __('response.sliders.0.title') !!}
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption BigBold-SubTitle  " id="slide-100-layer-4"
                                        data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']"
                                        data-y="['bottom','bottom','bottom','bottom']"
                                        data-voffset="['40','1','74','78']" data-fontsize="['15','15','15','13']"
                                        data-lineheight="['24','24','24','20']" data-width="['410','410','410','280']"
                                        data-height="['60','100','100','100']" data-whitespace="normal"
                                        data-type="text" data-basealign="slide" data-responsive_offset="off"
                                        data-responsive="off"
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: 7;
                                           color:#fff;
                                           ">
                                        {!! __('response.sliders.0.paragraph') !!}
                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption BigBold-Button rev-btn " id="slide-100-layer-5"
                                        data-x="['left','left','left','left']" data-hoffset="['480','480','30','20']"
                                        data-y="['bottom','bottom','bottom','bottom']"
                                        data-voffset="['35','35','35','35']" data-width="none" data-height="none"
                                        data-whitespace="nowrap" data-type="button"
                                        data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                        data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                        data-textAlign="['left','left','left','left']" data-paddingtop="[15,15,15,15]"
                                        data-paddingright="[50,50,50,50]" data-paddingbottom="[15,15,15,15]"
                                        data-paddingleft="[50,50,0,0]" style="z-index: 8; "><a
                                            href="{!! route('web.' . __('response.sliders.0.url')) !!}"
                                            class="site-button outline white">{!! __('response.sliders.0.url_text') !!}</a> </div>
                                </li>
                                <!-- SLIDE  -->
                                <li data-index="rs-200" data-transition="slideoverhorizontal"
                                    data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                    data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                                    data-masterspeed="1000" data-thumb="{{ asset(__('response.sliders.1.image')) }}"
                                    data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500"
                                    data-fsslotamount="7" data-saveperformance="off" data-title="" data-param1=""
                                    data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                                    data-param7="" data-param8="" data-param9="" data-param10=""
                                    data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset(__('response.sliders.1.image')) }}" alt=""
                                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                        data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper  " id="slide-200-layer-1"
                                        data-x="['center','center','center','center']"
                                        data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                        data-voffset="['0','0','0','0']" data-width="full"
                                        data-height="['400','400','400','550']" data-whitespace="nowrap"
                                        data-type="shape" data-basealign="slide" data-responsive_offset="off"
                                        data-responsive="off"
                                        data-frames='[{"from":"opacity:0;","speed":100,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":0,"to":"opacity:0;","ease":"nothing"}]'
                                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                           border-width:0px;background:linear-gradient(to top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.4) 100%);cursor:default;">
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper  " id="slide-200-layer-2"
                                        data-x="['center','center','center','center']"
                                        data-hoffset="['0','0','0','0']"
                                        data-y="['bottom','bottom','bottom','bottom']"
                                        data-voffset="['0','0','0','0']" data-width="full"
                                        data-height="['400','400','400','550']" data-whitespace="nowrap"
                                        data-type="shape" data-basealign="slide" data-responsive_offset="off"
                                        data-responsive="off"
                                        data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                           border-width:0px;background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);cursor:default;">
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption BigBold-Title   tp-resizeme" id="slide-200-layer-3"
                                        data-x="['left','left','left','left']" data-hoffset="['50','50','30','17']"
                                        data-y="['bottom','bottom','bottom','bottom']"
                                        data-voffset="['110','110','180','180']" data-fontsize="['90','70','50','30']"
                                        data-lineheight="['100','90','60','60']"
                                        data-fontweight="['800','800','800','800']"
                                        data-width="['none','none','none','400']" data-height="none"
                                        data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text"
                                        data-basealign="slide" data-responsive_offset="off"
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},
                                           {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                        data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: 6;
                                           text-transform:uppercase;
                                           color:#fff;
                                           ">
                                        {!! __('response.sliders.1.title') !!}
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption BigBold-SubTitle  " id="slide-200-layer-4"
                                        data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']"
                                        data-y="['bottom','bottom','bottom','bottom']"
                                        data-voffset="['40','1','74','78']" data-fontsize="['15','15','15','13']"
                                        data-lineheight="['24','24','24','20']" data-width="['410','410','410','280']"
                                        data-height="['60','100','100','100']" data-whitespace="normal"
                                        data-type="text" data-basealign="slide" data-responsive_offset="off"
                                        data-responsive="off"
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: 7;
                                           color:#fff;
                                           ">
                                        {!! __('response.sliders.1.paragraph') !!}
                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption BigBold-Button rev-btn " id="slide-200-layer-5"
                                        data-x="['left','left','left','left']" data-hoffset="['480','480','30','20']"
                                        data-y="['bottom','bottom','bottom','bottom']"
                                        data-voffset="['35','35','35','35']" data-width="none" data-height="none"
                                        data-whitespace="nowrap" data-type="button"
                                        data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                        data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                        data-textAlign="['left','left','left','left']" data-paddingtop="[15,15,15,15]"
                                        data-paddingright="[50,50,50,50]" data-paddingbottom="[15,15,15,15]"
                                        data-paddingleft="[50,50,0,0]" style="z-index: 8; "><a
                                            href="{!! __('response.sliders.1.url') !!}" class="site-button outline white"
                                            target="__blank"> {!! __('response.sliders.1.url_text') !!}</a> </div>
                                </li>
                                <!-- SLIDE  -->
                                <li data-index="rs-300" data-transition="slideoverhorizontal"
                                    data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                    data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                                    data-masterspeed="1000" data-thumb="{{ asset(__('response.sliders.2.image')) }}"
                                    data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500"
                                    data-fsslotamount="7" data-saveperformance="off" data-title="" data-param1=""
                                    data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                                    data-param7="" data-param8="" data-param9="" data-param10=""
                                    data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset(__('response.sliders.2.image')) }}" alt=""
                                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                        data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper  " id="slide-300-layer-1"
                                        data-x="['center','center','center','center']"
                                        data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                        data-voffset="['0','0','0','0']" data-width="full"
                                        data-height="['400','400','400','550']" data-whitespace="nowrap"
                                        data-type="shape" data-basealign="slide" data-responsive_offset="off"
                                        data-responsive="off"
                                        data-frames='[{"from":"opacity:0;","speed":100,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":0,"to":"opacity:0;","ease":"nothing"}]'
                                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                           border-width:0px;background:linear-gradient(to top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.4) 100%);cursor:default;">
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper  " id="slide-300-layer-2"
                                        data-x="['center','center','center','center']"
                                        data-hoffset="['0','0','0','0']"
                                        data-y="['bottom','bottom','bottom','bottom']"
                                        data-voffset="['0','0','0','0']" data-width="full"
                                        data-height="['400','400','400','550']" data-whitespace="nowrap"
                                        data-type="shape" data-basealign="slide" data-responsive_offset="off"
                                        data-responsive="off"
                                        data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                           border-width:0px;background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);cursor:default;">
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption BigBold-Title   tp-resizeme" id="slide-300-layer-3"
                                        data-x="['left','left','left','left']" data-hoffset="['50','50','30','17']"
                                        data-y="['bottom','bottom','bottom','bottom']"
                                        data-voffset="['110','110','180','180']" data-fontsize="['90','70','50','30']"
                                        data-lineheight="['100','90','60','60']"
                                        data-fontweight="['800','800','800','800']"
                                        data-width="['none','none','none','400']" data-height="none"
                                        data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text"
                                        data-basealign="slide" data-responsive_offset="off"
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},
                                           {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                        data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: 6;
                                           text-transform:uppercase;
                                           color:#fff;
                                           ">
                                        {!! __('response.sliders.2.title') !!}
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption BigBold-SubTitle  " id="slide-300-layer-4"
                                        data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']"
                                        data-y="['bottom','bottom','bottom','bottom']"
                                        data-voffset="['40','1','74','78']" data-fontsize="['15','15','15','13']"
                                        data-lineheight="['24','24','24','20']" data-width="['410','410','410','280']"
                                        data-height="['60','100','100','100']" data-whitespace="normal"
                                        data-type="text" data-basealign="slide" data-responsive_offset="off"
                                        data-responsive="off"
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: 7;
                                           color:#fff;
                                           ">
                                        {!! __('response.sliders.2.paragraph') !!}

                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption BigBold-Button rev-btn " id="slide-300-layer-5"
                                        data-x="['left','left','left','left']" data-hoffset="['480','480','30','20']"
                                        data-y="['bottom','bottom','bottom','bottom']"
                                        data-voffset="['35','35','35','35']" data-width="none" data-height="none"
                                        data-whitespace="nowrap" data-type="button"
                                        data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                        data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                        data-textAlign="['left','left','left','left']" data-paddingtop="[15,15,15,15]"
                                        data-paddingright="[50,50,50,50]" data-paddingbottom="[15,15,15,15]"
                                        data-paddingleft="[50,50,0,0]" style="z-index: 8; "><a href="{!! __('response.sliders.2.url') !!}"
                                            class="site-button outline white" target="__blank"> {!! __('response.sliders.2.url_text') !!}
                                        </a> </div>
                                </li>
                            </ul>
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-full p-t80 p-b50 bg-white">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-5 col-md-8 m-b30">
                        <div class="about-com-pic">
                            <img src="{{ asset('img/consultation.jpg') }}" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 m-b30">
                        <div class="section-head text-left">
                            <h2 class="text-uppercase">{{ __('response.about_company.title') }}</h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator style-square">
                                    <span class="separator-left site-bg-primary"></span>
                                    <span class="separator-right site-bg-primary"></span>
                                </div>
                            </div>
                            @foreach (trans()->get('response.about_company.paragraphs') as $key => $value)
                                @if ($key < 6)
                                    <p class="mb-1 mt-1">{{ $value }}
                                    </p>
                                @endif
                            @endforeach
                            <a href="{{ route('web.about_us') }}"
                                class="site-button mt-2">{{ __('response.read_more') }} <i
                                    class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-web.why-choose-us-component />
        <x-web.what-we-do-component />
        <div class="section-full bg-white p-t80 p-b50">

            <div class="container">
                <div class="section-head">
                    <h2 class="text-uppercase">{{ __('response.branding_events.title') }}</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left site-bg-primary"></span>
                            <span class="separator-right site-bg-primary"></span>
                        </div>
                    </div>
                </div>

                <div class="section-content m-b30">

                    <div class="owl-carousel blog-carousel  owl-btn-vertical-center">
                        @foreach (trans()->get('response.services.branding_events.lists') as $key => $value)
                            <div class="item">
                                <div class="ow-event-post date-style-2">
                                    <div class="ow-event-media wt-img-effect zoom-slow">
                                        <img src="{{ $value['image'] }}" alt="">
                                    </div>
                                    <div class="ow-event-info p-a20 bg-gray">
                                        <div class="ow-event-title">
                                            <h4 class="event-title"><a
                                                    href="{{ route('web.service.more', ['service' => 'branding_events', 'key' => $key]) }}"
                                                    title="Video post">{{ $value['title'] }}</a></h4>
                                        </div>
                                        <div class="ow-event-text">
                                            @if ($value['paragraphs'])
                                                @foreach ($value['paragraphs'] as $key2 => $value2)
                                                    @if ($loop->first)
                                                        @if (strlen($value2) <= 80)
                                                            <p> {!! $value2 !!}</p>
                                                        @else
                                                            <p> {!! substr($value2, 0, 80) . '...' !!}</p>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="clearfix">
                                            <div class="ow-event-readmore pull-left">
                                                <a href="{{ route('web.service.more', ['service' => 'branding_events', 'key' => $key]) }}"
                                                    class="site-button">{{ __('response.read_more') }} <i
                                                        class="fa fa-angle-double-right"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>

        </div>
        <x-web.clients-component />
    </div>
</x-web-layout>

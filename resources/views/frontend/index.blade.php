@extends('layouts.frontend')

@section('content')
    <div class="homepage-slider">
        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-01"
            data-source="gallery"
            style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-1" data-transition="fade,random-premium" data-slotamount="default,default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default,default"
                        data-easeout="default,default" data-masterspeed="300,default"
                        data-thumb="{{ asset('frontend_assets') }}/img/slider/home-01/100x50_m1-s1-1.jpg" data-rotate="0,0"
                        data-saveperformance="off" data-title="01" data-param1="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="https://img.freepik.com/premium-photo/fashion-woman-wearing-60s-retro-style-dress-sunglass-generative-ai_847288-1772.jpg"
                            alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="2" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption     rev_group" id="slide-1-layer-1"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                            data-width="['919','919','712','445']" data-height="['489','489','459','390']"
                            data-whitespace="nowrap" data-type="group" data-responsive_offset="on"
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                            data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; min-width: 919px; max-width: 919px; max-width: 489px; max-width: 489px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption   tp-resizeme" id="slide-1-layer-2"
                                data-x="['left','left','left','left']" data-hoffset="['111','111','20','0']"
                                data-y="['top','top','top','top']" data-voffset="['127','127','117','105']"
                                data-fontsize="['50','50','40','30']" data-lineheight="['50','50','40','30']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":"+390","speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap; font-size: 50px; line-height: 50px; font-weight: 400; color: #ffffff; letter-spacing: 5px;font-family:Montserrat;">
                                <strong>BIG </strong>SUMMER
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption   tp-resizeme" id="slide-1-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','3','3']"
                                data-y="['top','top','top','top']" data-voffset="['0','0','59','59']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                data-frames='[{"delay":"+710","speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 7;">
                                <img src="{{ asset('frontend_assets') }}/img/slider/home-01/m1-s1-1-1.png" alt=""
                                    data-ww="['692px','692px','452px','321px']"
                                    data-hh="['438px','438px','286px','203px']" data-no-retina>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <a class="tp-caption rev-btn " href="shop-sidebar.html" id="slide-1-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','-1','0']"
                                data-y="['top','top','top','top']" data-voffset="['398','398','371','279']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+1500","speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(207,152,126);bs:solid;bw:0 0 0 0;"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[20,20,20,15]" data-paddingright="[45,45,45,35]"
                                data-paddingbottom="[20,20,20,15]" data-paddingleft="[45,45,45,35]"
                                style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 20px; font-weight: 700; color: #ffffff; font-family:Montserrat;background-color:rgb(40,40,40);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Shop
                                Now </a>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-2" data-transition="random-premium" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="default"
                        data-thumb="{{ asset('frontend_assets') }}/img/slider/home-01/100x50_m1-s1-2.jpg" data-rotate="0"
                        data-saveperformance="off" data-title="02" data-param1="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="https://t4.ftcdn.net/jpg/03/13/65/17/360_F_313651795_OUrd7HrFYuxo9LXuuREFvRyIPeEfVSLj.jpg"
                            alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="2" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption     rev_group" id="slide-2-layer-1"
                            data-x="['right','right','center','center']" data-hoffset="['203','203','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                            data-width="['687','687','614','438']" data-height="['367','367','305','270']"
                            data-whitespace="nowrap" data-type="group" data-responsive_offset="on"
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                            data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; min-width: 687px; max-width: 687px; max-width: 367px; max-width: 367px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                data-fontsize="['50','50','40','30']" data-lineheight="['70','70','50','40']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":"+390","speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap; font-size: 50px; line-height: 70px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">
                                New Summer </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['51','51','51','46']"
                                data-fontsize="['165','165','120','100']" data-lineheight="['220','220','150','120']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":"+790","speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: nowrap; font-size: 165px; line-height: 220px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">
                                Off 30% </div>

                            <!-- LAYER NR. 8 -->
                            <a class="tp-caption rev-btn " href="shop-sidebar.html" id="slide-2-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['299','299','235','202']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+1510","speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(40,40,40);bs:solid;bw:0 0 0 0;"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[15,15,15,12]" data-paddingright="[45,45,45,35]"
                                data-paddingbottom="[15,15,15,12]" data-paddingleft="[45,45,45,35]"
                                style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 20px; font-weight: 400; color: #282828; font-family:Montserrat;background-color:rgb(255,255,255);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Shop
                                now </a>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-3" data-transition="random-premium" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="default"
                        data-thumb="{{ asset('frontend_assets') }}/img/slider/home-01/100x50_m1-s1-3.jpg" data-rotate="0"
                        data-saveperformance="off" data-title="03" data-param1="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('frontend_assets') }}/img/slider/home-01/m1-s1-3.jpg" alt=""
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="2" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption     rev_group" id="slide-3-layer-1"
                            data-x="['left','left','center','center']" data-hoffset="['203','203','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['2','2','2','2']"
                            data-width="['641','641','507','420']" data-height="['268','268','253','222']"
                            data-whitespace="nowrap" data-type="group" data-responsive_offset="on"
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                            data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; min-width: 641px; max-width: 641px; max-width: 268px; max-width: 268px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption   tp-resizeme" id="slide-3-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                data-fontsize="['50','50','40','30']" data-lineheight="['50','50','50','40']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":"+390","speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap; font-size: 50px; line-height: 50px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">
                                Men Blazer </div>

                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption   tp-resizeme" id="slide-3-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['50','50','51','51']"
                                data-fontsize="['120','120','100','80']" data-lineheight="['120','120','100','80']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":"+790","speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: nowrap; font-size: 120px; line-height: 120px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">
                                New Now </div>

                            <!-- LAYER NR. 12 -->
                            <a class="tp-caption rev-btn " href="shop-sidebar.html" id="slide-3-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','2']"
                                data-y="['top','top','top','top']" data-voffset="['200','200','188','164']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+1510","speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(40,40,40);bs:solid;bw:0 0 0 0;"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[15,15,15,12]" data-paddingright="[45,45,45,35]"
                                data-paddingbottom="[15,15,15,12]" data-paddingleft="[45,45,45,35]"
                                style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 20px; font-weight: 400; color: #282828; font-family:Montserrat;background-color:rgb(255,255,255);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Shop
                                now </a>
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </div>

    <!-- Video section Start Here -->
    <div class="video-section-area pt--80 pb--40 pt-md--60 pb-md--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="text-block">
                        <figure class="mb--30 mb-md--20 max-w-60">
                            <img src="{{ asset('frontend_assets') }}/img/logo/m01-logo.png" alt="logo">
                        </figure>

                        <p class="font-2 heading-color font-size-16 mb--30 mb-md--20">Integer ut ligula quis
                            lectus fringilla elementum porttitor sed est. Fringilla efficitur ligula sed
                            lobortis. Sed tempus faucibus mi, quis fringilla mauris lacinia sed. Integer
                            vehicula egestas nunc ac facilisis. Nam bibendum non faucibus libero eu. Curabitur
                            posuere to ullamcorper</p>
                        <a href="shop-sidebar.html" class="heading-button mb-sm--30">Shop Now</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <figure class="image-box image-box-w-video-btn">
                        <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="video-popup">
                            <img src="{{ asset('frontend_assets') }}/img/banner/m01-img1.jpg" alt="banner">
                            <span class="video-btn"></span>
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- Video section End Here -->

    <!-- Trending Products area Start Here -->
    <section class="trending-products-area pt--30 pb--80 pt-md--20 pb-md--60">
        <div class="container-fluid">
            <div class="row mb--40 mb-md--30">
                <div class="col-12">
                    <h2 class="heading-secondary text-center">New & Trending</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    @include('frontend.inc.single_product')
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="{{ route('shop') }}" class="heading-button">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending Products area End Here -->

    <!-- partners area Start Here -->
    <div class="partners-area ptb--40 ptb-md--30 bg--gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="airi-element-carousel partner-carousel"
                        data-slick-options='{
                            "slidesToShow": 6,
                            "slidesToScroll": 1
                        }'
                        data-slick-responsive='[
                            {"breakpoint":1200, "settings": {"slidesToShow": 5} },
                            {"breakpoint":991, "settings": {"slidesToShow": 4} },
                            {"breakpoint":767, "settings": {"slidesToShow": 3} },
                            {"breakpoint":575, "settings": {"slidesToShow": 2} },
                            {"breakpoint":380, "settings": {"slidesToShow": 1} }
                        ]'>
                        @for ($x = 1; $x < 10; $x++)
                            <div class="item">
                                <div class="single-partner">
                                    <img src="{{ asset('frontend_assets') }}/img/partner/logo-partner1.png"
                                        alt="Partner">
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners area End Here -->
    <!-- Trending Section Start Here -->
    <section class="trending-section ptb--80 ptb-md--60">
        <div class="container">
            <div class="row align-items-center pb--80 pb-md--60">
                <div class="col-lg-4 col-md-5 mb-sm--40">
                    <div class="text-block">
                        <h2 class="heading-secondary">Trending</h2>
                        <hr class="separator mtb--25">
                        <p class="font-2 font-size-16 mb--25">Integer ut ligula quis lectus fringilla elementum
                            porttitor sed est. Duis fringilla efficitur ligula sed lobortis. Sed tempus faucibus
                            mi</p>
                        <a href="shop-sidebar.html" class="btn btn-style-1 btn-medium">Shop Now</a>
                    </div>
                </div>
                <div class="col-md-7 offset-lg-1">
                    <div class="airi-element-carousel banner-carousel nav-style-2"
                        data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "autoplaySpeed": 5000,
                                    "speed": 1000,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "dl-icon-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "dl-icon-right" }
                                }'>
                        <div class="item">
                            <div class="banner-box banner-type-4 banner-hover-1">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="{{ asset('frontend_assets') }}/img/banner/m04-c1-1.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <p class="banner-title-3 heading-color">Floral print kimono</p>
                                    </div>
                                    <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="banner-box banner-type-4 banner-hover-1">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="{{ asset('frontend_assets') }}/img/banner/m04-c2-1.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <p class="banner-title-3 heading-color">Floral print kimono</p>
                                    </div>
                                    <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center flex-row-reverse pb--80 pb-md--60">
                <div class="col-md-5 col-lg-4 offset-lg-1 mb-sm--40">
                    <div class="text-block">
                        <h2 class="heading-secondary">Must Have</h2>
                        <hr class="separator mtb--25">
                        <p class="font-2 font-size-16 mb--25">Integer ut ligula quis lectus fringilla elementum
                            porttitor sed est. Duis fringilla efficitur ligula sed lobortis. Sed tempus faucibus
                            mi</p>
                        <a href="shop-sidebar.html" class="btn btn-style-1 btn-medium">Shop Now</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="airi-element-carousel banner-carousel nav-style-2"
                        data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "autoplaySpeed": 5000,
                                    "speed": 1000,
                                    "arrows": true,

                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "dl-icon-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "dl-icon-right" }
                                }'>
                        <div class="item">
                            <div class="banner-box banner-type-4 banner-hover-1">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="{{ asset('frontend_assets') }}/img/banner/m04-c2-2.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <p class="banner-title-3 heading-color">Knot textured dress</p>
                                    </div>
                                    <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="banner-box banner-type-4 banner-hover-1">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="{{ asset('frontend_assets') }}/img/banner/m04-c2-1.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <p class="banner-title-3 heading-color">Knot textured dress</p>
                                    </div>
                                    <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-5 mb-sm--40">
                    <div class="text-block">
                        <h2 class="heading-secondary">New Collections</h2>
                        <hr class="separator mtb--25">
                        <p class="font-2 font-size-16 mb--25">Integer ut ligula quis lectus fringilla elementum
                            porttitor sed est. Duis fringilla efficitur ligula sed lobortis. Sed tempus faucibus
                            mi</p>
                        <a href="shop-sidebar.html" class="btn btn-style-1 btn-medium">Shop Now</a>
                    </div>
                </div>
                <div class="col-md-7 offset-lg-1">
                    <div class="airi-element-carousel banner-carousel nav-style-2"
                        data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "autoplaySpeed": 5000,
                                    "speed": 1000,
                                    "arrows": true,

                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "dl-icon-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "dl-icon-right" }
                                }'>
                        <div class="item">
                            <div class="banner-box banner-type-4 banner-hover-1">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="{{ asset('frontend_assets') }}/img/banner/m04-c3-1.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <p class="banner-title-3 heading-color">Flecked cotton linen cardigan
                                        </p>
                                    </div>
                                    <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="banner-box banner-type-4 banner-hover-1">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="{{ asset('frontend_assets') }}/img/banner/m04-c2-1.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <p class="banner-title-3 heading-color">Flecked cotton linen cardigan
                                        </p>
                                    </div>
                                    <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending Section End Here -->

    <!-- CTA Start Here -->
    <section class="cta-section pampas-bg pb-sm--60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 mb-sm--30">
                    <figure>
                        <img src="{{ asset('frontend_assets') }}/img/banner/m04-mockup-1.png" alt="Mockup">
                    </figure>
                </div>
                <div class="col-md-8 text-center">
                    <h3 class="heading-tertiary">Cotton cashmere-blend sweater</h3>
                    <h1 class="heading-bigger font-weight-300 mb--40 mb-md--30">SALE 30%</h1>
                    <a href="shop-sidebar.html" class="btn btn-style-1 btn-medium">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA End Here -->


    <!-- Blog area Start Here -->
    <div class="blog-area ptb--80 ptb-sm--60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="airi-element-carousel blog-carousel dot-style-1"
                        data-slick-options='{
                            "spaceBetween": 30,
                            "slidesToShow": 3,
                            "slidesToScroll": 1,
                            "dots": true,
                            "infinite": true
                        }'
                        data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 2} },
                            {"breakpoint":767, "settings": {"slidesToShow": 1} }
                        ]'>
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="item">
                                <article class="blog">
                                    <div class="blog-media">
                                        <div class="image">
                                            <a href="single-post.html">
                                                <img src="{{ asset('frontend_assets') }}/img/blog/image-545x363.jpg"
                                                    alt="Blog Thumb">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-info">
                                        <div class="blog-entry-meta">
                                            <span class="blog-category">
                                                <a href="blog.html">Trends</a>
                                            </span>
                                        </div>
                                        <h3 class="blog-title">
                                            <a href="single-post.html">{{ $i }} to Sunday</a>
                                        </h3>
                                        <div class="blog-footer-meta">
                                            <a href="blog.html" class="posted-on">September 16, 2018</a>
                                            <span class="meta-separator">-</span>
                                            <a href="blog.html" class="posted-by">By John Snow</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog area End Here -->
    <!-- Newsletter area Start Here -->
    <section class="newsletter-area bg--gray pt--30 pt-md--25 pb--40 pb-md--30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="newsletter-box text-center">
                        <h2 class="heading-secondary mb--20">Join Our Newsletter</h2>
                        <p class="heading-color font-size-16 font-bold lts-2 mb--30">GET 15% OFF YOUR FIRST
                            ORDER</p>
                        <form action="{{ route('newsletter') }}" class="newsletter-form" method="post">
                            @csrf
                            <input type="email" name="newsletter_email" id="newsletter_email"
                                placeholder="Enter your email address.." required="required"
                                class="newsletter-form__input">
                            <button type="submit" class="newsletter-form__submit">Subscribe</button>
                        </form>
                        @if (session('newsletter_success'))
                            <div class="alert alert-success">
                                {{ session('newsletter_success') }}
                            </div>
                        @endif
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter area End Here -->
@endsection

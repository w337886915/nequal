@extends('frontend.customize.layouts.app')
@section('page_title')
    <div class="section-wrapper">
        <section id="section1">
            <div class="hypers-loop-warpper">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 124.51 53.99" id="hypers_loop_svg">
                    <defs>
                        <style>.cls-1 {
                                fill: none;
                                stroke-linecap: round;
                                stroke-miterlimit: 10;
                                stroke-width: 4px;
                                stroke: url(#New_Gradient_Swatch_7)
                            }

                            #hypers_loop_svg {
                                width: 152px
                            }

                            #loop_svg path {
                                animation: dash 20s infinite linear;
                                stroke-dasharray: 32, 10
                            }

                            @keyframes dash {
                                to {
                                    stroke-dashoffset: 800
                                }
                            }</style>
                        <linearGradient id="New_Gradient_Swatch_7" y1="26.99" x2="124.51" y2="26.99"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#51e8ff"/>
                            <stop offset="1" stop-color="#1361aa"/>
                        </linearGradient>
                    </defs>
                    <g id="loop" data-name="图层 2">
                        <g id="loop_svg" data-name="Layer 2">
                            <path class="cls-1"
                                  d="M62.2 27 44.7 44.7c-9.8 9.8-25.6 9.8-35.4 0s-9.8-25.6 0-35.4 25.6-9.8 35.4 0l0 0 35.2 35.4c9.8 9.8 25.6 9.8 35.4 0s9.8-25.6 0-35.4-25.6-9.8-35.4 0L62.2 27z"/>
                        </g>
                    </g>
                </svg>
                <h2 id="loop_title"><img src="{{asset('vendor/nequal/picture/h_cover_title_ol.svg')}}"></h2></div>
            <div class="downward"><p>如何通过智能数据，创造无限可能</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 34 19">
                    <defs>
                        <style>.cls-1 {
                                fill: none;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-width: 4px;
                                stroke: url(#New_Gradient_Swatch_7)
                            }</style>
                        <linearGradient id="New_Gradient_Swatch_7" x1="17" y1="19" x2="17"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#51e8ff"/>
                            <stop offset="1" stop-color="#1361aa"/>
                        </linearGradient>
                    </defs>
                    <title>arrow_h</title>
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Layer_2-2" data-name="Layer 2">
                            <polyline class="cls-1" points="32 2 17 17 2 2"/>
                        </g>
                    </g>
                </svg>
                <div class="hypers-notification"><a href="./products"><img width="500" title="HYPERS 全新产品体系上线，解决企业增长难题"
                                                                           src="{{asset('vendor/nequal/picture/hmc_notification_home.svg')}}"></a>
                </div>
            </div>
        </section>
        <section id="section2">
            <div class="hypers-solution-wrap"><h4 class="hypers-solution-introduce">点击了解智能数据 如何为各行各业创造解决方案</h4>
                <div class="hypers-catogry-wrap">
                    <div class="hypers-catogry-prev hypers-solution-control" data-control="prev"><img class="hidden-xs"
                                                                                                      src="{{asset('vendor/nequal/picture/s_arrow_left.svg')}}"
                                                                                                      alt="prev"
                                                                                                      width="19"> <img
                                class="visible-xs" style="margin-left:20px" src="{{asset('vendor/nequal/picture/m_tiny_arrow_l.svg')}}"
                                alt="prev" width="13"></div>
                    <div class="hypers-catogry-next hypers-solution-control" data-control="next"><img class="hidden-xs"
                                                                                                      src="{{asset('vendor/nequal/picture/s_arrow_right.svg')}}"
                                                                                                      alt="prev"
                                                                                                      width="19"> <img
                                class="visible-xs" style="margin-right:20px" src="{{asset('vendor/nequal/picture/m_tiny_arrow_r.svg')}}"
                                alt="prev" width="13"></div>
                    <div class="hypers-fixed-title">
                        <ul class="hypers-fixed-title-ul">
                            <li class="hypers-fixed-title-li" data-type="retail">
                                <div class="hypers-fixed-title-name">新零售</div>
                                <div class="hypers-bottom-bar retail"></div>
                            </li>
                            <li class="hypers-fixed-title-li" data-type="finance">
                                <div class="hypers-fixed-title-name">金融</div>
                                <div class="hypers-bottom-bar finance"></div>
                            </li>
                            <li class="hypers-fixed-title-li" data-type="auto">
                                <div class="hypers-fixed-title-name">汽车</div>
                                <div class="hypers-bottom-bar auto"></div>
                            </li>
                            <li class="hypers-fixed-title-li" data-type="media">
                                <div class="hypers-fixed-title-name">媒体</div>
                                <div class="hypers-bottom-bar media"></div>
                            </li>
                            <li class="hypers-fixed-title-li" data-type="game">
                                <div class="hypers-fixed-title-name">游戏</div>
                                <div class="hypers-bottom-bar game"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="hypers-catogry-caption-wrap">
                        <div class="hypers-introduce-title" data-for="retail"><span
                                    class="hypers-caption-zh-cn">新零售</span> <span class="hypers-caption-en-us">RETAIL</span>
                        </div>
                        <div class="hypers-introduce-title" data-for="finance"><span
                                    class="hypers-caption-zh-cn">金融</span> <span class="hypers-caption-en-us">FINANCE</span>
                        </div>
                        <div class="hypers-introduce-title" data-for="auto"><span class="hypers-caption-zh-cn">汽车</span>
                            <span class="hypers-caption-en-us">AUTOMOTIVE</span></div>
                        <div class="hypers-introduce-title" data-for="media"><span
                                    class="hypers-caption-zh-cn">媒体</span> <span class="hypers-caption-en-us">MEDIA</span>
                        </div>
                        <div class="hypers-introduce-title" data-for="game"><span class="hypers-caption-zh-cn">游戏</span>
                            <span class="hypers-caption-en-us">GAME</span></div>
                    </div>
                    <div class="hypers-catogry-introduce">
                        <div class="hypers-introduce-content" data-for="media"><p> 广告不缺屏幕，也不缺冲击力，缺乏的是品牌与受众之间的高价值连接点。<br><br>
                                HYPERS 媒体行业解决方案助力品牌打破数据孤岛，实现全触点营销数据的监测与采集，描绘受众全视角。用强大的数据支撑消费者画像，让投其所好变得易如反掌。<br><br> <a
                                        class="hypers-solution-more" href="./solutions_media"><img
                                            src="{{asset('vendor/nequal/picture/hypers_logo_more.svg')}}" alt=""> 了解更多</a></p></div>
                        <div class="hypers-introduce-content" data-for="auto"><p> 用大数据重塑汽车与人的关系。<br><br> HYPERS
                                汽车行业解决方案从汽车企业价值链与汽车客户生命周期入手， 帮助搭建属于汽车企业的第一方数据平台，寻找分析业务痛点，以不同的场景出发，
                                挖掘全业务流程数据的应用价值，驱动汽车企业的数字化转型与业务变革。<br><br> <a class="hypers-solution-more"
                                                                             href="./solutions_auto"><img
                                            src="{{asset('vendor/nequal/picture/hypers_logo_more.svg')}}" alt=""> 了解更多</a></p></div>
                        <div class="hypers-introduce-content" data-for="finance"><p> 赢在镀金的大数据时代。<br><br> HYPERS
                                金融行业解决方案为证券行业、银行业与资本市场赋予高效稳定的海量数据处理能力， 帮助提升运营效率，辅助监管机构检查，降低风险的发生，并通过金融行业用户全景画像，
                                实现多场景全链式的主动营销，促进新的创收机遇。<br><br> <a class="hypers-solution-more"
                                                                   href="./solutions_finance"><img
                                            src="{{asset('vendor/nequal/picture/hypers_logo_more.svg')}}" alt=""> 了解更多</a></p></div>
                        <div class="hypers-introduce-content" data-for="retail"><p> 无论是线上还是线下，消费者购买的更是一种体验。<br><br>
                                对消费者的价值洞察是零售业成功的起点 ，HYPERS 零售行业解决方案帮助零售商实现以消费者为核心的全渠道零售，传递无缝的个性化体验，
                                并借助零售物联网的力量，链接生产、渠道、商品、店铺与终端用户，让运营更加游刃有余。<br><br> <a class="hypers-solution-more"
                                                                                     href="./solutions_retail"><img
                                            src="{{asset('vendor/nequal/picture/hypers_logo_more.svg')}}" alt=""> 了解更多</a></p></div>
                        <div class="hypers-introduce-content" data-for="game"><p> Be a game changer in the game
                                industry.<br><br> 从了解屏幕前的玩家开始，HYPERS 游戏行业解决方案帮助游戏公司充分利用大数据的价值， 改善游戏设计， 用个性化运营提升用户体验，
                                留住更多玩家，并从中获益。通过数据分析指导获客营销策略与推广渠道的选择，为获取新用户这一业界难题找到突破口。<br><br> <a
                                        class="hypers-solution-more" href="./solutions_game"><img
                                            src="{{asset('vendor/nequal/picture/hypers_logo_more.svg')}}" alt=""> 了解更多</a></p></div>
                    </div>
                    <div class="hypers-rotary-table hidden-xs hidden-ios">
                        <div class="hypers-rotary-wrap">
                            <div class="hypers-rotary-bg">
                                <div class="hypers-rotary-bg-wrap" data-for="media"><img class="hypers-rotary-bg-image"
                                                                                         src="{{asset('vendor/nequal/picture/s_media_screens.svg')}}"
                                                                                         width="1200"> <img
                                            class="hypers-rotary-bg-image hyper-media-widget widget1"
                                            src="{{asset('vendor/nequal/picture/s_media_screen_content.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image hyper-media-widget widget2"
                                            src="{{asset('vendor/nequal/picture/s_media_screen_app.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image hyper-media-widget widget3"
                                            src="{{asset('vendor/nequal/picture/s_media_screen_search.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image hyper-media-widget widget4"
                                            src="{{asset('vendor/nequal/picture/s_media_screen_cloud.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image hyper-media-widget widget5"
                                            src="{{asset('vendor/nequal/picture/s_media_screen_data.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image hyper-media-widget widget6 hypers-media-content"
                                            src="{{asset('vendor/nequal/picture/s_media_screen_content.svg')}}" width="1200"></div>
                                <div class="hypers-rotary-bg-wrap" data-for="auto"><img class="hypers-rotary-bg-image"
                                                                                        src="{{asset('vendor/nequal/picture/s_auto_road.svg')}}"
                                                                                        width="1200"> <img
                                            class="hypers-rotary-bg-image road-line-run"
                                            src="{{asset('vendor/nequal/picture/s_auto_road_line.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image car-run" src="{{asset('vendor/nequal/picture/s_auto_car_i.svg')}}"
                                            width="1200"> <img class="hypers-rotary-bg-image car-run delay-i-1"
                                                               src="{{asset('vendor/nequal/picture/s_auto_car_i.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image car-run delay-i-2"
                                            src="{{asset('vendor/nequal/picture/s_auto_car_i.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image car-run fast delay-o-1"
                                            src="{{asset('vendor/nequal/picture/s_auto_car_o.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image car-run fast delay-o-2"
                                            src="{{asset('vendor/nequal/picture/s_auto_car_o.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image light-run" src="{{asset('vendor/nequal/picture/s_auto_light.svg')}}"
                                            width="1200"></div>
                                <div class="hypers-rotary-bg-wrap" data-for="finance"><img
                                            class="hypers-rotary-bg-image" src="{{asset('vendor/nequal/picture/s_finance_track.svg')}}"
                                            width="1200"> <img class="hypers-rotary-bg-image cny-first money-run"
                                                               src="{{asset('vendor/nequal/picture/s_finance_cny.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image cny-second z20 money-run delay-2 hidden-xs"
                                            src="{{asset('vendor/nequal/picture/s_finance_cny.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image usd money-run run-s-1"
                                            src="{{asset('vendor/nequal/picture/s_finance_usd.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image coin-run z5 run-s-1 delay-1"
                                            src="{{asset('vendor/nequal/picture/s_finance_coin_1.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image coin-run z10 run-s-1 delay-3 hidden-xs"
                                            src="{{asset('vendor/nequal/picture/s_finance_coin_2.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image coin-run z10"
                                            src="{{asset('vendor/nequal/picture/s_finance_coin_3.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image coin-run z5 run-s-2 delay-1 hidden-xs"
                                            src="{{asset('vendor/nequal/picture/s_finance_coin_1.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image coin-run z10 run-s-1 delay-2"
                                            src="{{asset('vendor/nequal/picture/s_finance_coin_4.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image coin-run z5 delay-1 hidden-xs"
                                            src="{{asset('vendor/nequal/picture/s_finance_coin_5.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image card-run z1"
                                            src="{{asset('vendor/nequal/picture/s_finance_cc1.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image z1" src="{{asset('vendor/nequal/picture/s_finance_bar1.svg')}}"
                                            width="1200"> <img class="hypers-rotary-bg-image cred-card-run z5"
                                                               src="{{asset('vendor/nequal/picture/s_finance_cc2.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image z10" src="{{asset('vendor/nequal/picture/s_finance_bar2.svg')}}"
                                            width="1200"> <img class="hypers-rotary-bg-image wallet-run z15 hidden-xs"
                                                               src="{{asset('vendor/nequal/picture/s_finance_wallet.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image z20" src="{{asset('vendor/nequal/picture/s_finance_bar3.svg')}}"
                                            width="1200"> <img class="hypers-rotary-bg-image z99"
                                                               src="{{asset('vendor/nequal/picture/s_finance_vault.svg')}}" width="1200"></div>
                                <div class="hypers-rotary-bg-wrap" data-for="retail"><img class="hypers-rotary-bg-image"
                                                                                          src="{{asset('vendor/nequal/picture/s_retail_system.svg')}}"
                                                                                          width="1200"> <img
                                            class="hypers-rotary-bg-image pack-low" src="{{asset('vendor/nequal/picture/s_retail_pack_l.svg')}}"
                                            width="1200"> <img class="hypers-rotary-bg-image pack-high"
                                                               src="{{asset('vendor/nequal/picture/s_retail_pack_h.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image forklift-run"
                                            src="{{asset('vendor/nequal/picture/s_retail_forklift.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image pack-low-run"
                                            src="{{asset('vendor/nequal/picture/s_retail_pack_l.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image pack-high-run"
                                            src="{{asset('vendor/nequal/picture/s_retail_pack_h.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image drone-run" src="{{asset('vendor/nequal/picture/s_retail_drone.svg')}}"
                                            width="1200"> <img class="hypers-rotary-bg-image drone-run delay-1"
                                                               src="{{asset('vendor/nequal/picture/s_retail_drone.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image drone-run delay-3"
                                            src="{{asset('vendor/nequal/picture/s_retail_drone.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image scooter-run delay-2"
                                            src="{{asset('vendor/nequal/picture/s_retail_scooter.svg')}}" width="1200"> <img
                                            class="hypers-rotary-bg-image ware-house"
                                            src="{{asset('vendor/nequal/picture/s_retail_warehouse.svg')}}" width="1200"></div>
                                <div class="hypers-rotary-bg-wrap" data-for="game"><img class="hypers-rotary-bg-image"
                                                                                        src="{{asset('vendor/nequal/picture/s_game_line.svg')}}"
                                                                                        width="1200">
                                    <div class="hypers-rotary-pac-man-content"><img
                                                class="hypers-rotary-bg-image bean-animation bean1"
                                                src="{{asset('vendor/nequal/picture/s_game_bean.svg')}}" width="1200"> <img
                                                class="hypers-rotary-bg-image bean-animation bean2"
                                                src="{{asset('vendor/nequal/picture/s_game_bean.svg')}}" width="1200"> <img
                                                class="hypers-rotary-bg-image bean-animation bean3"
                                                src="{{asset('vendor/nequal/picture/s_game_bean.svg')}}" width="1200"> <img
                                                class="hypers-rotary-bg-image bean-animation bean4"
                                                src="{{asset('vendor/nequal/picture/s_game_bean.svg')}}" width="1200"> <img
                                                class="hypers-rotary-bg-image bean-animation bean5"
                                                src="{{asset('vendor/nequal/picture/s_game_bean.svg')}}" width="1200"> <img
                                                class="hypers-rotary-bg-image bean-animation bean6"
                                                src="{{asset('vendor/nequal/picture/s_game_bean.svg')}}" width="1200"> <img
                                                class="hypers-rotary-bg-image bean-animation bean7"
                                                src="{{asset('vendor/nequal/picture/s_game_bean.svg')}}" width="1200"> <img
                                                class="hypers-rotary-bg-image bean-animation bean8"
                                                src="{{asset('vendor/nequal/picture/s_game_bean.svg')}}" width="1200"> <img
                                                class="hypers-rotary-bg-image bean-animation bean9"
                                                src="{{asset('vendor/nequal/picture/s_game_bean.svg')}}" width="1200"> <img
                                                class="hypers-rotary-bg-image bean-animation bean10"
                                                src="{{asset('vendor/nequal/picture/s_game_bean.svg')}}" width="1200"> <img
                                                class="hypers-rotary-bg-image bean-animation bean11"
                                                src="{{asset('vendor/nequal/picture/s_game_bean.svg')}}" width="1200"> <img
                                                class="hypers-rotary-bg-image bean-animation bean12"
                                                src="{{asset('vendor/nequal/picture/s_game_bean.svg')}}" width="1200"> <img
                                                class="hypers-rotary-bg-image bean-animation bean13"
                                                src="{{asset('vendor/nequal/picture/s_game_bean.svg')}}" width="1200"> <img
                                                class="hypers-rotary-bg-image bean-animation bean14"
                                                src="{{asset('vendor/nequal/picture/s_game_bean_special.svg')}}" width="1200"> <img
                                                class="hypers-rotary-bg-image bean-animation bean15"
                                                src="{{asset('vendor/nequal/picture/s_game_bean.svg')}}" width="1200"> <img
                                                class="hypers-rotary-bg-image bean-animation bean16"
                                                src="{{asset('vendor/nequal/picture/s_game_bean.svg')}}" width="1200">
                                        <div class="hypers-rotary-bg-image hypers-blue-host-wrap host1 host-animation">
                                            <div class="hypers-blue-host"></div>
                                        </div>
                                        <div class="hypers-rotary-bg-image hypers-blue-host-wrap host2 host-animation">
                                            <div class="hypers-blue-host"></div>
                                        </div>
                                        <div class="hypers-rotary-bg-image hypers-blue-host-wrap host3 host-animation">
                                            <div class="hypers-blue-host"></div>
                                        </div>
                                    </div>
                                    <div class="hypers-rotary-bg-image hypers-pac-man-wrap">
                                        <div class="hypers-pac-man"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hypers-rotary-table visible-xs visible-ios">
                        <div class="hypers-rotary-wrap">
                            <div class="hypers-rotary-bg">
                                <div class="hypers-rotary-bg-wrap" data-for="media"><img class="hypers-rotary-bg-image"
                                                                                         src="{{asset('vendor/nequal/picture/s_mobile_media.svg')}}"
                                                                                         width="1200"></div>
                                <div class="hypers-rotary-bg-wrap" data-for="auto"><img class="hypers-rotary-bg-image"
                                                                                        src="{{asset('vendor/nequal/picture/s_mobile_auto.svg')}}"
                                                                                        width="1200"></div>
                                <div class="hypers-rotary-bg-wrap" data-for="finance"><img
                                            class="hypers-rotary-bg-image" src="{{asset('vendor/nequal/picture/s_mobile_finance.svg')}}"
                                            width="1200"></div>
                                <div class="hypers-rotary-bg-wrap" data-for="retail"><img class="hypers-rotary-bg-image"
                                                                                          src="{{asset('vendor/nequal/picture/s_mobile_retail.svg')}}"
                                                                                          width="1200"></div>
                                <div class="hypers-rotary-bg-wrap" data-for="game"><img class="hypers-rotary-bg-image"
                                                                                        src="{{asset('vendor/nequal/picture/s_mobile_game.svg')}}"
                                                                                        width="1200"></div>
                            </div>
                        </div>
                    </div>
                    <div class="hypers-shine-line hidden-xs">
                        <div class="hypers-downside" data-for="media"><?xml version="1.0" encoding="utf-8"?>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 709.1 149.5"
                                 style="enable-background:new 0 0 709.1 149.5" xml:space="preserve" width="720"><style type="text/css">.hypers-downside-outline.media {
                                        stroke: url(#SVGID_1_media)
                                    }

                                    .hypers-downside-inline.media {
                                        stroke: url(#SVGID_2_media);
                                        stroke-dasharray: 4 8 8 20 4 12
                                    }

                                    .hypers-downside-center.media {
                                        stroke: url(#SVGID_3_media);
                                        stroke-dasharray: 4 8 8 16 4 11
                                    }</style>
                                <g id="Layer_2"><g id="Layer_2-2"><linearGradient id="SVGID_1_media" gradientUnits="userSpaceOnUse" x1="0.5" y1="77.2498" x2="708.58" y2="77.2498" gradientTransform="matrix(1 0 0 -1 0 152)"><stop offset="0" style="stop-color:#14f8e1"/><stop
                                                    offset="1" style="stop-color:#05d799"/></linearGradient><linearGradient
                                                id="SVGID_2_media" gradientUnits="userSpaceOnUse" x1="108.5" y1="112.2497"
                                                x2="600.56" y2="112.2497" gradientTransform="matrix(1 0 0 -1 0 152)"><stop offset="0" style="stop-color:#14f8e1"/>
                                            <stop offset="1" style="stop-color:#05d799"/></linearGradient><linearGradient
                                                id="SVGID_3_media" gradientUnits="userSpaceOnUse" x1="54.5" y1="94.7497"
                                                x2="654.57" y2="94.7497" gradientTransform="matrix(1 0 0 -1 0 152)"><stop offset="0" style="stop-color:#14f8e1"/>
                                            <stop offset="1" style="stop-color:#05d799"/></linearGradient><path
                                                class="hypers-downside-outline media"
                                                d="M1 1c93.3 94.5 220.7 147.7 353.5 147.5 132.8.2 260.2-53 353.5-147.5"/><path
                                                class="hypers-downside-inline media"
                                                d="M109 1c71.9 50.6 157.7 77.6 245.5 77.5C442.4 78.6 528.2 51.6 600.1 1"/><path
                                                class="hypers-downside-center media"
                                                d="M55 1c82.8 72.7 189.3 112.7 299.5 112.5C464.7 113.7 571.2 73.7 654.1 1"/></g></g></svg>
                        </div>
                        <div class="hypers-downside" data-for="auto"><?xml version="1.0" encoding="utf-8"?>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 709.1 149.5"
                                 style="enable-background:new 0 0 709.1 149.5" xml:space="preserve" width="720"><style type="text/css">.hypers-downside-outline.auto {
                                        stroke: url(#SVGID_1_auto)
                                    }

                                    .hypers-downside-inline.auto {
                                        stroke: url(#SVGID_2_auto);
                                        stroke-dasharray: 4 8 8 20 4 12
                                    }

                                    .hypers-downside-center.auto {
                                        stroke: url(#SVGID_3_auto);
                                        stroke-dasharray: 4 8 8 16 4 11
                                    }</style>
                                <g id="Layer_2"><g id="Layer_2-2"><linearGradient id="SVGID_1_auto" gradientUnits="userSpaceOnUse" x1="0.5" y1="77.2498" x2="708.58" y2="77.2498" gradientTransform="matrix(1 0 0 -1 0 152)"><stop offset="0" style="stop-color:#d3fbaa"/><stop
                                                    offset="1" style="stop-color:#c3e672"/></linearGradient><linearGradient
                                                id="SVGID_2_auto" gradientUnits="userSpaceOnUse" x1="108.5" y1="112.2497"
                                                x2="600.56" y2="112.2497" gradientTransform="matrix(1 0 0 -1 0 152)"><stop offset="0" style="stop-color:#d3fbaa"/>
                                            <stop offset="1" style="stop-color:#c3e672"/></linearGradient><linearGradient
                                                id="SVGID_3_auto" gradientUnits="userSpaceOnUse" x1="54.5" y1="94.7497"
                                                x2="654.57" y2="94.7497" gradientTransform="matrix(1 0 0 -1 0 152)"><stop offset="0" style="stop-color:#d3fbaa"/>
                                            <stop offset="1" style="stop-color:#c3e672"/></linearGradient><path
                                                class="hypers-downside-outline auto"
                                                d="M1 1c93.3 94.5 220.7 147.7 353.5 147.5 132.8.2 260.2-53 353.5-147.5"/><path
                                                class="hypers-downside-inline auto"
                                                d="M109 1c71.9 50.6 157.7 77.6 245.5 77.5C442.4 78.6 528.2 51.6 600.1 1"/><path
                                                class="hypers-downside-center auto"
                                                d="M55 1c82.8 72.7 189.3 112.7 299.5 112.5C464.7 113.7 571.2 73.7 654.1 1"/></g></g></svg>
                        </div>
                        <div class="hypers-downside" data-for="finance"><?xml version="1.0" encoding="utf-8"?>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 709.1 149.5"
                                 style="enable-background:new 0 0 709.1 149.5" xml:space="preserve" width="720"><style type="text/css">.hypers-downside-outline.finance {
                                        stroke: url(#SVGID_1_finance)
                                    }

                                    .hypers-downside-inline.finance {
                                        stroke: url(#SVGID_2_finance);
                                        stroke-dasharray: 4 8 8 20 4 12
                                    }

                                    .hypers-downside-center.finance {
                                        stroke: url(#SVGID_3_finance);
                                        stroke-dasharray: 4 8 8 16 4 11
                                    }</style>
                                <g id="Layer_2"><g id="Layer_2-2"><linearGradient id="SVGID_1_finance" gradientUnits="userSpaceOnUse" x1="0.5" y1="77.2498" x2="708.58" y2="77.2498" gradientTransform="matrix(1 0 0 -1 0 152)"><stop offset="0" style="stop-color:#c3e672"/><stop
                                                    offset="1" style="stop-color:#e2c34c"/></linearGradient><linearGradient
                                                id="SVGID_2_finance" gradientUnits="userSpaceOnUse" x1="108.5" y1="112.2497"
                                                x2="600.56" y2="112.2497" gradientTransform="matrix(1 0 0 -1 0 152)"><stop offset="0" style="stop-color:#c3e672"/>
                                            <stop offset="1" style="stop-color:#e2c34c"/></linearGradient><linearGradient
                                                id="SVGID_3_finance" gradientUnits="userSpaceOnUse" x1="54.5" y1="94.7497"
                                                x2="654.57" y2="94.7497" gradientTransform="matrix(1 0 0 -1 0 152)"><stop offset="0" style="stop-color:#c3e672"/>
                                            <stop offset="1" style="stop-color:#e2c34c"/></linearGradient><path
                                                class="hypers-downside-outline finance"
                                                d="M1 1c93.3 94.5 220.7 147.7 353.5 147.5 132.8.2 260.2-53 353.5-147.5"/><path
                                                class="hypers-downside-inline finance"
                                                d="M109 1c71.9 50.6 157.7 77.6 245.5 77.5C442.4 78.6 528.2 51.6 600.1 1"/><path
                                                class="hypers-downside-center finance"
                                                d="M55 1c82.8 72.7 189.3 112.7 299.5 112.5C464.7 113.7 571.2 73.7 654.1 1"/></g></g></svg>
                        </div>
                        <div class="hypers-downside" data-for="retail"><?xml version="1.0" encoding="utf-8"?>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 709.1 149.5"
                                 style="enable-background:new 0 0 709.1 149.5" xml:space="preserve" width="720"><style type="text/css">.hypers-downside-outline.retail {
                                        stroke: url(#SVGID_1_retail)
                                    }

                                    .hypers-downside-inline.retail {
                                        stroke: url(#SVGID_2_retail);
                                        stroke-dasharray: 4 8 8 20 4 12
                                    }

                                    .hypers-downside-center.retail {
                                        stroke: url(#SVGID_3_retail);
                                        stroke-dasharray: 4 8 8 16 4 11
                                    }</style>
                                <g id="Layer_2"><g id="Layer_2-2"><linearGradient id="SVGID_1_retail" gradientUnits="userSpaceOnUse" x1="0.5" y1="77.2498" x2="708.58" y2="77.2498" gradientTransform="matrix(1 0 0 -1 0 152)"><stop offset="0" style="stop-color:#e2c34c"/><stop
                                                    offset="1" style="stop-color:#d75333"/></linearGradient><linearGradient
                                                id="SVGID_2_retail" gradientUnits="userSpaceOnUse" x1="108.5" y1="112.2497"
                                                x2="600.56" y2="112.2497" gradientTransform="matrix(1 0 0 -1 0 152)"><stop offset="0" style="stop-color:#e2c34c"/>
                                            <stop offset="1" style="stop-color:#d75333"/></linearGradient><linearGradient
                                                id="SVGID_3_retail" gradientUnits="userSpaceOnUse" x1="54.5" y1="94.7497"
                                                x2="654.57" y2="94.7497" gradientTransform="matrix(1 0 0 -1 0 152)"><stop offset="0" style="stop-color:#e2c34c"/>
                                            <stop offset="1" style="stop-color:#d75333"/></linearGradient><path
                                                class="hypers-downside-outline retail"
                                                d="M1 1c93.3 94.5 220.7 147.7 353.5 147.5 132.8.2 260.2-53 353.5-147.5"/><path
                                                class="hypers-downside-inline retail"
                                                d="M109 1c71.9 50.6 157.7 77.6 245.5 77.5C442.4 78.6 528.2 51.6 600.1 1"/><path
                                                class="hypers-downside-center retail"
                                                d="M55 1c82.8 72.7 189.3 112.7 299.5 112.5C464.7 113.7 571.2 73.7 654.1 1"/></g></g></svg>
                        </div>
                        <div class="hypers-downside" data-for="game"><?xml version="1.0" encoding="utf-8"?>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 709.1 149.5"
                                 style="enable-background:new 0 0 709.1 149.5" xml:space="preserve" width="720"><style type="text/css">.hypers-downside-outline.game {
                                        stroke: url(#SVGID_1_game)
                                    }

                                    .hypers-downside-inline.game {
                                        stroke: url(#SVGID_2_game);
                                        stroke-dasharray: 4 8 8 20 4 12
                                    }

                                    .hypers-downside-center.game {
                                        stroke: url(#SVGID_3_game);
                                        stroke-dasharray: 4 8 8 16 4 11
                                    }</style>
                                <g id="Layer_2"><g id="Layer_2-2"><linearGradient id="SVGID_1_game" gradientUnits="userSpaceOnUse" x1="0.5" y1="77.2498" x2="708.58" y2="77.2498" gradientTransform="matrix(1 0 0 -1 0 152)"><stop offset="0" style="stop-color:#d42fed"/><stop
                                                    offset="1" style="stop-color:#c514a0"/></linearGradient><linearGradient
                                                id="SVGID_2_game" gradientUnits="userSpaceOnUse" x1="108.5" y1="112.2497"
                                                x2="600.56" y2="112.2497" gradientTransform="matrix(1 0 0 -1 0 152)"><stop offset="0" style="stop-color:#d42fed"/>
                                            <stop offset="1" style="stop-color:#c514a0"/></linearGradient><linearGradient
                                                id="SVGID_3_game" gradientUnits="userSpaceOnUse" x1="54.5" y1="94.7497"
                                                x2="654.57" y2="94.7497" gradientTransform="matrix(1 0 0 -1 0 152)"><stop offset="0" style="stop-color:#d42fed"/>
                                            <stop offset="1" style="stop-color:#c514a0"/></linearGradient><path
                                                class="hypers-downside-outline game"
                                                d="M1 1c93.3 94.5 220.7 147.7 353.5 147.5 132.8.2 260.2-53 353.5-147.5"/><path
                                                class="hypers-downside-inline game"
                                                d="M109 1c71.9 50.6 157.7 77.6 245.5 77.5C442.4 78.6 528.2 51.6 600.1 1"/><path
                                                class="hypers-downside-center game"
                                                d="M55 1c82.8 72.7 189.3 112.7 299.5 112.5C464.7 113.7 571.2 73.7 654.1 1"/></g></g></svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section3">
            <div class="container">
                <div class="row section-row section-product">
                    <div class="col-md-6"><h2 class="title">产品 PRODUCTS</h2> <a class="section-product-title"
                                                                                href="./products" target="_blank">企业增长云
                            HYPERS GROWTH CLOUD</a>
                        <ul>
                            <li><a href="./products_analyticscloud" target="_blank">分析云 Hyper Analytics Cloud</a></li>
                            <li><a href="./products_audiencecloud" target="_blank">受众云 Hyper Audience Cloud</a></li>
                            <li><a href="./products_experiencecloud" target="_blank">体验云 Hyper Experience Cloud</a></li>
                            <li><a href="./products_insightcloud" target="_blank">洞察云 Hyper Insight Cloud</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6"><h2 class="title">服务 SERVICES</h2>
                        <ul>
                            <li><a href="./services" target="_blank">咨询 Consulting</a></li>
                            <li><a href="./services" target="_blank">数字 Digital</a></li>
                            <li><a href="./services" target="_blank">技术 Technology</a></li>
                            <li><a href="./services" target="_blank">运营 Operation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="section4">
            <div class="container">
                <div class="row section-row section-clients">
                    <div class="col-md-6 clients-group"><h2 class="title">服务品牌 CLIENTS</h2>
                        <div class="items-wrapper">
                            <ul>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/uniqlo.svg')}}" title="UNIQLO" alt="UNIQLO"></a>
                                </li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/c_logo_14_yum.svg')}}" title="百胜集团" alt="百胜集团"></a>
                                </li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/yol.svg')}}" title="奕欧来" alt="奕欧来"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/c_logo_15_mj.svg')}}" title="美赞臣" alt="美赞臣"></a>
                                </li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/c_logo_07_sc.svg')}}" title="渣打银行" alt="渣打银行"></a>
                                </li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/pf.svg')}}" title="浦发银行" alt="浦发银行"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/c_logo_09_citic.svg')}}" title="中信证券"
                                                     alt="中信证券"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/yhzj.svg')}}" title="银河证券" alt="银河证券"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/benzwhite.svg')}}" title="BENZWHITE"
                                                     alt="BENZWHITE"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/c_logo_05_sgm.svg')}}" title="上海通用汽车" alt="上海通用汽车"></a>
                                </li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/c_logo_06_saic.png')}}" title="上汽集团"
                                                     alt="上汽集团"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/lexus.svg')}}" title="LEXUS" alt="LEXUS"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/c_logo_16_sina.svg')}}" title="新浪网" alt="新浪网"></a>
                                </li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/c_logo_18_tvb.svg')}}" title="TVB" alt="TVB"></a>
                                </li>
                                <li class="x-hidden"><a><img src="{{asset('vendor/nequal/picture/9you.svg')}}" title="久游" alt="久游"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/c_logo_17_iqiyi.svg')}}" title="爱奇艺" alt="爱奇艺"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 clients-group partner-group"><h2 class="title">合作伙伴 PARTNERS</h2>
                        <div class="items-wrapper">
                            <ul>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/p_logo_01_cloudera.svg')}}" title="Cloudera"
                                                     alt="Cloudera"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/p_logo_02_horton.svg')}}" title="HortonWorks"
                                                     alt="HortonWorks"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/p_logo_05_dell.svg')}}" title="戴尔" alt="戴尔"></a>
                                </li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/p_logo_04_aws.svg')}}" title="AWS" alt="AWS"></a>
                                </li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/p_logo_03_microsoft.svg')}}" title="微软"
                                                     alt="微软"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/asz.svg')}}" title="埃森哲" alt="埃森哲"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/ay.svg')}}" title="安永" alt="安永"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/deloitte.svg')}}" title="deloitte" alt="deloitte"></a>
                                </li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/c_logo_01_nielsen.svg')}}" title="Nielsen"
                                                     alt="Nielsen"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/c_logo_02_iresearch.svg')}}" title="iresearch"
                                                     alt="iresearch"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/ys.svg')}}" title="阳狮" alt="阳狮"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/dentsu.png')}}" title="IPSOS" alt="IPSOS"></a></li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/china-mobile.svg')}}" title="中国移动" alt="中国移动"></a>
                                </li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/china-telecom.svg')}}" title="中国电信" alt="中国电信"></a>
                                </li>
                                <li class=""><a><img src="{{asset('vendor/nequal/picture/china-unicom.svg')}}" title="中国联通" alt="中国联通"></a>
                                </li>
                                <li class="x-hidden"><a><img src="{{asset('vendor/nequal/picture/p_logo_08.svg')}}" title="腾讯" alt="腾讯"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('vendor/nequal/js/index.js')}}"></script>
@endsection


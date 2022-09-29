@extends('layouts.main-layout')
@section('content')
    <!-- ***** PRICING TABLES ***** -->
    <!-- ***** SLIDER ***** -->
    <section class="main-container slider">
        <div class="silder-container">
            <div class="carousel header-main-slider">
                <!-- 1 Slider -->
                <div class="carousel-cell top-banner  overlay">
                    <div class="slider-content">
                        <div class="container ">
                            <img class="svg custom-element-right" src="assets/patterns/domainmanage.svg" alt="Domains">
                            <div class="col-sm-12 col-md-7 px-0">
                                <h1 data-aos="fade-up" data-aos-duration="800">Find your New Domain Name</h1>
                                <p data-aos="fade-up" data-aos-duration="1200">Enter the domain and tld you wish to use in
                                    the boxes below and click Lookup to see whether the domain is available for purchase.
                                </p>
                                <form class="domains-search" action="#" method="post">
                                    <input type="text" class="inputdomainsearch special-input" name="domain"
                                        placeholder="eg.example.com" autocapitalize="none" />
                                    <span class="ds-content">
                                        <input type="submit"
                                            class="btn btn-default-yellow-fill border-end-0 search initial-transform"
                                            value="Search">
                                        <button data--bs-toggle="tooltip" data-bs-placement="bottom" title="Transfer"
                                            type="submit" name="transfer"
                                            class="btn btn-default-fill border-start-0 initial-transform"
                                            value="{$LANG.domainstransfer}"><i class="fa-solid fa-repeat"></i></button>
                                    </span>
                                </form>
                                <div class="special-note"><span class="text">Search a domain of your choise from
                                        <b>$6.00/yr</b></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-video">
                        <div class="cover-wrapper">
                            <video class="cover-video" autoplay loop muted>
                                <source src="assets/videos/planet.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <!-- 2 Slider -->
                <div class="carousel-cell top-banner  overlay">
                    <div class="slider-content">
                        <div class="container ">
                            <img class="svg custom-element-right" src="assets/patterns/controlpanel.svg"
                                alt="Shared Hosting">
                            <div class="col-sm-12 col-md-7 px-0">
                                <h1 class="heading" data-aos="fade-up" data-aos-duration="800">Shared Hosting</h1>
                                <p class="subheading text-break" data-aos="fade-up" data-aos-duration="1200">Blazing fast &
                                    stable hosting infrastructure</p>
                                <div class="included mb-4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-5">
                                            <ul>
                                                <li><i class="fas fa-check-circle"></i> c-Panel or Plesk</li>
                                            </ul>
                                            <ul>
                                                <li><i class="fas fa-check-circle"></i> Unlimited email</li>
                                            </ul>
                                            <ul>
                                                <li><i class="fas fa-check-circle"></i> Free SSL certificate</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6 secfeat">
                                            <ul>
                                                <li><i class="fas fa-check-circle"></i> Redundant DNS</li>
                                            </ul>
                                            <ul>
                                                <li><i class="fas fa-check-circle"></i> Powerful SSD</li>
                                            </ul>
                                            <ul>
                                                <li><i class="fas fa-check-circle"></i> Support 24/7/365</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <a href="hosting" class="btn btn-default-yellow-fill me-2">Get Prices</a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-video">
                        <div class="cover-wrapper">
                            <video class="cover-video" autoplay loop muted>
                                <source src="assets/videos/server.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** PRICING TABLES ***** -->
    <section class="pricing special sec-up-slider bottompadding bg-colorstyle nopadding specialposition">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 wow animated fadeInUp fast">
                    <div class="wrapper first text-start noshadow">
                        <div class="top-content  topradius">
                            <img class="svg mb-3" src="./assets/fonts/svg/cloudfiber.svg" alt="">
                            <div class="title">Shared Hosting</div>
                            <div class="fromer ">Starting at:</div>
                            <div class="price "><sup>UGX</sup>80,000 <span class="period">/month</span></div>
                            <a href="hosting" class="btn btn-default-yellow-fill">All plans</a>
                        </div>
                        <ul class="list-info">
                            <li><i class="icon-drives"></i> <span class="c-purple">DISK</span><br> <span>250GB SSD</span>
                            </li>
                            <li><i class="icon-speed"></i> <span class="c-purple">DATA</span><br> <span>1TB Bandwidth</span>
                            </li>
                            <li><i class="icon-emailopen"></i> <span class="c-purple">EMAIL</span><br> <span>120
                                    Emails</span></li>
                            <li><i class="icon-domains"></i> <span class="c-purple">TLD</span><br> <span>30 Domains</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4 wow animated fadeInUp">



                    <div class="wrapper text-start noshadow">
                        <div class="plans badge feat bg-pink">recommended</div>
                        <div class="top-content  topradius ">
                            <img class="svg mb-3" src="./assets/fonts/svg/dedicated.svg" alt="">
                            <div class="title">Dedicated Server</div>
                            <div class="fromer ">annually get (20% discount)</div>
                            <div class="price "><sup>UGX</sup>82,000 <span class="period">/month</span></div>
                            <a href="configurator" class="btn btn-default-yellow-fill">Configure</a>
                        </div>
                        <ul class="list-info bg-purple">
                            <li><i class="icon-cpu"></i> <span class="c-pink">CPU</span><br> <span>4x 3.20Ghz 2
                                    Cores</span></li>
                            <li><i class="icon-ram"></i> <span class="c-pink">RAM</span><br> <span>16GB (up to
                                    32GB)</span></li>
                            <li><i class="icon-drivessd"></i> <span class="c-pink">DRIVES</span><br> <span>2 x 1TB SATA
                                    3.5</span></li>
                            <li><i class="icon-git"></i> <span class="c-pink">UPLINK</span><br> <span>1Gbps - 20TB</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 wow animated fadeInUp fast">
                    <div class="wrapper third text-start noshadow">
                        <div class="top-content  topradius">
                            <img class="svg mb-3" src="./assets/fonts/svg/vps.svg" alt="">
                            <div class="title">Cloud VPS</div>
                            <div class="fromer ">Starting at:</div>
                            <div class="price "><sup>UGX</sup>90,000 <span class="period">/month</span></div>
                            <a href="vps" class="btn btn-default-yellow-fill">All plans</a>
                        </div>
                        <ul class="list-info">
                            <li><i class="icon-cpu"></i> <span class="c-purple">CPU</span><br> <span>2 Cores</span></li>
                            <li><i class="icon-ram"></i> <span class="c-purple">RAM</span><br> <span>2GB Memory</span>
                            </li>
                            <li><i class="icon-drives"></i> <span class="c-purple">DISK</span><br> <span>20GB SSD
                                    Space</span></li>
                            <li><i class="icon-speed"></i> <span class="c-purple">DATA</span><br> <span>1TB
                                    Bandwidth</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** BALANCING ***** -->
    <section class="balancing sec-normal sec-bg3 motpath-w motpath noimage bg-colorstyle">
        <div class="h-services">
            <div class="container">
                <div class="randomline">
                    <div class="bigline"></div>
                    <div class="smallline"></div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-heading text-white mergecolor">Cloud Load Balancing</h2>
                        <p class="section-subheading whitecolor mergecolor">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="col-md-12">
                        <div class="wrap-service load">
                            <div class="wow animated fadeInUp fast">
                                <img class="svg mt-50 w-100 ltr-img d-block" src="assets/patterns/balancing.svg"
                                    alt="Load Balancing">
                                <img class="svg mt-50 w-100 rtl-img d-none" src="assets/patterns/balancing-rtl.svg"
                                    alt="Load Balancing">
                            </div>
                            <div class="row text-info text-center">
                                <div class="col-md-4 pb-2 pt-5"><b class="c-purple">[1] Users</b> <br>
                                    <span class="info text-muted seccolor">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt.</span>
                                </div>
                                <div class="col-md-4 pb-2 pt-5"><b class="c-purple">[2] Load Balancing</b> <br>
                                    <span class="info text-muted seccolor">Eaque ipsa quae ab illo inventore veritatis et
                                        quasi. Eaque ipsa quae omnis iste</span>
                                </div>
                                <div class="col-md-4 pb-2 pt-5"><b class="c-purple">[3] Cloud Servers</b> <br>
                                    <span class="info text-muted seccolor">Omnis iste natus error sit voluptatem
                                        accusantium doloremque laudantium.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** FEATURES ***** -->
    <section class="services sec-normal sec-bg2 ">
        <div class="container">
            <div class="service-wrap">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="section-heading  ">Why Choose 8Technologies Hosting?</h2>
                        <p class="section-subheading  ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="col-sm-12 col-md-4 wow animated fadeInUp fast">
                        <div class="service-section bg-colorstyle noshadow">
                            <div class="plans badge feat bg-pink">Premium</div>
                            <img class="svg" src="./assets/fonts/svg/helpdesk.svg" alt="">
                            <div class="title mergecolor">Support 24x7x365</div>
                            <p class="subtitle seccolor">
                                Excepteur sint occaecat cupidatat non proident voluptate
                            </p>
                            <a href="" class="btn btn-default-yellow-fill">Read more</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 wow animated fadeInUp">
                        <div class="service-section bg-colorstyle noshadow">
                            <div class="plans badge feat bg-pink">Control Panel</div>
                            <img class="svg" src="./assets/fonts/svg/window.svg" alt="">
                            <div class="title mergecolor">Free WHM &amp; cPanel</div>
                            <p class="subtitle seccolor">
                                Excepteur sint occaecat cupidatat non proident dolor
                            </p>
                            <a href="" class="btn btn-default-yellow-fill">Read more</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 wow animated fadeInUp fast">
                        <div class="service-section bg-colorstyle noshadow">
                            <img class="svg" src="./assets/fonts/svg/cloudmanaged.svg" alt="">
                            <div class="title mergecolor">Perfomance Optimized</div>
                            <p class="subtitle seccolor">
                                Excepteur sint occaecat cupidatat non proident voluptate
                            </p>
                            <a href="" class="btn btn-default-yellow-fill">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** MAP ***** -->
    <section class="services maping sec-normal sec-grad-grey-to-grey bg-colorstyle bottomhalfpadding">
        <div class="container">
            <img class="blobright svg d-none" src="./assets/img/background/blob.svg" alt="Blob Background">
            <div class="service-wrap">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="section-heading text-white mergecolor">Our Datacenters are Located in 7 Regions</h2>
                        <p class="section-subheading text-muted seccolor"><span class="golink">Lorem ipsum dolor</span>
                            sit amet, consectetur adipiscing elit sed, do eiusmod tempor <span class="c-pink">incididunt
                                lorem ipsum</span> dolor sit amet</p>
                    </div>
                    <div class="col-md-12 pt-5 scrollme position-relative">
                        <img src="assets/patterns/map.svg" class="lazyload w-10 animateme" alt="Load Balancing"
                            data-when="view" data-from="1" data-to="0" data-opacity="0">
                        <span class="datacenters montreal" data-bs-toggle="popover" data-bs-container="body"
                            data-bs-trigger="hover" data-bs-placement="top" title="Montreal"
                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
                        <span class="datacenters newyork" data-bs-toggle="popover" data-bs-container="body"
                            data-bs-trigger="hover" data-bs-placement="top" title="New York"
                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
                        <span class="datacenters portugal" data-bs-toggle="popover" data-bs-container="body"
                            data-bs-trigger="hover" data-bs-placement="top" title="Portugal"
                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
                        <span class="datacenters london" data-bs-toggle="popover" data-bs-container="body"
                            data-bs-trigger="hover" data-bs-placement="top" title="London"
                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
                        <span class="datacenters moskow" data-bs-toggle="popover" data-bs-container="body"
                            data-bs-trigger="hover" data-bs-placement="top" title="Moskow"
                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
                        <span class="datacenters hongkong" data-bs-toggle="popover" data-bs-container="body"
                            data-bs-trigger="hover" data-bs-placement="top" title="Hong Kong"
                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
                        <span class="datacenters singapure" data-bs-toggle="popover" data-bs-container="body"
                            data-bs-trigger="hover" data-bs-placement="top" title="Singapure"
                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** HELP ***** -->
    <section class="services help pt-4 pb-80 bg-colorstyle notoppadding">
        <div class="container">
            <div class="service-wrap">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="help-container bg-seccolorstyle noshadow">
                            <a href="javascript:void(Tawk_API.toggle())" class="help-item">
                                <div class="img">
                                    <img class="svg ico" src="./assets/fonts/svg/livechat.svg" height="65"
                                        alt="">
                                </div>
                                <div class="inform">
                                    <div class="title mergecolor">Live Chat</div>
                                    <div class="description seccolor">Lorem Ipsum is simply dummy text printing.</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="help-container bg-seccolorstyle noshadow">
                            <a href="contact" class="help-item">
                                <div class="img">
                                    <img class="svg ico" src="./assets/fonts/svg/emailopen.svg" height="65"
                                        alt="">
                                </div>
                                <div class="inform">
                                    <div class="title mergecolor">Send Ticket</div>
                                    <div class="description seccolor">Lorem Ipsum is simply dummy text printing.</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="help-container bg-seccolorstyle noshadow">
                            <a href="knowledgebase-list" class="help-item">
                                <div class="img">
                                    <img class="svg ico" src="./assets/fonts/svg/book.svg" height="65"
                                        alt="">
                                </div>
                                <div class="inform">
                                    <div class="title mergecolor">Knowledge base</div>
                                    <div class="description seccolor">Lorem Ipsum is simply dummy text printing.</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** UPLOADED FOOTER FROM FOOTER.HTML ***** -->
@endsection

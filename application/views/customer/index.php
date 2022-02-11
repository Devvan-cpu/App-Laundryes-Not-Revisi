<body id="page-top">
    <!-- Load page -->
    <div class="animationload">
        <div class="loader"></div>
    </div>
    <!-- NAVBAR SECTION -->
    <div class="navbar navbar-main navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><img src="<?= base_url() ?>/assets/images/logo_blue.png" alt="" /></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= base_url() ?>customer">HOME</a></li>
                    <li><a href="<?= base_url() ?>customer/pesan">PESAN</a></li>
                    <li><a href="<?= base_url() ?>customer/contact">CONTACT</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFILE <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url() ?>customer/profile">Profile Akun</a></li>
                            <li><a href="<?= base_url() ?>customer/riwayat_order">Pesan Anda</a></li>
                            <li><a href="<?= base_url() ?>auth/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- BANNER -->
    <div class="section banner">
        <div class="container pos-relative">
            <div class="caption">
                <div class="title-box">
                    <h2>WE ARE THE BEST LAUNDRY SERVICES</h2>
                </div>
                <p>This template is using adobe muse making it easier to edit, add content, and without having to use the coding in the edit.</p>
            </div>
        </div>
        <div class="imgbg" style="background:url('assets/images/homeslide.jpg') no-repeat center center;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; margin-top: -10vh;">
            <img src="<?= base_url() ?>../assets/images/homeslide.jpg" alt="">
        </div>
        <div class="work-info">
            <div class="container">
                <div class="work-info-item">
                    <div class="work-info-icon">
                        <span class="fa fa-phone"></span>
                    </div>
                    <div class="work-info-body">
                        Have a question? call us now
                        <div class="work-info-lead">+62 7144 3300</div>
                    </div>
                </div>
                <div class="work-info-item">
                    <div class="work-info-icon">
                        <span class="fa fa-clock-o"></span>
                    </div>
                    <div class="work-info-body">
                        We are open Non-Fri
                        <div class="work-info-lead">Mon - Fri 08:00 - 17:00</div>
                    </div>
                </div>
                <div class="work-info-item">
                    <div class="work-info-icon">
                        <span class="fa fa-envelope"></span>
                    </div>
                    <div class="work-info-body">
                        Need Support? Drop us an email
                        <div class="work-info-lead"><a href="mailto:Support@yoursite.com" title="">Support@yoursite.com</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT SECTION -->
    <div class="section about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="page-title">
                        <h2 class="lead">MENGAPA MEMILIH KAMI?</h2>
                        <p class="sublead">This template is designed with a unique and simple, so that it can promote and laundry business solution.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="why-item">
                        <div class="icon">
                            <div class="fa fa-flash"></div>
                        </div>
                        <div class="ket">
                            <h4>PEMBERSIH AHLI</h4>
                            <p>We give our best work for this template. We make with a love. Our template have diffrent style and layout in every each.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="why-item">
                        <div class="icon">
                            <div class="fa fa-money"></div>
                        </div>
                        <div class="ket">
                            <h4>HARGA TERJANGKAU</h4>
                            <p>Our templates price really affordable. Only $21 for one beutiful templates, you will get free update and awesome support.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="why-item">
                        <div class="icon">
                            <div class="fa fa-truck"></div>
                        </div>
                        <div class="ket">
                            <h4>PENGIRIMAN CEPAT</h4>
                            <p>Yes it's right!. If you already purchased this template you will get free access to get a new template every our update launch</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SERVICES SECTION -->
    <div class="section services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="page-title">
                        <h2 class="lead">OUR SERVICES</h2>
                        <p class="sublead">This template is designed with a unique and simple, so that it can promote and laundry business solution.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="services-item left">
                        <div class="icon">
                            <img src="<?= base_url() ?>/assets/images/home-service-img-1.jpg" alt="" class="img-circle" />
                        </div>
                        <div class="ket">
                            <h4>COIN LAUNDRY</h4>
                            <p>Yes! Our templates already for desktop, tablet and mobile layout versions.</p>
                        </div>
                    </div>
                    <div class="services-item left">
                        <div class="icon">
                            <img src="<?= base_url() ?>/assets/images/home-service-img-2.jpg" alt="" class="img-circle" />
                        </div>
                        <div class="ket">
                            <h4>REDENTIAL LAUNDRY</h4>
                            <p>We give you good documentation to make easy to understand.</p>
                        </div>
                    </div>
                    <div class="services-item left">
                        <div class="icon">
                            <img src="<?= base_url() ?>/assets/images/home-service-img-3.jpg" alt="" class="img-circle" />
                        </div>
                        <div class="ket">
                            <h4>BUSINESS LAUNDRY</h4>
                            <p>Create and publish dynamic websites for dekstop and mobile devices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="services-item right">
                        <div class="icon">
                            <img src="<?= base_url() ?>/assets/images/home-service-img-4.jpg" alt="" class="img-circle" />
                        </div>
                        <div class="ket">
                            <h4>COIN LAUNDRY</h4>
                            <p>Yes! Our templates already for desktop, tablet and mobile layout versions.</p>
                        </div>
                    </div>
                    <div class="services-item right">
                        <div class="icon">
                            <img src="<?= base_url() ?>/assets/images/home-service-img-5.jpg" alt="" class="img-circle" />
                        </div>
                        <div class="ket">
                            <h4>REDENTIAL LAUNDRY</h4>
                            <p>We give you good documentation to make easy to understand.</p>
                        </div>
                    </div>
                    <div class="services-item right">
                        <div class="icon">
                            <img src="<?= base_url() ?>/assets/images/home-service-img-6.jpg" alt="" class="img-circle" />
                        </div>
                        <div class="ket">
                            <h4>BUSINESS LAUNDRY</h4>
                            <p>Create and publish dynamic websites for dekstop and mobile devices.</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-4 col-md-offset-4">
                    <div class="services-item-image">
                        <img src="<?= base_url() ?>/assets/images/service_img_home2-u24208-fr.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER SECTION -->
    <div class="footer">
        <div class="f-desc">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-item">
                            <div class="footer-logo">
                                <img src="<?= base_url() ?>/assets/images/logo_blue.png" alt="" />
                            </div>
                            <p>This template is a micro niche for business categories, namely laundry business. there was an excess of this template is using adobe muse making it easier to edit, add content, and without having to use the coding in the edit.</p>
                            <div class="footer-sosmed">
                                <a href="#" title="">
                                    <div class="item">
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                </a>
                                <a href="#" title="">
                                    <div class="item">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                </a>
                                <a href="#" title="">
                                    <div class="item">
                                        <i class="fa fa-pinterest"></i>
                                    </div>
                                </a>
                                <a href="#" title="">
                                    <div class="item">
                                        <i class="fa fa-google"></i>
                                    </div>
                                </a>
                                <a href="#" title="">
                                    <div class="item">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </a>
                                <a href="#" title="">
                                    <div class="item">
                                        <i class="fa fa-linkedin"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-item">
                            <div class="footer-title">
                                <h4>RECENT POST</h4>
                            </div>
                            <div class="footer-blog-item">
                                <div class="footer-blog-lead">
                                    <a href="blog-1.html" title="">How to laundry your suit office - tips and trick.</a>
                                </div>
                                <div class="footer-blog-date">
                                    May 29, 2015
                                </div>
                            </div>
                            <div class="footer-blog-item">
                                <div class="footer-blog-lead">
                                    <a href="blog-1.html" title="">How to laundry your suit office - tips and trick.</a>
                                </div>
                                <div class="footer-blog-date">
                                    May 29, 2015
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-item">
                            <div class="footer-title">
                                <h4>GET IN TOUCH</h4>
                            </div>
                            <div class="footer-getintouch">
                                <div class="footer-getintouch-item">
                                    <div class="icon">
                                        <b class="fa fa-phone"></b>
                                    </div>
                                    <div class="desc">
                                        <div class="desc-1">Phone</div>
                                        <div class="desc-2">:</div>
                                        <div class="desc-3">+62 7000 4400 <br />+62 7000 4422</div>
                                    </div>
                                </div>
                                <div class="footer-getintouch-item">
                                    <div class="icon">
                                        <b class="fa fa-envelope "></b>
                                    </div>
                                    <div class="desc">
                                        <div class="desc-1">Email</div>
                                        <div class="desc-2">:</div>
                                        <div class="desc-3"><a href="mailto:support@laundryes.com" title="">support@laundryes.com</a></div>
                                    </div>
                                </div>
                                <div class="footer-getintouch-item">
                                    <div class="icon">
                                        <b class="fa fa-globe"></b>
                                    </div>
                                    <div class="desc">
                                        <div class="desc-1">Website </div>
                                        <div class="desc-2">:</div>
                                        <div class="desc-3">www.laundryes.com</div>
                                    </div>
                                </div>
                                <div class="footer-getintouch-item">
                                    <div class="icon">
                                        <b class="fa fa-map-marker"></b>
                                    </div>
                                    <div class="desc">
                                        <div class="desc-1">Address </div>
                                        <div class="desc-2">:</div>
                                        <div class="desc-3">80 sukarajin street <br />Pekanbaru 40021 Riau</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fcopy">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p class="ftex">&copy; 2022 Laundryes by Rudhi Sasmito - All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
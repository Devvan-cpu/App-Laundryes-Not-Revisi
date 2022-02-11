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
                        <li><a href="<?= base_url() ?>auth/logout"">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- BANNER -->
<div class=" section subbanner" style="background:url('../assets/images/slide_page.jpg') no-repeat center center;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; margin-top:  15vh;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="caption">
                                                <h3>PESAN</h3>
                                                <ol class="breadcrumb">
                                                    <li><a href="#">Home</a></li>
                                                    <li class="active">Pesan</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        </div>
        <!-- ABOUT SECTION -->
        <div id="services" class="section services">
            <div class="container">
                <!--  -->
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="page-title">
                            <h2 class="lead">TABEL HARGA KAMI</h2>
                            <p class="sublead">This template is designed with a unique and simple, so that it can promote and laundry business solution.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <div class="panel panel-default panel-pricing wow fadeInDown">
                            <header class="panel-heading">
                                <h3>1 Hari</h3>
                                <div class="price">
                                    <sup>$</sup>1
                                </div>
                            </header>
                            <div class="panel-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>15 lbs</td>
                                        </tr>
                                        <tr>
                                            <td>Home Delivery</td>
                                        </tr>
                                        <tr>
                                            <td>Ironing</td>
                                        </tr>
                                        <tr>
                                            <td>Perfume</td>
                                        </tr>
                                        <tr>
                                            <td>1 Hari Selesai</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <footer class="panel-footer">
                                <a href="<?= base_url() ?>customer/order1" class="btn btn-primary btn-block">ORDER NOW</a>
                            </footer>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="panel panel-default panel-pricing wow fadeInDown">
                            <header class="panel-heading">
                                <h3>2 Hari</h3>
                                <div class="price">
                                    <sup>$</sup>25
                                </div>
                            </header>
                            <div class="panel-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>30 lbs</td>
                                        </tr>
                                        <tr>
                                            <td>Home Delivery</td>
                                        </tr>
                                        <tr>
                                            <td>Ironing</td>
                                        </tr>
                                        <tr>
                                            <td>Perfume</td>
                                        </tr>
                                        <tr>
                                            <td>2 Hari Selesai</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <footer class="panel-footer">
                                <a href="<?= base_url() ?>customer/order2" class="btn btn-primary btn-block">ORDER NOW</a>
                            </footer>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="panel panel-default panel-pricing wow fadeInDown">
                            <header class="panel-heading">
                                <h3>3 Hari</h3>
                                <div class="price">
                                    <sup>$</sup>45
                                </div>
                            </header>
                            <div class="panel-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>40 lbs</td>
                                        </tr>
                                        <tr>
                                            <td>Home Delivery</td>
                                        </tr>
                                        <tr>
                                            <td>Ironing</td>
                                        </tr>
                                        <tr>
                                            <td>Perfume</td>
                                        </tr>
                                        <tr>
                                            <td>3 Hari Selesai</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <footer class="panel-footer">
                                <a href="<?= base_url() ?>customer/order3" class="btn btn-primary btn-block">ORDER NOW</a>
                            </footer>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="panel panel-default panel-pricing wow fadeInDown">
                            <header class="panel-heading">
                                <h3>Satuan</h3>
                                <div class="price">
                                    <sup>$</sup>99
                                </div>
                            </header>
                            <div class="panel-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>70 lbs</td>
                                        </tr>
                                        <tr>
                                            <td>Home Delivery</td>
                                        </tr>
                                        <tr>
                                            <td>Ironing</td>
                                        </tr>
                                        <tr>
                                            <td>Perfume</td>
                                        </tr>
                                        <tr>
                                            <td>1 Paket</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <footer class="panel-footer">
                                <a href="<?= base_url() ?>customer/order4" class="btn btn-primary btn-block">ORDER NOW</a>
                            </footer>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="page-title">
                            <h2 class="lead">HARGA LEBIH DETAIL</h2>
                            <p class="sublead">This template is designed with a unique and simple, so that it can promote and laundry business solution.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="price-detail">
                            <div class="price-detail-heading">Dry Cleaning.</div>
                            <div class="price-detail-body">
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>All Shirts</div>
                                    <div class="item-price">$ 1.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Pants, Jeans, Skirt</div>
                                    <div class="item-price">$ 2.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Sweeters</div>
                                    <div class="item-price">$ 6.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Tie, Scarf</div>
                                    <div class="item-price">$ 5.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Coat, Heavy Jacket, Dress</div>
                                    <div class="item-price">$ 10.50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="price-detail">
                            <div class="price-detail-heading">Laundry Press.</div>
                            <div class="price-detail-body">
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Sheets</div>
                                    <div class="item-price">$ 1.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Pillowcases</div>
                                    <div class="item-price">$ 2.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Duvet Covers</div>
                                    <div class="item-price">$ 6.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Bed Covers</div>
                                    <div class="item-price">$ 5.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Gorden</div>
                                    <div class="item-price">$ 10.50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="price-detail">
                            <div class="price-detail-heading">Special Items.</div>
                            <div class="price-detail-body">
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Fancy Dresses</div>
                                    <div class="item-price">$ 1.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Comforters</div>
                                    <div class="item-price">$ 2.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Handkerchief</div>
                                    <div class="item-price">$ 6.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Tuxedo Shirt</div>
                                    <div class="item-price">$ 5.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Polo (laundered short sleeve)</div>
                                    <div class="item-price">$ 10.50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="price-detail">
                            <div class="price-detail-heading">Leather Items.</div>
                            <div class="price-detail-body">
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Fancy Dresses</div>
                                    <div class="item-price">$ 21.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Comforters</div>
                                    <div class="item-price">$ 22.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Handkerchief</div>
                                    <div class="item-price">$ 16.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Tuxedo Shirt</div>
                                    <div class="item-price">$ 85.50</div>
                                </div>
                                <div class="item">
                                    <div class="item-name"><i class="fa fa-check-circle"></i>Polo (laundered short sleeve)</div>
                                    <div class="item-price">$ 6.50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <p class="more-info-price">Get discount 10% if you join our membership. <br />
                            Leather items (1 - 2 weeks finish). <br />
                            Don't worry if your items not listed here, <a href="mailto:mail@email.com" title="">Send Us Message</a> and we will take care of it.</p>
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
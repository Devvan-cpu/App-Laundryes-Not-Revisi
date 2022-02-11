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
                <li><a href="<?= base_url() ?>customer/profile">PROFILE</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- BANNER -->
<div class="section subbanner" style="background:url('../assets/images/slide_page.jpg') no-repeat center center;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; margin-top:  15vh;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="caption">
                    <h3>ORDER NOW</h3>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Order Now</li>
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
                    <h2 class="lead">ORDER 3 HARI</h2>
                    <p class="sublead">This template is designed with a unique and simple, so that it can promote and laundry business solution.</p>
                </div>
            </div>
        </div>
        <!-- CONTENT -->
        <?php
        $tgl_order = date('Y-m-d');
        $satu_hari = mktime(0, 0, 0, date("n"), date("j") + 3, date("Y"));
        $tgl_kembali = date('Y-m-d', $satu_hari);
        ?>
        <div class="container">
            <div class="page-title-alt">
                <h2 class="lead" style="color: #0071BC; font-size: 35px;">Pengisian Order Laundry</h2>
                <hr style="border: 1px solid #0071BC; display: flex; margin-left: 0; width: 300px;">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="" style="padding: 2vh 0 10vh 0;">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" style="color: #0071BC; font-size: 20px; font-weight: 500;">Nama :</label>
                            <input type="name" class="form-control" id="exampleFormControlInput1" style="width: 50%;">
                        </div>
                        <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label" style="color: #0071BC; font-size: 20px; font-weight: 500; margin-top: 2rem;">No Hanphone :</label>
                            <input type="phone" class="form-control" id="exampleFormControlInput1" style="width: 50%;">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" style="color: #0071BC; font-size: 20px; font-weight: 500; margin-top : 2rem;">Pilih Pakaian :</label>
                            <div class="form-group">
                                <select id="disabledSelect" class="form-control" style="width: 50%;">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Baju</option>
                                    <option value="2">Celana</option>
                                    <option value="3">Baju Dan Pakaian</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" style="color: #0071BC; font-size: 20px; font-weight: 500; margin-top : 2rem;">Jumlah :</label>
                            <div class="form-group">
                                <select id="disabledSelect" class="form-control" style="width: 50%;">
                                    <option selected>Open this select menu</option>
                                    <option value="1">1 Kg</option>
                                    <option value="2">2 Kg</option>
                                    <option value="3">3 Kg</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label" style="color: #0071BC; font-size: 20px; font-weight: 500; margin-top: 2rem;">Tanggal Order :</label>
                            <input type="date" name="tgl_order" value="<?= $tgl_order; ?>" class="form-control" id="exampleFormControlInput1" style="width: 50%;">
                        </div>
                        <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label" style="color: #0071BC; font-size: 20px; font-weight: 500; margin-top: 2rem;">Tanggal Pengembalian :</label>
                            <input type="date" name="tgl_kembali" value="<?= $tgl_kembali; ?>" class="form-control" id="exampleFormControlInput1" style="width: 50%;" readonly>
                        </div>
                        <div class=" mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label" style="color: #0071BC; font-size: 20px; font-weight: 500; margin-top: 2rem;">Alamat :</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg" style="margin-top: 5vh; float: right; margin-bottom: 10vh;">Order</button>
                    </form>
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
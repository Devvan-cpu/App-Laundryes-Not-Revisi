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
                            <h2 class="lead">LIST ORDER</h2>
                            <p class="sublead">Halaman Order Laundry</p>
                        </div>
                    </div>
                </div>
                <!-- CONTENT -->
                <script>
                    function gettimeadd(value) {
                        var someDate = new Date(value);
                        someDate.setDate(someDate.getDate() + 1);
                        var dateFormated = someDate.toISOString().substr(0, 10);
                        console.log(dateFormated);
                        document.getElementById('addtime').value = dateFormated;
                    }
                </script>
                <div class="container">
                    <div class="page-title-alt">
                        <h2 class="lead" style="color: #0071BC; font-size: 35px;">Pengisian Order Laundry</h2>
                        <hr style="border: 1px solid #0071BC; display: flex; margin-left: 0; width: 300px;">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="<?php echo base_url('customer/aksi_order_tambah/?id_pemesanan=' . $this->input->get('id_pemesanan')); ?>" method="POST" style="padding: 2vh 0 10vh 0;">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label" style="color: #0071BC; font-size: 20px; font-weight: 500; margin-top : 2rem;">Jenis Pakaian :</label>
                                    <div class="form-group">
                                        <select required id="disabledSelect" class="form-control" name="pilih_pakaian" required>
                                            <option>-- Pilih Pakaian --</option>
                                            <?php
                                            foreach ($data as $row) { ?>
                                                <option value="<?= $row->id_pakaian; ?>"><?= $row->jenis_pakaian; ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label" style="color: #0071BC; font-size: 20px; font-weight: 500;">Jumlah Pakaian :</label>
                                    <input type="number" class="form-control" name="jmlh_pakaian" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 5vh; float: right; margin-bottom: 10vh;">Tambah</button>
                                <a href="<?php echo base_url('customer/simpan_booking/?id_pemesanan=' . $this->input->get('id_pemesanan')); ?>" class="btn btn-danger btn-lg" style="margin-top: 5vh; float: right; margin-bottom: 10vh; margin-right: 2vh;">Simpan Booking</a>
                                <a href="<?= base_url() ?>customer/pesan" class="btn btn-warning btn-lg" style="margin-top: 5vh; float: right; margin-bottom: 10vh; margin-right: 2vh;"></i> Kembali</a>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <div class="alert alert-info">

                                <?php foreach ($pemesanan as $p) { ?>
                                    Tanggal Booking : <?php echo date('d-m-Y', strtotime($p->tgl_pesan));  ?><br>
                                    Kode Booking : <?php echo $p->id_pemesanan; ?><br>
                                    Status Booking : <?php echo $p->status_pesan; ?>
                                <?php } ?>
                            </div>
                            <table class="table table-hover table-responsive table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pakaian</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($list_pakaian as $lo) { ?>
                                        <tr>
                                            <td><?php echo $lo->id_detail_pemesanan; ?></td>
                                            <td><?php echo $lo->jenis_pakaian; ?></td>
                                            <td><?php echo $lo->jumlah_pakaian; ?></td>
                                            <td>Rp.<?php echo $lo->harga_pakaian; ?></td>
                                            <td>Rp.<?php echo $lo->harga_total; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('customer/hapus_detail/?id=' . $lo->id_detail_pemesanan . '&id_pemesanan=' . $this->input->get('id_pemesanan')); ?>" class="btn btn-sm btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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
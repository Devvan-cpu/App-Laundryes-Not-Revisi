<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-tshirt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Laundryes</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard Admin</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/petugas">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Petugas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>admin/pakaian">
                    <i class="fas fa-tshirt"></i>
                    <span>Jenis Pakaian</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Laundryes</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="<?= base_url() ?>admin/data_pesanan">Data Pesanan</a>
                        <a class="collapse-item" href="<?= base_url() ?>admin/data_transaksi">Data Transaksi</a>
                        <a class="collapse-item" href="<?= base_url() ?>admin/laporan">Data Laporan</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">


                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $name['name']; ?></span>
                                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Data Pakaian</h1>
                    <?= $this->session->flashdata('alert'); ?>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kode Pesanan</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Tanggal Pesan</th>
                                <th>Tanggal Proses</th>
                                <th>Tanggal Selesai</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $row) { ?>
                                <tr>
                                    <td><?= $row->id_pemesanan; ?></td>
                                    <td><?= $row->name; ?></td>
                                    <td><?= $row->alamat; ?></td>
                                    <td><?= $row->no_hp; ?></td>
                                    <td><?= date('d-m-Y', strtotime($row->tgl_pesan)); ?></td>
                                    <td><?= date('d-m-Y', strtotime($row->tgl_eksekusi)); ?></td>
                                    <td><?= date('d-m-Y', strtotime($row->tgl_kembali)); ?></td>
                                    <td><?= $row->status_pesan; ?></td>
                                    <td>
                                        <button data-target="#modal<?php echo $row->id_pemesanan; ?>" data-toggle="modal" class="btn btn-warning btn-xs">Edit Status</button>
                                        <!-- modal edit status -->
                                        <div class="modal fade" id="modal<?php echo $row->id_pemesanan; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <form action="<?= base_url('admin/update_status_pesan/'); ?>" method="POST">
                                                        <div class="modal-body">
                                                            <div class="mb-1">
                                                                <label for="exampleFormControlInput1" class="form-label" style="color: #0071BC; font-size: 20px; font-weight: 500; margin-top: 2rem;">Edit Tanggal Proses :</label>
                                                                <input type="hidden" name="id_pemesanan" class="form-control" value="<?php echo $row->id_pemesanan; ?>">
                                                                <input type="date" name="tgl_eksekusi" value="<?php echo $row->tgl_eksekusi; ?>" class="form-control" id="exampleFormControlInput1">
                                                            </div>
                                                            <br>
                                                            <div class="mb-1">
                                                                <label for="exampleFormControlInput1" class="form-label" style="color: #0071BC; font-size: 20px; font-weight: 500; margin-top: 2rem;">Edit Tanggal Selesai :</label>
                                                                <input type="date" name="tgl_kembali" value="<?php echo $row->tgl_kembali; ?>" class="form-control" id="exampleFormControlInput1">
                                                            </div>
                                                            <br>
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1" class="form-label" style="color: #0071BC; font-size: 20px; font-weight: 500; margin-top : 2rem;">Edit Proses Pesanan</label>
                                                                <div class="form-group">
                                                                    <select name="status_pesan" required id="disabledSelect" class="form-control">
                                                                        <option selected><?= $row->status_pesan; ?></option>
                                                                        <option value="Menuju Alamat Anda">Menuju Alamat Anda</option>
                                                                        <option value="Proses">Proses</option>
                                                                        <option value="Proses_pencucian">Proses(Pencucian)</option>
                                                                        <option value="Proses(Pencucian)">Proses(Setrika)</option>
                                                                        <option value="Proses(Pengeringan)">Proses(Pengeringan)</option>
                                                                        <option value="Proses(Pengemasan)">Proses(Pengemasan)</option>
                                                                        <option value="Selesai">Selesai</option>
                                                                        <option value="Lunas">Lunas</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-primary">Edit Data</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal edit status -->
                                    </td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url() ?>auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1"><b>Registrasi </b>Laundry</a>
            </div>
            <div class="card-body">
                <form action="" method="post" action="<?= base_url('auth/register') ?>">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="id_customer" name="id_customer" value="<?= $id_customer; ?>" readonly>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-key"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>
                    <div class="input-group mb-3">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nama" value="<?= set_value('name'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                    <div class="input-group mb-3">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="handpone" name="no_hp" id="no_hp" class="form-control" placeholder="Handphone">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-home"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <br>
                <p class="mb-1 container">
                    <a href="<?= base_url('auth/login') ?>" class="text-center">Log In ?</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
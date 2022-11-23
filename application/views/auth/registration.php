<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body bg-warning">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="mx-auto">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Gawe akun anyar!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="FULL NAME" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="EMAIL ADDRESS" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" name="password1" id="password1" placeholder="Password" value="<?= set_value('password1'); ?>">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="REPEAT PASSWORD">
                                </div>
                            </div>
                            <button href="<?= base_url('auth'); ?>" class="btn btn-primary btn-user btn-block">
                                daftarne
                            </button>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">FORGOT PASSWORD</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">ALREADY HAVE AN ACCOUNT, LOGIN!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
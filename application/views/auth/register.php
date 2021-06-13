<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Silahkan Buat Akun Baru!</h1>
                    </div>
                    <form class="user" action="<?= base_url('index.php/register/registerproses') ?>" method="POST">
                        <div class="form-group">
                            <input name="nama_lengkap" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Lengkap">
                            <div class="text-danger" style="font-size: 15px; margin-left: 20px;"> <?= form_error('nama_lengkap') ?> </div>
                        </div>
                        <div class="form-group">
                            <input name="username" type="text" class="form-control form-control-user" id="exampleUsername" placeholder="Username">
                            <div class="text-danger" style="font-size: 15px; margin-left: 20px;"> <?= form_error('username') ?> </div>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Alamat Email">
                            <div class="text-danger" style="font-size: 15px; margin-left: 20px;"> <?= form_error('email') ?> </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                            </div>
                            <div class="col-sm-6">
                                <input name="password2" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password">
                            </div>
                            <div class="text-danger" style="font-size: 15px; margin-left: 20px;"> <?= form_error('password') ?> </div>
                            <div class="text-danger" style="font-size: 15px; margin-left: 20px;"> <?= form_error('password2') ?> </div>
                        </div>
                        <input type="submit" value="Registrasi" class="btn btn-success btn-user btn-block" />
                        <hr>
                    </form>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('index.php/login') ?>">Sudah punya akun ? Silahkan login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
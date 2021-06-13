<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-8">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="p-5 h1 text-center">
                                Hai Anda berhasil Login
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="p-5 h4 text-center">
                                Nama Anda adalah <?= $this->session->userdata('name'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col">
                            <a href="login/logout" class="btn-block btn btn-danger">
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
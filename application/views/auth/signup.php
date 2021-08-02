        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 mt-5 pt-3">
                                <div class="card shadow-lg border-0 rounded-lg">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><b>SIGNUP</b></h3></div>
                                    <div class="card-body pb-0">                                        
                                        <form method="post" action="<?= base_url('auth/signup'); ?>">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Username</label><input class="form-control py-4" id="username" name="username" type="text" placeholder="Masukan Username" value="<?= set_value('username'); ?>" />
                                                    <?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?>
                                                    </div>                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Email</label><input class="form-control py-4" id="email" name="email" type="text" placeholder="Masukan Email" value="<?= set_value('email'); ?>" autocomplete="off" />
                                                    <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="password1" name="password1" type="password" placeholder="Masukan Password" />
                                                    <?= form_error('password1', '<small class="text-danger pl-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Konfirmasi Password</label><input class="form-control py-4" id="password2" name="password2" type="password" placeholder="Masukan Konfirmasi Password" />
                                                        <?= form_error('password2', '<small class="text-danger pl-2">', '</small>'); ?>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="signup">SignUp</button>
                                            <center><a href="<?= base_url('auth/login')  ?>" class="small pb-0">Sudah punya akun? Masuk</a></center>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="<?= base_url('') ?>">KelasIOT v3</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto shadow-lg">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-dark">Copyright &copy; <script>document.write(new Date().getFullYear());</script> <b class="text-info">KelasIOT</b> v3</div>
                            <div>
                                <a class="btn btn-light btn-social mx-2" href="https://www.instagram.com/ferdyhwn/"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-light btn-social mx-2" href="https://www.facebook.com/profile.php?id=100008624989032"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-social mx-2" href="https://api.whatsapp.com/send?phone=6289639399074 "><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
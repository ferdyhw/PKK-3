 <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?= base_url('dashboard/member')?>"><img src="../assets/img/logo.png" alt="" /></a>
                <button style="background-color: #117a8b00" class="btn btn-link navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-lg"></i>                
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('feature/basic') ?>">Basic</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('feature/quiz') ?>">Quiz</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('feature/project') ?>">Project</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('feature/component') ?>">Component</a></li>                        
                    </ul>
                    <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('member/edit_profile') ?>">Profile</a>
                        <a class="dropdown-item" href="<?= base_url('member/edit_password') ?>">Password</a>
                        <div class="dropdown-divider"></div>
                        <button class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Logout</button>
                    </div>
                </li>
            </ul>
                </div>
            </div>
        </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row d-flex justify-content-center">

      <!-- Blog Entries Column -->
      <div class="col-md-12 mt-4 mb-4">

        <h2 class="my-4"><span class="text-info">|</span> Password -
          <small><?= $user['username'] ?></small>
        </h2>

        <?= $this->session->flashdata('pesan'); ?>

        <!-- Edit Profile -->
        <div class="card">          
          <div class="card-body">
            <h4>Edit Password</h4>
            <form action="" method="post">
              		<div class="form-group">		                			                	
                        <div class="form-group">
                            <label class="small mb-1" for="passwordlama">Passoword Lama</label>
                            <input class="form-control" id="passwordlama" name="passwordlama" type="password" placeholder="Password Lama" value="<?= set_value('passwordlama') ?>" /><small class="text-danger"><?= form_error('passwordlama'); ?></small></div>
                            <div class="form-group">
                            <label class="small mb-1" for="password1">Passoword Baru</label>
                            <input class="form-control" id="password1" name="password1" type="password" placeholder="Password Baru" value="<?= set_value('password1') ?>" /><small class="text-danger"><?= form_error('password1'); ?></small></div>
                            <div class="form-group">
                            <label class="small mb-1" for="password2">Konfirmasi Passoword Baru</label>
                            <input class="form-control" id="password2" name="password2" type="password" placeholder="Konfirmasi Password Baru" value="<?= set_value('password2') ?>" /><small class="text-danger"><?= form_error('password2'); ?></small></div>
                            <div class="form-group mt-0">
                            <button class="btn btn-info btn-block" type="submit" name="tambah"><i class="fas fa-check"></i> Save</button>
		                  	</div>
    		            </form>                  		   
            	 </div>  
          	</div>
    	   </div>       
    </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer-->
        <footer class="footer py-3 bg-dark">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left text-light">Copyright &copy; <script>document.write(new Date().getFullYear());</script> <b class="text-info">KelasIOT</b> v3</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/ferdyhwn/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/profile.php?id=100008624989032"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://api.whatsapp.com/send?phone=6289639399074 "><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right text-light">
                        <a class="mr-3" clhref="#!">Privacy Policy</a>
                        <a class="mr-3" clhref="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>

<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Yakin ingin logout ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</button>
                <a href="<?= base_url('auth/logout') ?>"><button type="button" class="btn btn-info"><i class="fas fa-check"></i> Yakin</button></a>
              </div>
            </div>
          </div>
        </div>
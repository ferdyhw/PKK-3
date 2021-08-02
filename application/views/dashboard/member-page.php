    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="../assets/img/logo.png" alt="" /></a>
                <button style="background-color: #117a8b00" class="btn btn-link navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-lg"></i>                
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('feature/basic') ?>">Basic</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('feature/quiz') ?>">Quiz</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('feature/project') ?>">Project</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('feature/component')?>">Component</a></li>
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
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang <?= $user['username'] ?>,</div>
                <div class="masthead-heading text-uppercase">Let's Start Learning !</div>
                <a class="btn btn-info btn-xl text-uppercase js-scroll-trigger" href="<?= base_url('basic/page_1')?>">Mulai Sekarang</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Fitur<span class="text-info">.</span></h2>  
                    <h3 class="section-subheading text-muted">Fitur Yang Disediakan Pada Website Ini</h3>              
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <span class="fa-stack fa-4x">
                            <img class="card-img-top p-1" src="<?= base_url() ?>assets/img/index/basic.png">
                        </span>
                        <h4 class="mt-5">Basic</h4>
                        <p class="text-muted">Menyediakan pembelajaran dasar mengenai Internet of Things. Mulai dari pengertian iot, sejarah iot, cara kerja iot, hingga unsur-unsur pembentuk internet of things. Materi yang tersedia mudah dipahami oleh pembaca. <a href="<?= base_url('feature/basic')?>">Lebih lanjut...</a></p>
                    </div> 
                    <div class="col-md-12">
                        <span class="fa-stack fa-4x">
                            <img class="card-img-top p-3" src="<?= base_url() ?>assets/img/index/quiz.png">
                        </span>
                        <h4 class="mt-5">Quiz</h4>
                        <p class="text-muted">Menyediakan pertanyan mengenai dasar Internet of Things yang sudah dipelajari sebelumnya. User dapat mengerjakan Quiz berulang-ulang agar dapat mengukur tingkat ingatan dalam mempelajari Internet of Things. <a href="<?= base_url('feature/quiz')?>">Lebih lanjut...</a></p>
                    </div>
                    <div class="col-md-12">
                        <span class="fa-stack fa-4x">
                            <img class="card-img-top p-3" src="<?= base_url() ?>assets/img/index/project.png">
                        </span>
                        <h4 class="mt-5">Project</h4>
                        <p class="text-muted">Menyediakan tutorial dalam menggunakan microcontroller, seperti Arduino UNO. Selain itu, membuat suatu alat Smart Things dengan menggunakan sensor, dimulai dari rangkaiannya sampai sketch programnya. <a href="<?= base_url('feature/project')?>">Lebih lanjut...</a></p>
                    </div>
                    <div class="col-md-12">
                        <span class="fa-stack fa-4x">
                            <img class="card-img-top p-3" src="<?= base_url() ?>assets/img/index/component.png">
                        </span>
                        <h4 class="mt-5">Component</h4>
                        <p class="text-muted">Menyediakan informasi mengenai alat-alat yang digunakan dalam membuat sebuah smart things, seperti microcontroler Arduino UNO, NodeMCU dll. Ataupun berbagai jenis sensor seperti DHT11, HCSR04 dll. <a href="<?= base_url('feature/component')?>">Lebih lanjut...</a></p>
                    </div>                   
                </div>
            </div>
        </section>
        
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
        
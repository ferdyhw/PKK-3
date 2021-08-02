    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logo.png" alt="" /></a>
                <button style="background-color: #117a8b00" class="btn btn-link navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-lg"></i>                
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Fitur</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('auth/login') ?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang di KelasIOT v3</div>
                <div class="masthead-heading text-uppercase">Let's Start Learning !</div>
                <a class="btn btn-info btn-xl text-uppercase js-scroll-trigger" href="#services">Lebih Banyak</a>
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
                        <p class="text-muted">Menyediakan pembelajaran dasar mengenai Internet of Things. Mulai dari pengertian iot, sejarah iot, cara kerja iot, hingga unsur-unsur pembentuk internet of things. Materi yang tersedia mudah dipahami oleh pembaca.</p>
                    </div> 
                    <div class="col-md-12">
                        <span class="fa-stack fa-4x">
                            <img class="card-img-top p-3" src="<?= base_url() ?>assets/img/index/quiz.png">
                        </span>
                        <h4 class="mt-5">Quiz</h4>
                        <p class="text-muted">Menyediakan pertanyan mengenai dasar Internet of Things yang sudah dipelajari sebelumnya. User dapat mengerjakan Quiz berulang-ulang agar dapat mengukur tingkat ingatan dalam mempelajari Internet of Things.</p>
                    </div>
                    <div class="col-md-12">
                        <span class="fa-stack fa-4x">
                            <img class="card-img-top p-3" src="<?= base_url() ?>assets/img/index/project.png">
                        </span>
                        <h4 class="mt-5">Project</h4>
                        <p class="text-muted">Menyediakan tutorial dalam menggunakan microcontroller, seperti Arduino UNO. Selain itu, membuat suatu alat Smart Things dengan menggunakan sensor, dimulai dari rangkaiannya sampai sketch programnya.</p>
                    </div>
                    <div class="col-md-12">
                        <span class="fa-stack fa-4x">
                            <img class="card-img-top p-3" src="<?= base_url() ?>assets/img/index/component.png">
                        </span>
                        <h4 class="mt-5">Component</h4>
                        <p class="text-muted">Menyediakan informasi mengenai alat-alat yang digunakan dalam membuat sebuah smart things, seperti microcontroler Arduino UNO, NodeMCU dll. Ataupun berbagai jenis sensor seperti DHT11, HCSR04 dll.</p>
                    </div>                   
                </div>
            </div>
        </section>

        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Gallery<span class="text-info">.</span></h2>
                    <h3 class="section-subheading text-muted">Gallery foto Internet of Things.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" data-target="#modal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/index/P_1.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Arduino UNO<span class="text-info">.</span></div>
                                <div class="portfolio-caption-subheading text-muted">Microcontroller</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" data-target="#modal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/index/P_2.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Arduino UNO<span class="text-info">.</span></div>
                                <div class="portfolio-caption-subheading text-muted">Microcontroller</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" data-target="#modal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/index/P_3.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Arduino UNO<span class="text-info">.</span></div>
                                <div class="portfolio-caption-subheading text-muted">Microcontroller</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" data-target="#modal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/index/P_4.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Components<span class="text-info">.</span></div>
                                <div class="portfolio-caption-subheading text-muted">Smart Things</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" data-target="#modal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/index/P_5.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Components<span class="text-info">.</span></div>
                                <div class="portfolio-caption-subheading text-muted">Smart Things</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" data-target="#modal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/index/P_6.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Components<span class="text-info">.</span></div>
                                <div class="portfolio-caption-subheading text-muted">Smart Things</div>
                            </div>
                        </div>
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

        <!-- Portfolio Modals-->
        <!-- Modal 1 -->
                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="text-uppercase"><span class="text-info">|</span><small> Arduino UNO</small></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- Project Details Go Here-->                                                
                            <img class="img-fluid d-block mx-auto" src="assets/img/index/P_1.jpg" alt="" />                            
                        </div>              
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal 2 -->
                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="text-uppercase"><span class="text-info">|</span><small> Arduino UNO</small></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- Project Details Go Here-->                                                
                            <img class="img-fluid d-block mx-auto" src="assets/img/index/P_2.jpg" alt="" />                            
                        </div>              
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal 3 -->
                <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="text-uppercase"><span class="text-info">|</span><small> Arduino UNO</small></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- Project Details Go Here-->                                                
                            <img class="img-fluid d-block mx-auto" src="assets/img/index/P_3.jpg" alt="" />                            
                        </div>              
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal 4 -->
                <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="text-uppercase"><span class="text-info">|</span><small> Components</small></h2></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- Project Details Go Here-->                                                
                            <img class="img-fluid d-block mx-auto" src="assets/img/index/P_4.jpg" alt="" />                            
                        </div>              
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal 5 -->
                <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="text-uppercase"><span class="text-info">|</span><small> Components</small></h2></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- Project Details Go Here-->                                                
                            <img class="img-fluid d-block mx-auto" src="assets/img/index/P_5.jpg" alt="" />                            
                        </div>              
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal 6 -->
                <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="text-uppercase"><span class="text-info">|</span><small> Components</small></h2></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- Project Details Go Here-->                                                
                            <img class="img-fluid d-block mx-auto" src="assets/img/index/P_6.jpg" alt="" />                            
                        </div>              
                      </div>
                    </div>
                  </div>
                </div>

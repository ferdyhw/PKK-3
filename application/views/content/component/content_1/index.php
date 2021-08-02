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

    <div class="row">

      <!-- Post Content Column -->      
      <div class="col-lg-12">
        <div class="pt-4"><?= $this->session->flashdata('pesan'); ?></div>
        <!-- Title -->
        <h1 class="mt-4"><?= $component['title'] ?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#"><?= $component['author'] ?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?= $component['date'] ?></p>

        <hr>        

        <!-- Portfolio Grid-->        
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="row">                  
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" data-target="#modal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url('/assets/img/component/comp_1/') . $comp_1['picture_1'] ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?= $comp_1['title_1'] ?><span class="text-info">.</span></div>
                                <div class="portfolio-caption-subheading text-muted"><?= $comp_1['jenis'] ?></div>                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" data-target="#modal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url('/assets/img/component/comp_1/') . $comp_2['picture_2'] ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?= $comp_2['title_2'] ?><span class="text-info">.</span></div>
                                <div class="portfolio-caption-subheading text-muted"><?= $comp_2['jenis'] ?></div>                                
                            </div>
                        </div>
                    </div>    

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" data-target="#modal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url('/assets/img/component/comp_1/') . $comp_3['picture_3'] ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?= $comp_3['title_3'] ?><span class="text-info">.</span></div>
                                <div class="portfolio-caption-subheading text-muted"><?= $comp_3['jenis'] ?></div>                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" data-target="#modal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url('/assets/img/component/comp_1/') . $comp_4['picture_4'] ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?= $comp_4['title_4'] ?><span class="text-info">.</span></div>
                                <div class="portfolio-caption-subheading text-muted"><?= $comp_4['jenis'] ?></div>                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" data-target="#modal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url('/assets/img/component/comp_1/') . $comp_5['picture_5'] ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?= $comp_5['title_5'] ?><span class="text-info">.</span></div>
                                <div class="portfolio-caption-subheading text-muted"><?= $comp_5['jenis'] ?></div>                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" data-target="#modal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url('/assets/img/component/comp_1/') . $comp_6['picture_6'] ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?= $comp_6['title_6'] ?><span class="text-info">.</span></div>
                                <div class="portfolio-caption-subheading text-muted"><?= $comp_6['jenis'] ?></div>                                
                            </div>
                        </div>
                    </div>

                </div>                
            </div>
        </section>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item disabled">
            <a class="page-link" href="#">&laquo; Prev</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="<?= base_url('component/page_2') ?>">Next &raquo;</a>
          </li>
        </ul>

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

        <!-- Portfolio Modals-->
        <!-- Modal 1 -->        
                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="text-uppercase"><span class="text-info">|</span><small> <?= $comp_1['title_1'] ?></small></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- Project Details Go Here-->                                                
                            <img class="img-fluid d-block mx-auto mb-3" src="<?= base_url('/assets/img/component/comp_1/') . $comp_1['picture_1'] ?>" alt="" />
                            <h5 style="font-size: 18px"><span class="text-info">| </span>Deskripsi</h5><p style="padding: 0"><?= $comp_1['desc_1'] ?></p>                            
                            <h5 style="font-size: 18px"><span class="text-info">| </span>Link Pembelian</h5><p><a href="<?= $comp_1['link_1'] ?>" target="_blank" ><?= $comp_1['link_1'] ?></a></p>
                        </div>
                        <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>
           <!-- Modal 2 -->        
                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="text-uppercase"><span class="text-info">|</span><small> <?= $comp_2['title_2'] ?></small></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- Project Details Go Here-->                                                
                            <img class="img-fluid d-block mx-auto mb-3" src="<?= base_url('/assets/img/component/comp_1/') . $comp_2['picture_2'] ?>" alt="" />
                            <h5 style="font-size: 18px"><span class="text-info">| </span>Deskripsi</h5><p style="padding: 0"><?= $comp_2['desc_2'] ?></p>                            
                            <h5 style="font-size: 18px"><span class="text-info">| </span>Link Pembelian</h5><p><a href="<?= $comp_2['link_2'] ?>" target="_blank" ><?= $comp_2['link_2'] ?></a></p>
                        </div>
                        <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>
             <!-- Modal 3 -->        
                <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="text-uppercase"><span class="text-info">|</span><small> <?= $comp_3['title_3'] ?></small></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- Project Details Go Here-->                                                
                            <img class="img-fluid d-block mx-auto mb-3" src="<?= base_url('/assets/img/component/comp_1/') . $comp_3['picture_3'] ?>" alt="" />
                            <h5 style="font-size: 18px"><span class="text-info">| </span>Deskripsi</h5><p style="padding: 0"><?= $comp_3['desc_3'] ?></p>                            
                            <h5 style="font-size: 18px"><span class="text-info">| </span>Link Pembelian</h5><p><a href="<?= $comp_3['link_3'] ?>" target="_blank" ><?= $comp_3['link_3'] ?></a></p>
                        </div>
                        <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>
             <!-- Modal 4 -->        
                <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="text-uppercase"><span class="text-info">|</span><small> <?= $comp_4['title_4'] ?></small></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- Project Details Go Here-->                                                
                            <img class="img-fluid d-block mx-auto mb-3" src="<?= base_url('/assets/img/component/comp_1/') . $comp_4['picture_4'] ?>" alt="" />
                            <h5 style="font-size: 18px"><span class="text-info">| </span>Deskripsi</h5><p style="padding: 0"><?= $comp_4['desc_4'] ?></p>                            
                            <h5 style="font-size: 18px"><span class="text-info">| </span>Link Pembelian</h5><p><a href="<?= $comp_4['link_4'] ?>" target="_blank" ><?= $comp_4['link_4'] ?></a></p>
                        </div>
                        <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>
             <!-- Modal 5 -->        
                <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="text-uppercase"><span class="text-info">|</span><small> <?= $comp_5['title_5'] ?></small></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- Project Details Go Here-->                                                
                            <img class="img-fluid d-block mx-auto mb-3" src="<?= base_url('/assets/img/component/comp_1/') . $comp_5['picture_5'] ?>" alt="" />
                            <h5 style="font-size: 18px"><span class="text-info">| </span>Deskripsi</h5><p style="padding: 0"><?= $comp_5['desc_5'] ?></p>                            
                            <h5 style="font-size: 18px"><span class="text-info">| </span>Link Pembelian</h5><p><a href="<?= $comp_5['link_5'] ?>" target="_blank" ><?= $comp_5['link_5'] ?></a></p>
                        </div>
                        <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>
             <!-- Modal 6 -->        
                <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="text-uppercase"><span class="text-info">|</span><small> <?= $comp_6['title_6'] ?></small></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- Project Details Go Here-->                                                
                            <img class="img-fluid d-block mx-auto mb-3" src="<?= base_url('/assets/img/component/comp_1/') . $comp_6['picture_6'] ?>" alt="" />
                            <h5 style="font-size: 18px"><span class="text-info">| </span>Deskripsi</h5><p style="padding: 0"><?= $comp_6['desc_6'] ?></p>                            
                            <h5 style="font-size: 18px"><span class="text-info">| </span>Link Pembelian</h5><p><a href="<?= $comp_6['link_6'] ?>" target="_blank" ><?= $comp_6['link_6'] ?></a></p>
                        </div>
                        <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>
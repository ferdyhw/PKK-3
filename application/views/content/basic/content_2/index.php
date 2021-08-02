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
        <h1 class="mt-4"><?= $basic['title'] ?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#"><?= $basic['author'] ?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?= $basic['date'] ?></p>

        <hr>

        <!-- Preview Image -->
        <img class="container" src="<?= base_url('assets/img/content/') . $basic['picture']; ?>">

        <hr>

        <!-- Post Content -->
        <div style="font-family: Arial; text-align: justify;">
        <p class="lead"><?= $basic['content'] ?></p>

        <hr>

         <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="<?= base_url('basic/page_1') ?>">&laquo; Prev</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="<?= base_url('basic/page_3') ?>">Next &raquo;</a>
          </li>
        </ul>
        
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" name="email" value="<?= $user['email'] ?>" hidden>
                <input type="text" name="username" value="<?= $user['username'] ?>" hidden>
                <textarea class="form-control" name="comment" rows="3" required></textarea>
                <input type="text" name="picture" value="<?= $user['gambar'] ?>" hidden>
              </div>
              <button type="submit" name="send" class="btn btn-info">Send</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <?php foreach($comment as $com) : ?>
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" style="width: 30px" src="<?= base_url('assets/img/profile/') . $com['picture']; ?>" alt="">
          <div class="media-body">
            <h5 class="mt-0"><?= $com['username'] ?></h5>
            <p style="font-size: 10px; padding-bottom: 5px; margin: 0"><?= $com['email'] ?></p>
            <?= $com['comment'] ?>
            <p style="font-size: 10px; padding-top: 5px"><?= $com['date'] ?></p>
            <hr>
          </div>
        </div>
        <?php endforeach; ?>

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

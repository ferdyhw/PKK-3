 <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href=""><img class="container-fluid" src="<?= base_url() ?>assets/img/logo.png"/></a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('admin/edit_profile') ?>">Profile</a>
                        <a class="dropdown-item" href="<?= base_url('admin/edit_password') ?>">Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Utama</div>
                            <a class="nav-link" href="<?= base_url('dashboard/admin') ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            <div class="sb-sidenav-menu-heading">Edit Fitur</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                	<a class="nav-link" href="<?= base_url('feature/blacklist') ?>">Blacklist</a>
                                	<a class="nav-link" href="<?= base_url('feature/list_users') ?>">List Users</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="false" aria-controls="collapsePage"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Page
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePage" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                	<a class="nav-link" href="<?= base_url('feature/edit_basic') ?>">Basic</a>
                                	<a class="nav-link" href="">Quiz</a>
                                	<a class="nav-link" href="<?= base_url('feature/edit_project') ?>">Project</a>
                                    <a class="nav-link" href="<?= base_url('feature/edit_component') ?>">Component</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="<?= base_url('feature/comment') ?>"><div class="sb-nav-link-icon"><i class="fas fa-comment"></i></div>Comment</a>
                            
                             <div class="sb-sidenav-menu-heading">Lainnya</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseprofile" aria-expanded="false" aria-controls="collapseprofile"
                                ><div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Profile
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseprofile" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                     <a class="nav-link" href="<?= base_url('admin/edit_profile') ?>">Edit Profile</a>
                                     <a class="nav-link" href="<?= base_url('admin/edit_password') ?>">Edit Password</a>                                     
                                </nav>
                            </div>
                             <a class="nav-link" href="<?= base_url('auth/Logout') ?>"><div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>Logout</a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?= $role['role'] ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Quiz</h1>
                        <ol class="breadcrumb mb-2">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard/admin') ?>">Dashboard</a></li>                            
                            <li class="breadcrumb-item active"><a href="<?= base_url('feature/edit_quiz') ?>">Quiz</a></li>
                            <li class="breadcrumb-item active"><a href="<?= base_url('quiz/edit_page_2') ?>">Quiz Page 2</a></li>
                            <li class="breadcrumb-item active">Edit Soal</li>
                        </ol>
                        <?= $this->session->flashdata('pesan'); ?>
                        <button class="badge badge-primary py-2 mb-2"  data-toggle="modal" data-target="#Tambah"><i class="fas fa-plus"></i> Tambah Soal</button>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>List Soal Quiz</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead style="text-align: center;">
                                            <tr>
                                                <th>ID</th>
                                                <th>Soal</th>                                                
                                                <th>Opsi A</th>
                                                <th>Opsi B</th>
                                                <th>Opsi C</th>
                                                <th>Opsi D</th>
                                                <th>Jawaban</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot style="text-align: center;">
                                            <tr>
                                                <th>ID</th>
                                                <th>Soal</th>                                                
                                                <th>Opsi A</th>
                                                <th>Opsi B</th>
                                                <th>Opsi C</th>
                                                <th>Opsi D</th>
                                                <th>Jawaban</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody style="text-align: center;">
                                            <?php foreach($quiz as $qz) : ?>
                                            <tr>
                                                <td><?= $qz['id'] ?></td>
                                                <td><?= $qz['soal'] ?></td>                                                
                                                <td><?= $qz['opsi_a'] ?></td>
                                                <td><?= $qz['opsi_b'] ?></td>
                                                <td><?= $qz['opsi_c'] ?></td>
                                                <td><?= $qz['opsi_d'] ?></td>
                                                <td><?= $qz['jawaban'] ?></td>
                                                <td>
                                                    <button class="badge badge-primary" data-toggle="modal" data-target="#Edit<?= $qz['id'] ?>">Edit</button>
                                                    <button class="badge badge-danger" data-toggle="modal" data-target="#Hapus<?= $qz['id'] ?>">Hapus</button>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                    </table>
                                </div>
                            </div>                  
                        </div>
                <footer class="py-4 bg-light mt-5">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; <script>document.write(new Date().getFullYear());</script> <b class="text-info">KelasIOT</b> v3</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <!-- Tambah Modal -->        
        <div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tambahLabel">Konfirmasi Tambah Soal Quiz</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">                
                <form action="<?= base_url('quiz/add_quiz_2') ?>" method="post">
                    <input type="hidden" readonly id="id_soal" name="id_soal" value="">
                    <div class="form-group">                    
                    <label>Soal</label><input class="form-control" type="text" name="soal"></input>
                    <?= form_error('soal', '<small class="text-danger pl-2">', '</small>'); ?></div>
                    <div class="form-group">
                    <label>Opsi A</label><input class="form-control" type="text" name="opsi_a"></input>
                    <?= form_error('opsi_a', '<small class="text-danger pl-2">', '</small>'); ?></div>
                    <div class="form-group">
                    <label>Opsi B</label><input class="form-control" type="text" name="opsi_b"></input>
                    <?= form_error('opsi_b', '<small class="text-danger pl-2">', '</small>'); ?></div>
                    <div class="form-group">
                    <label>Opsi C</label><input class="form-control" type="text" name="opsi_c"></input>
                    <?= form_error('opsi_c', '<small class="text-danger pl-2">', '</small>'); ?></div>
                    <div class="form-group">
                    <label>Opsi D</label><input class="form-control" type="text" name="opsi_d"></input>
                    <?= form_error('opsi_d', '<small class="text-danger pl-2">', '</small>'); ?></div>
                    <div class="form-group"><label for="jawaban">Jawaban</label>
                        <select name="jawaban" id="jawaban" class="form-control">
                            <option disabled selected>Pilih Jawaban...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    <?= form_error('jawaban', '<small class="text-danger pl-2">', '</small>'); ?></div>
                    </div>
                    <input type="hidden" readonly id="status" name="status" value="1">
                    <input type="hidden" readonly id="id_quiz" name="id_quiz" value="1">
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</button>
                <button type="submit" class="btn btn-info"><i class="fas fa-check"></i> Yakin</button>
                </form>
              </div>              
            </div>
          </div>
        </div>         

        <!-- Edit Modal -->
        <?php foreach($quiz as $qz) : ?>
        <div class="modal fade" id="Edit<?= $qz['id'];?>" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editLabel">Konfirmasi Edit Soal ID <?= $qz['id'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">                
                <form action="<?= base_url('feature/edit_quiz_2') ?>" method="post">                    
                    <input type="hidden" readonly id="id_soal" name="id_soal" value="<?= $qz['id'] ?>">                    
                    <div class="form-group"><label for="jawaban">Soal</label>
                        <input class="form-control" type="text" name="soal" value="<?= $qz['soal'] ?>"></input>
                    <?= form_error('soal', '<small class="text-danger pl-2">', '</small>'); ?></div>
                    <div class="form-group"><label for="jawaban">Opsi A</label>
                        <input class="form-control" type="text" name="opsi_a" value="<?= $qz['opsi_a'] ?>"></input>
                    <?= form_error('opsi_a', '<small class="text-danger pl-2">', '</small>'); ?></div>
                    <div class="form-group"><label for="jawaban">Opsi B</label>
                        <input class="form-control" type="text" name="opsi_b" value="<?= $qz['opsi_b'] ?>"></input>
                    <?= form_error('opsi_b', '<small class="text-danger pl-2">', '</small>'); ?></div>
                    <div class="form-group"><label for="jawaban">Opsi C</label>
                        <input class="form-control" type="text" name="opsi_c" value="<?= $qz['opsi_c'] ?>"></input>
                    <?= form_error('opsi_c', '<small class="text-danger pl-2">', '</small>'); ?></div>
                    <div class="form-group"><label for="jawaban">Opsi D</label>
                        <input class="form-control" type="text" name="opsi_d" value="<?= $qz['opsi_d'] ?>"></input>
                    <?= form_error('opsi_d', '<small class="text-danger pl-2">', '</small>'); ?></div>
                    <div class="form-group"><label for="jawaban">Jawaban</label>
                        <select name="jawaban" id="jawaban" class="form-control">
                            <option<?php if ($qz['jawaban'] == "A"): ?> selected="selected"<?php endif; ?>>A</option>
                            <option<?php if ($qz['jawaban'] == "B"): ?> selected="selected"<?php endif; ?>>B</option>
                            <option<?php if ($qz['jawaban'] == "C"): ?> selected="selected"<?php endif; ?>>C</option>
                            <option<?php if ($qz['jawaban'] == "D"): ?> selected="selected"<?php endif; ?>>D</option>
                        </select>
                        <small class="text-danger"><?= form_error('jawaban'); ?></small></div>
                    </div>
                    <input type="hidden" readonly id="status" name="status" value="<?= $qz['status'] ?>">
                    <input type="hidden" readonly id="id_quiz" name="id_quiz" value="<?= $qz['id_quiz'] ?>">
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</button>
                <button type="submit" class="btn btn-info"><i class="fas fa-check"></i> Yakin</button>
                </form>
              </div>              
            </div>
          </div>
        </div>
         <?php endforeach; ?>

        <!-- Hapus Modal -->         
                <?php foreach($quiz as $qz) : ?>
                <div class="modal fade" id="Hapus<?= $qz['id'];?>" tabindex="-1" role="dialog" aria-labelledby="HapusLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editLabel">Konfirmasi Hapus Soal ID <?= $qz['id'] ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="post" action="<?= base_url('quiz/delete_quiz_2') ?>">
                        <input type="hidden" name="id_soal" value="<?= $qz['id'] ?>" readonly>
                        <small class="text-danger"><?= form_error('id_soal'); ?></small>
                        Yakin ingin <b class="text-danger">menghapus</b> soal ini ?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Yakin</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
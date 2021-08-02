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
                                    <a class="nav-link" href="">List Users</a>
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
                                    <a class="nav-link" href="<?= base_url('feature/edit_quiz') ?>">Quiz</a>
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
                        <h1 class="mt-4">List Users Active</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard/admin') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">List Users</li>
                        </ol>
                        <?= $this->session->flashdata('pesan'); ?>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>List Users Active</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead style="text-align: center;">
                                            <tr>
                                                <th>Username</th>
                                                <th>Email</th>                                                
                                                <th>Gambar</th>
                                                <th>Dibuat Pada</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot style="text-align: center;">
                                            <tr>
                                                <th>Username</th>
                                                <th>Email</th>                                                
                                                <th>Gambar</th>
                                                <th>Dibuat Pada</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody style="text-align: center;">
                                            <?php foreach($user as $usr) : ?>
                                            <tr>
                                                <td><?= $usr['username'] ?></td>
                                                <td><?= $usr['email'] ?></td>                                                
                                                <td><img class="img-thumbnail" style="max-width: 50px" src="<?= base_url('assets/img/profile/') . $usr['gambar']; ?>"></img></td>
                                                <td><?= $usr['tanggal'] ?></td>
                                                <td>
                                                    <span class="badge badge-warning"><?php if($usr['role_id'] == 1) { echo "Admin"; } ?></span>
                                                    <span class="badge badge-primary"><?php if ($usr['role_id'] == 2) { echo "Member"; } ?></span>
                                                </td>
                                                <td><span class="badge badge-success">Active</span></td>
                                                <td><button class="badge badge-danger p-1" data-toggle="modal" data-target="#exampleModal<?= $usr['id'] ?>" title="Ban <?= $usr['username'] ?>">Ban</button></td>
                                            </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
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

        <!-- Modal -->
        <?php foreach($user as $usr) : ?>
        <div class="modal fade" id="exampleModal<?= $usr['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Banned</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="" method="post">                    
                    <input type="hidden" readonly id="id" name="id" value="<?= $usr['id'] ?>">                    
                    <p>Yakin Ingin <b class="text-danger">Banned</b> Akun :</p>                   
                    Email<input class="form-control mt-2 mb-4" readonly type="text" id="email" name="email" value="<?= $usr['email'] ?>">
                    <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                    Username<input class="form-control mt-2 mb-2" readonly type="text" id="username" name="username" value="<?= $usr['username'] ?>">
                    <?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?>
                    <input type="hidden" id="status" name="status" value="0">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</button>
                <button type="submit" class="btn btn-info"><i class="fas fa-check"></i> Yakin</button>
                </form>
              </div>
            </div>
          </div>
        </div>
         <?php endforeach; ?>
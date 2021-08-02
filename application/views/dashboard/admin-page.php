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
                            <a class="nav-link" href=""
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="card text-white mb-4" style="background-color: #3d9970">
                                    <div class="card-body">User Active<h4 class="mb-0"><?= $num_user; ?></h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('feature/list_users') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card text-white mb-4" style="background-color: #dd4b39">
                                    <div class="card-body">User Non-active<h4 class="mb-0"><?= $num_blacklist; ?></h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('feature/blacklist') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card text-white mb-4 bg-info">
                                    <div class="card-body">Basic Page<h4 class="mb-0"><?= $num_basic; ?></h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('feature/edit_basic') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card text-white mb-4 bg-secondary">
                                    <div class="card-body">Quiz Page<h4 class="mb-0"><?= $num_quiz; ?></h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('feature/edit_quiz') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card text-white mb-4 bg-secondary">
                                    <div class="card-body">Project Page<h4 class="mb-0"><?= $num_project; ?></h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('feature/edit_project') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card text-white mb-4 bg-info">
                                    <div class="card-body">Component Page<h4 class="mb-0"><?= $num_component; ?></h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('feature/edit_component') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-table mr-1"></i>List All Users</div>
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
                                            </tr>
                                        </tfoot>
                                        <tbody style="text-align: center;">
                                            <?php foreach($users as $usr) : ?>
                                            <tr>
                                                <td><?= $usr['username'] ?></td>
                                                <td><?= $usr['email'] ?></td>                                                
                                                <td><img class="img-thumbnail" style="max-width: 50px" src="<?= base_url('assets/img/profile/') . $usr['gambar']; ?>"></img></td>
                                                <td><?= $usr['tanggal'] ?></td>
                                                <td>
                                                    <span class="badge badge-warning"><?php if($usr['role_id'] == 1) { echo "Admin"; } ?></span>
                                                    <span class="badge badge-primary"><?php if ($usr['role_id'] == 2) { echo "Member"; } ?></span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success"><?php if($usr['status'] == 1) { echo "Active"; } ?></span>
                                                    <span class="badge badge-danger"><?php if ($usr['status'] == 0) { echo "Non-active"; } ?></span>
                                                </td>  
                                            </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                    </table>
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
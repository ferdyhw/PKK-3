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
                                	<a class="nav-link" href="">Basic</a>
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
                        <h1 class="mt-4">Edit Feature Basic</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard/admin') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('feature/edit_basic') ?>">Basic</a></li>
                            <li class="breadcrumb-item active">Basic Page 5</li>
                        </ol>
                        <?= $this->session->flashdata('pesan'); ?>
                        <h4>Edit Basic Page 5</h4>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <input type="text" name="id_content" value="<?= $basic['id'] ?>" hidden></input>

                                    <div class="form-group"><label class="small mb-1" for="title">Title Content</label><input class="form-control" id="title" name="title" type="text" placeholder="Masukan Judul Content" value="<?= $basic['title'] ?>" /></input><small class="text-danger"><?= form_error('title'); ?></small></div>

                                    <div class="form-group"><label class="small mb-1" for="content">Content</label><textarea class="ckeditor" id="ckedtor" name="content" type="text" placeholder="Masukan Content"/><?= $basic['content'] ?></textarea><small class="text-danger"><?= form_error('content'); ?></small></div>

                                    <div class="form-group"><label class="small mb-1" for="summary">Summary</label><textarea  class="ckeditor" id="ckedtor" name="summary" type="text" placeholder="Masukan summary"/><?= $basic['summary'] ?></textarea><small class="text-danger"><?= form_error('summary'); ?></small></div>
                                    
                                    <label for="email" class="small">Picture Content</label>
                                                <div class="custom-file mt-0">
                                                  <input type="file" class="custom-file-input" name="picture" id="customFile">
                                                  <label class="custom-file-label" for="customFile">Choose file</label>
                                                  <img class="img-thumbnail mt-1" class="mt-2" src="<?= base_url('assets/img/content/') . $basic['picture']; ?>"></img>

                                    <div class="form-group"><label class="small mb-1" for="author">Author Content</label><input class="form-control" id="author" name="author" type="text" placeholder="Masukan Author Content" value="<?= $basic['author'] ?>" /></input><small class="text-danger"><?= form_error('author'); ?></small></div>


                                    <div class="form-group"><label class="small mb-1" for="date">Date Content</label><input class="form-control" id="date" name="date" type="date" placeholder="Masukan Date Content" value="<?= $basic['date'] ?>" /></input><small class="text-danger"></small></div>

                                    <button type="submit" class="btn btn-info btn-block"><i class="fas fa-check"></i> Update</button>
                                    </div>                                    
                                </form>
                            </div>
                        </div>
                </main>
                <footer class="py-4 bg-light mt-5">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; <script>document.write(new Date().getFullYear());</script> <b class="text-info">KelasIOT</b> v3</div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
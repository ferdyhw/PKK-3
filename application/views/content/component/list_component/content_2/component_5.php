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
                                    <a class="nav-link" href="<?= base_url('feature/edit_quiz') ?>">Quiz</a>
                                    <a class="nav-link" href="<?= base_url('feature/edit_project') ?>">Project</a>
                                    <a class="nav-link" href="">Component</a>
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
                        <h1 class="mt-4">Edit Component 5</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard/admin') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('feature/edit_component') ?>">Component</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('component/edit_page_2') ?>">Component Page 2</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('component/edit_component_2') ?>">Edit Component</a></li>
                            <li class="breadcrumb-item active">Edit Component 5</li>
                        </ol>
                        <?= $this->session->flashdata('pesan'); ?>
                        <div class="card mb-4">          
                          <div class="card-body">
                            <h4>Edit Component 5</h4>
                            <form action="<?= base_url('component/component_11') ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" name="id" value="<?= $component['id'] ?>" hidden></input>                                        
                                            <label for="title_5" class="small">Nama</label>
                                            <input type="title_5" class="form-control" name="title_5" id="title_5" value="<?= $component['title_5'] ?>">

                                            <label class="small mb-1" for="jenis">Jenis</label>
                                            <select name="jenis" id="jenis" class="form-control">
                                                <option<?php if ($component['jenis'] == "Microcontroller"): ?> selected="selected"<?php endif; ?>>Microcontroller</option>                            
                                                <option<?php if ($component['jenis'] == "Sensor"): ?> selected="selected"<?php endif; ?>>Sensor</option>
                                                <option<?php if ($component['jenis'] == "Lainnya"): ?> selected="selected"<?php endif; ?>>Lainnya</option>
                                            </select>
                                            <small class="text-danger"><?= form_error('jawaban'); ?></small>

                                            <label for="link_5" class="small">Link</label>
                                            <input type="link_5" class="form-control" name="link_5" id="link_5" value="<?= $component['link_5'] ?>">

                                            <label class="small mb-1" for="desc_5">Deskripsi</label><textarea class="ckeditor" id="desc_5" name="desc_5" type="text"/><?= $component['desc_5'] ?></textarea><small class="text-danger"><?= form_error('desc_5'); ?></small>

                                            <label for="gambar" class="small">Gambar</label>
                                            <div class="custom-file mt-0">
                                                <input type="file" class="custom-file-input" name="picture_5" id="customFile">
                                                <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                                <img class="img-thumbnail mt-2 mb-2" style="max-width: 100%; height: auto;" class="mt-2" src="<?= base_url('assets/img/component/comp_2/') . $component['picture_5']; ?>"></img>

                                                <button type="submit" class="btn btn-info btn-block"><i class="fas fa-check"></i> Update</button>
                                            </div>
                                      </form>                            
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
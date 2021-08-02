<style type="text/css">
   /* Customize the label (the container) */
.radio {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 16px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.radio input[type="radio"]{
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.radio:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.radio input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.radio input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.radio .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
} 
</style>

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
      <div class="col-md-12">

        <h1 class="my-4 text-info">|  <span class="text-dark">Quiz Basic</span>          
        </h1>
        
        <div style="padding: 20px; margin-bottom: 50px; background-color: white; border: 1px solid #ddd5d5">

            <?php
            $conn = mysqli_connect("localhost", "root", "", "pkk_3");
        		$hasil=mysqli_query($conn, "SELECT * FROM soal WHERE status=1 AND id_quiz=1 ORDER BY RAND ()");
            $jumlah=mysqli_num_rows( $hasil);
            $urut=0;
            while($row =mysqli_fetch_array($hasil))
            {
              $id=$row["id"];
              $pertanyaan=$row["soal"];
              $pilihan_a=$row["opsi_a"];
              $pilihan_b=$row["opsi_b"];
              $pilihan_c=$row["opsi_c"];
              $pilihan_d=$row["opsi_d"]; 
              
              ?>
              <form name="form1" method="post" action="<?= base_url('quiz/result_quiz_1') ?>">
              <input type="hidden" name="id[]" value=<?php echo $id; ?>>
              <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
              <table>
                    <tr>
                        <td>                          
                          <div class="display-5"><h5 style="font-size: 16px"><?php echo $urut=$urut+1; ?><span class="text-info">. </span><?php echo "$pertanyaan"; ?></h5></div>
                        </td>
                    </tr>

                     <tr>                  
                        <td>
                          <div>
                            <label class="radio">
                              <strong style="font-size: 16px">A. </strong><span style="font-size: 16px"><?php echo "$pilihan_a";?></span>
                              <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </td>
                    </tr>

                     <tr>                  
                        <td>
                          <div>
                            <label class="radio">
                              <strong style="font-size: 16px">B. </strong><span style="font-size: 16px"><?php echo "$pilihan_b";?></span>
                              <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </td>
                    </tr>

                     <tr>                  
                        <td>
                          <div>
                            <label class="radio">
                              <strong style="font-size: 16px">C. </strong><span style="font-size: 16px"><?php echo "$pilihan_c";?></span>
                              <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> 
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </td>
                    </tr>

                    <tr>                  
                        <td>
                          <div>
                            <label class="radio">
                              <strong style="font-size: 16px">D. </strong><span style="font-size: 16px"><?php echo "$pilihan_d";?></span>
                              <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </td>
                    </tr>
                            
                          <?php
                          }
                          ?>
                    <tr>                      
                      <td>                     
                          <button class="badge badge-info" style="padding: 10px 30px 10px 30px" type="button" data-toggle="modal" data-target="#Finish">Finish
                          <button class="badge badge-secondary" style="padding: 10px 30px 10px 30px" type="button" data-toggle="modal" data-target="#Reset">Reset
                      </td>
                    </tr>

              </table>          
        </div>
   		</div>
	</div>
</div>
</div>

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

        <!-- Logout Modal -->
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

        <!-- Finish Modal -->
        <div class="modal fade" id="Reset" tabindex="-1" role="dialog" aria-labelledby="HapusLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editLabel">Konfirmasi Reset Quiz Basic</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">                        
                        Yakin ingin mereset jawaban yang sudah di isi ?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</button>
                        <a href=""><button  type="button" class="btn btn-info"><i class="fas fa-check"></i> Yakin</button></a>
                      </div>                    
                    </div>
                  </div>
                </div>

        <!-- Finish Modal -->
        <div class="modal fade" id="Finish" tabindex="-1" role="dialog" aria-labelledby="HapusLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editLabel">Konfirmasi Submit Quiz Basic</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">                        
                        Sudah yakin dengan jawaban yang sudah di isi ?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</button>
                        <button  type="submit" name="submit" value="Submit" class="btn btn-info"><i class="fas fa-check"></i> Yakin</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
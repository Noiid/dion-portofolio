<?php 
                        include 'admin/koneksi.php';    
                      if (isset($_SESSION['id_user'])) {
    $data = mysqli_query($mysqli, "SELECT * from user WHERE id_user='$_SESSION[id_user]'");
    $datashoww = mysqli_fetch_array($data);
                          ?>
                <a class="p-2 text-muted" href="user_profile.php"><?php echo $datashoww['username']; ?>, Profile</a>
                          

                          <?php
                      }
                      
                      

                  ?>
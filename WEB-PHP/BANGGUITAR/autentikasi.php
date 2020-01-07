<?php 

                      if (!isset($_SESSION['id_user'])) {
                        
                          ?>
                          <a class="btn btn-sm btn-outline-secondary" href="login.php">Sign in</a>

                          <?php
                      }else{

                        ?>
                          <a class="btn btn-sm btn-outline-secondary" href="user_logout.php">Sign out</a>
                        <?php
                      }
                      

                  ?>
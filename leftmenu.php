<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <?php
                    if($halaman=='dashboard'){
                  ?>
                  <li>
                      <a class="active" href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <?php
                    }
                    else {
                  ?>
                      <li>
                      <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <?php
                    }
                  ?>

                   <?php
                    if($halaman=='news'){
                  ?>
                  <li>
                      <a class="active" href="news.php">
                          <i class="fa fa-calendar"></i>
                          <span>News</span>
                      </a>
                  </li>
                  <?php
                    }
                    else {
                  ?>
                      <li>
                      <a href="news.php">
                          <i class="fa fa-calendar"></i>
                          <span>News</span>
                      </a>
                  </li>
                  <?php
                    }
                  ?>



                      <?php

                        if($parent=='dive'){

                      ?>
                      <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-anchor"></i>
                          <span>Dive Center</span>
                      </a>

                        
                        <ul class="sub">
                        <?php
                         if($halaman=='divecenter'){
                         ?>
                          <li class="active"><a  href="divecenter.php">Dive Center</a></li>
                          
                        

                        <?php
                          }
                          else {
                        ?>
                          
                          <li><a href="divecenter.php">Dive Center</a></li>
                        
                        <?php
                          }
                        ?>

                        <?php
                         if($halaman=='divecenter2'){
                         ?>
                       
                          <li class="active"><a href="divecenter2.php">Dive Center 2</a></li>
                    

                        <?php
                          }
                          else {
                        ?>
                          
                          <li><a href="divecenter2.php">Dive Center 2</a></li>
                        

                        <?php
                          }
                        ?>

                      </ul>

                      </li>

                      <?php
                        }
                        else {

                      ?>

                      <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-anchor"></i>
                          <span>Dive Center</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="divecenter.php">Dive Center</a></li>
                          <li><a  href="divecenter2.php">Dive Center 2</a></li>
                          
                      </ul>
                      </li>


                      <?php

                        }

                      ?>


       

                  <?php
                      if($halaman=='batee_tokong'){
                  ?>
                  <li class="sub-menu">
                  
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-globe"></i>
                          <span>Dive Site</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="batee_tokong.php">Batee Tokong (2)</a></li>
                          <li><a  href="login.html">Pulau Seulako (3)</a></li>
                          
                      </ul>
                  </li>
                  <?php
                    }
                    else {
                  ?>

                      <li class="sub-menu">
                  
                      <a href="javascript:;" >
                          <i class="fa fa-globe"></i>
                          <span>Dive Site</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="batee_tokong.php">Batee Tokong (2)</a></li>
                          <li><a  href="login.html">Pulau Seulako (3)</a></li>
                          
                      </ul>
                  </li>

                  <?php 
                }

                  ?>
                  <li class="sub-menu">
                      <a href="login.php" >
                          <i class="fa fa-book"></i>
                          <span>Log Dive</span>
                      </a>
                      
                  </li>
                

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
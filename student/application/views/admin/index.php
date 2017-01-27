<?php
$totalstd=$this->db->select('count(*) as total')->from('studentinfo')->get()->row()->total;
$totaltea=$this->db->select('count(*) as total')->from('teachers')->get()->row()->total;
$role=$this->session->userdata('role');
$cash=$this->db->select('sum(total_received) as total')->from('student_ledger')->get()->row()->total;
?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
              <div class="row state-overview">
			    <?php  if($role=='accounts'):?>
			   <div class="col-lg-4 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="fa fa-usd fa-5x" aria-hidden="true"></i>
                          </div>
                          <div class="value">
                              <h1 class=" ">
                                 <?php echo number_format($cash,2)?>
                              </h1>
                              <p>Cash Amount</p>
                          </div>
                      </section>
                  </div>
				  <?php endif;?>
                  <div class="col-lg-4 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-users" aria-hidden="true"></i>
                          </div>
                          <div class="value">
                              <h1 class="">
                                  <?php echo $totalstd?>
                              </h1>
                              <p>Total Student</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-user" aria-hidden="true"></i>
                          </div>
                          <div class="value">
                              <h1 class=" ">
                                  <?php echo $totaltea?>
                              </h1>
                              <p>Teacher</p>
                          </div>
                      </section>
                  </div>
				  <?php  if($role=='admin'):?>
                     <div class="col-lg-4 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="fa fa-tint" aria-hidden="true"></i>
                          </div>
                          <div class="value">
                              <h1 class=" ">
                                 <?php echo $totalstd?>
                              </h1>
                              <p>Blood Doner</p>
                          </div>
                      </section>
                  </div>
				  <?php endif;?>
              </div>
              <!--state overview end-->

          </section>
      </section>
      <!--main content end-->
      
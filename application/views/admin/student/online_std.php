
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading clearfix">
                              <h3 class="pull-left text-left">Online Students Information</h3>
                              
                          </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-striped dataTable" id="example">
                                      <thead>
                                      <tr>
                                          <th>Nr.</th>
                                          <th>Picture</th>
                                          <th>Name</th>
                                          <th>department</th>
                                          <th>Session</th>
                                          <th>Mobile</th>
                                          <th>Gender</th>
                                          <th>Father</th>
                                          <th>Mother</th>
                                          <th>Exam Name</th>
                                          <th>Group</th>
                                          <th>Institute</th>
                                          <th>Roll</th>
                                          <th>Reg</th>
                                          <th>Passing Year</th>
                                          <th>GPA</th>
     
                                      </tr>
                                      </thead>
                                      
                                      <tbody>
                                      <?php

									  $nr=1;foreach ($info as $s): ?>
                                      <tr>
                                          <td><?php echo $nr++; ?></td>
										  <td>
                                            <div class="follow-ava"> 
                                                 <?php if(!strlen($s->upload_pic)):?> <img src="http://localhost/mp_web_2016/assets/img/default.png" alt=""> <?php else:?>
												 <img src="uploads/student/<?php echo $s->upload_pic; ?>" alt=""> <?php endif;?>
                                             </div>
                                          </td>
                                          <td><?php echo $s->fullname; ?></td>
                                          <td><?php echo $s->dept_name; ?></td>
                                          <td><?php echo $s->session_year; ?></td>
                                          <td><?php echo $s->mobile; ?></td>
                                          <td><?php echo $s->gender; ?></td>
                                          
                                          <td><?php echo $s->father; ?></td>
                                          <td><?php echo $s->mother; ?></td>                  
                                          <td><?php echo $s->exam_name; ?></td>
                                          <td><?php echo $s->exam_group; ?></td>
                                          <td><?php echo $s->institute; ?></td>
                                          <td><?php echo $s->roll; ?></td>
                                          <td><?php echo $s->reg; ?></td>
                                          <td><?php echo $s->passing_year; ?></td>
                                          <td><?php echo $s->gpa; ?></td>

                                      </tr>
                                      <?php endforeach; ?>
                                </tbody>
                          </table>
                                </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

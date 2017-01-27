
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading clearfix">
                              <h3 class="pull-left text-left">Student Information</h3>
                              <div class="text-right">
                                  <a href="admin/addstudent" class="btn btn-info"><i class="fa  fa-plus-circle"></i> Add Student</a>
                              </div>
                          </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-striped dataTable" id="example">
                                      <thead>
                                      <tr>
                                          <th>Nr.</th>
                                          <th>Roll</th>
                                          <th>Photo</th>
                                          <th>Name</th>
                                          <th>Department</th>
                                          <th>Password</th>
                                          <th>Mobile</th>
                                          <th>Email</th>
                                          <th >Action</th>
                                      </tr>
                                      </thead>
                                      
                                      <tbody>
                                      <?php $nr=1;foreach ($row as $s): ?>
                                      <tr>
                                          <td><?php echo $nr++; ?></td>
                                          <td><?php echo $s->roll_no; ?></td>
                                          <td>
                                            <div class="follow-ava"> 
                                                 <?php if(!strlen($s->image)):?> <img src="http://localhost/mp_web_2016/assets/img/default.png" alt=""> <?php else:?>
												 <img src="uploads/student/<?php echo $s->image; ?>" alt=""> <?php endif;?>
                                             </div>
                                          </td>
                                          <td><?php echo $s->name; ?></td>
                                          <td><?php echo $s->dept_name; ?></td>
                                          <td><?php echo $s->password; ?></td>
                                          <td><?php echo $s->mobile; ?></td>
                                          <td><?php echo $s->email; ?></td>
                                        <td width="80">
                                              <a href="admin/editstudent/<?php echo $s->id ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                              <a href="admin/delete_student/<?php echo $s->id ?>" class="btn btn-danger btn-xs confirm"><i class="fa fa-trash-o "></i></a>
                                          </td>
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


      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading clearfix">
                              <h3 class="pull-left text-left">Offered Subject Information</h3>
                              <div class="text-right">
                                  <a href="admin/addsubject" class="btn btn-info"><i class="fa  fa-plus-circle"></i> Add Subject</a>
                              </div>
                          </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-striped dataTable" id="example">
                                      <thead>
                                      <tr>
                                          <th>Nr.</th>      
                                          <th>Session</th>
                                          <th>Department</th>
                                          <th>Semester</th>
                                          <th>Number of Subjects</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                      
                                      <tbody>
                                      <?php $nr=1;foreach ($row as $s): ?>
                                      <tr>
                                          <td><?php echo $nr++; ?></td>            
                                          <td><?php echo $s->sestitle; ?></td>
										  <td><?php echo $s->dept_name; ?></td>										  
										  <td><?php echo $s->sem_title; ?></td>										  
										  <td><?php echo $s->total; ?></td>										  
                                        <td width="80">
                                              <a href="admin/editsubject/<?php echo $s->id ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                             
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

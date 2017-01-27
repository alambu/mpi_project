
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading clearfix">
                              <h3 class="pull-left text-left">Session Information</h3>
                              <div class="text-right">
                                  <a href="admin/addsession" class="btn btn-info"><i class="fa  fa-plus-circle"></i> Add Session</a>
                              </div>
                          </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-striped dataTable" id="example">
                                      <thead>
                                      <tr>
                                          <th>Nr.</th>      
                                          <th>Session Title</th>
                                          <th>Status</th>
                                          <th >Action</th>
                                      </tr>
                                      </thead> 
                                      <tbody>
                                      <?php $nr=1;
									  foreach ($row as $s): 
									  ?>
                                      <tr>
                                          <td><?php echo $nr++; ?></td>            
                                          <td><?php echo $s->title; ?></td>									  
                                          <td><?php echo ($s->status==1 ? 'Enable':'Disabled'); ?></td>									  
                                        <td width="80">
                                              <a href="admin/editsession/<?php echo $s->id ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                              <a href="admin/delete_session/<?php echo $s->id ?>" class="btn btn-danger btn-xs confirm"><i class="fa fa-trash-o "></i></a>
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

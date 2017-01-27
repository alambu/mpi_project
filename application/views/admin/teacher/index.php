  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading clearfix">
                              <h3 class="pull-left text-left">Teacher</h3>
                              <div class="text-right">
                                  <a href="admin/addteacher" class="btn btn-info"><i class="fa  fa-plus-circle"></i> Add Teacher</a>
                              </div>
                          </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-striped dataTable" id="example">
                                      <thead>
                                      <tr>
                                          <th>Photo</th>
                                          <th>Name</th>
                                          <th>Mobile</th>
                                          <th>Email</th>
                                          <th>Department</th>
                                          <th >Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach($row as $r): ?>
                                          <tr>
                                              <td>
                                              <div class="follow-ava">
                                                  <img src="uploads/<?php echo $r->image; ?>" alt="">
                                              </div>
                                              </td>
                                              <td><?php echo $r->name; ?></td>
                                              <td><?php echo $r->mobile; ?></td>
                                              <td><?php echo $r->email; ?></td>
                                              <td><?php echo $r->deppt; ?></td>
                                            <td>
                                                  <a  href="admin/editteacher/<?php echo $r->id ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                                  <a href="admin/delete_teacher/<?php echo $r->id ?>" class="confirm btn btn-danger btn-xs" ><i class="fa fa-trash-o "></i></a>
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

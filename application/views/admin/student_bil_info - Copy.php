<!--main content start-->

      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading clearfix">
                              <h3 class="pull-left text-left">Student Bill</h3>
                              <div class="text-right">
                                  <a href="admin/student_bill" class="btn btn-info"><i class="fa  fa-plus-circle"></i> Add Genearte Student Bill</a>
                              </div>
                          </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-striped dataTable" id="example">
                                      <thead>
                                      <tr>
									  
                                          <th>Nr.</th>
                                          <th>Add. Fee</th>
                                          <th>Board Reg.Fee</th>
                                          <th>Board Admission From</th>
                                          <th>Sylabus</th>
                                          <th>Mid Term/Board/Model Test Fee</th>
                                          <th>Library</th>
                                          <th>Id Card</th>
                                          <th>Student Welfare</th>
                                          <th>Fine</th>
                                          <th>Semester Fee</th>
                                          <th>Other</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
									  $nr=1;foreach($row as $r): ?>
                                          <tr>
                                              
                                              <td><?php echo $nr++; ?></td>
                                              <td><?php echo $r->adfee; ?></td>
                                              <td><?php echo $r->brf; ?></td>
                                              <td><?php echo $r->baf; ?></td>
                                              <td><?php echo $r->syllabus; ?></td>
                                              <td><?php echo $r->mbmfee; ?></td>
                                              <td><?php echo $r->library; ?></td>
                                              <td><?php echo $r->idcard; ?></td>
                                              <td><?php echo $r->swelfare; ?></td>
                                              <td><?php echo $r->fine; ?></td>
                                              <td><?php echo $r->sfee ?></td>
                                              <td><?php echo $r->other; ?></td>
                                            <td>
                                                  <a  href="admin/edistudent_bill/<?php echo $r->id ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil">Edit</i></a>
                                                <a href="admin/delete_student_bill/<?php echo $r->id ?>" class="confirm btn btn-info btn-xs" ><i class="fa fa-sort-amount-asc ">Receive</i></a>
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

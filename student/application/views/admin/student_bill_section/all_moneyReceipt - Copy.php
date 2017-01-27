
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
					 
                          <header class="panel-heading">
                              <h3>Student All Money Receipt</h3>
							  <button class="btn btn-info" onclick="window.location.reload();" style="float:right;position:relative;top:-30px;">Reload</button>
                          </header>
                          <div class="panel-body">
					<div class="clearfix"></div>
					<div class="adv-table">
									<b>Payment Details</b>
                                    <table class="display table table-striped dataTable" id="example">
                                      <thead>
                                      <tr>
                                          <th>Nr.</th>
                                          <th>Voucher</th>
                                          <th>Roll</th>
                                          <th>Department</th>
                                          <th>Semester</th>
                                          <th>Semester Fee</th>
                                          <th>Admission Fee</th>
                                          <th>Others</th>
                                          <th>Re-Exam Fee</th>
                                          <th>Received</th>
                                          <th>Payment Date</th>
                                          <th>Remarks</th>           
                                          <th>Money Receipt</th>           
                                      </tr>
									  
                                      </thead>
                                      <tbody>
                                        <?php $r=1; foreach($paid as $p):?>
										<tr>
										  <td><?php echo $r++?></td>
										  <td><?php echo $p->voucher_no?></td>
										  <td><?php echo $p->roll_no?></td>
										  <td><?php $dept=$this->lib->getDeptName($p->roll_no);echo $dept->dept_name;?></td>
										  <td><?php echo $p->semester_name?></td>
										  <td><?php echo $p->semester_fee?></td>
										  <td><?php echo $p->admission_fee?></td>
										  <td><?php echo $p->others_fee?></td>
										  <td><?php echo $p->re_exam_fee?></td>
										  <td><?php echo $p->total_received?></td>
										  <td><?php echo date('d M Y',strtotime($p->payment_date))?></td>
										    <td><?php echo $p->remarks?></td>
										    <td><a href="admin/student_moneyReceipt/<?php echo $p->voucher_no;?>" target="_blank"><i class="glyphicon glyphicon-print"></i>&nbsp;<b>Print</b></a></td>
										</tr>
										<?php endforeach;?>
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

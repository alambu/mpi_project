
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
                                      <tr style="font-size:12px;">
                                          <th>Nr.</th>
                                          <th>Voucher</th>
                                          <th>Roll</th>
                                          <th>Dept.</th>
                                          <th>Semester</th>
                                          <th>Model Test</th>
                                          <th>Service Charge</th>
                                          <th>Others</th>
                                          <th>Re-Exam Fee</th>
                                          <th>Total Bill</th>
                                          <th>Received</th>
                                          <th>Payment Date</th>
                                          <th>Remarks</th>           
                                          <th>Money Receipt</th>           
                                          <th>Action</th>           
                                      </tr>
									  
                                      </thead>
                                      <tbody>
                                        <?php $r=1; foreach($paid as $p):?>
										<tr>
										  <td><?php echo $r++?></td>		  
										  <td><?php echo $p->voucher_no?></td>
										  <td><?php echo $p->roll_no?></td>
										  <td><?php echo $this->lib->detpName($p->dept_id)->dept_name?></td>
										  <td><?php echo $p->semester_name?></td>
										  <td><?php echo $p->model_test?></td>
										  <td><?php echo $p->service_charge?></td>
										  <td><?php echo $p->others_fee?></td>
										  <td><?php echo $p->re_exam_fee?></td>
										  <td><?php echo $p->total_bill?></td>
										  <td><?php echo $p->total_received?></td>
										  <td><?php echo date('d M Y',strtotime($p->payment_date))?></td>
										    <td><?php echo $p->remarks?></td>
										    <td><a href="admin/student_moneyReceipt/<?php echo $p->voucher_no;?>" target="_blank"><i class="glyphicon glyphicon-print"></i>&nbsp;<b>Print</b></a>
											</a>
											
											</td> 
											<td><a href="admin/delete_moneyReceipt/<?php echo $p->voucher_no;?>" onclick="return confirm('Are you want to Delete ?');" style="width:90px;"><i class="glyphicon glyphicon-remove"></i>&nbsp;<b>Delete</b></a>
											</td>
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

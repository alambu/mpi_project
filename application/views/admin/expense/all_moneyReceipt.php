
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3> All Expense Voucher</h3>
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
										  <th>Voucher Date</th>
                                          <th>Voucher No</th>
                                          <th>Purpose</th>
                                          <th>Narration</th>           
                                          <th>Amount</th>           
                                          <th>Action</th>  
                                      </tr>  
                                  
									  
                                      </thead>
                                      <tbody>
                                       <?php $paid=$this->db->get("expense_ledger")->result();$r=1; foreach($paid as $p):?>
										<tr>
										   <td><?php echo $r++?></td>
										  <td><?php echo date('d/m/Y',strtotime($p->voucher_date))?></td>
										  <td><?php echo $p->voucher_no?></td>
										  <td><?php echo $this->lib->expName($p->expense_id)?></td>
										  <td><?php echo $p->narration?></td>
										  <td><?php echo $p->amount?></td>  
											<td><a href="admin/delete_debit_vouchers/<?php echo $p->voucher_no;?>" onclick="return confirm('Are you want to Delete ?');" style="width:90px;"><i class="glyphicon glyphicon-remove"></i>&nbsp;<b>Delete</b></a>
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

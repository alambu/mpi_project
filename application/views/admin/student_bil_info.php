<!--main content start-->
<?php
$input=$this->input->post(null);
$this->session->set_flashdata('session',$input['session']);
$this->session->set_flashdata('dept_id',$input['dept_id']);

?>
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading clearfix">
                              <h3 class="pull-left text-left">Student Bill Section</h3>
                         <div class="form">
						 <form action="" method="post">
						  <div class="padding-zero col-md-12">
						    <div class="form-group p-left0 col-sm-4 ">
								  <label class="">Session</label>
									<select name="session" class="form-control" placeholder="Session" data-bv-notempty="true" data-bv-field="Session is required">
										<option value="">-Select-</option>
									   <?php $session=$this->lib->getSession();
									   foreach($session as $sess):
									   ?>
										<option value="<?php echo $sess->id?>" <?php if($sess->id==$input['session']): echo "SELECTED";endif;?>><?php echo $sess->title?></option>
									   <?php endforeach;?>
									</select>

                                  </div>
								<!--
								<div class="form-group p-left0 col-sm-4 ">
                                                  <label class="">Semester</label>
                                                <?php $sP = $this->db->get('semester')->result(); ?>
                                                <select name="semster_id" class="form-control" placeholder="Semester" data-bv-notempty="true" data-bv-field="Semester is required">
                                                    <option value="">-Select-</option>
                                                    <?php foreach ( $sP as $s): ?>
                                                    <option value="<?php echo $s->id; ?>"><?php echo $s->semester_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>

                                          </div>	-->	  
						    <div class="form-group p-left0 col-sm-4">
                                              <label class="">Department</label>
                                               <?php $dP = $this->db->get('department')->result(); ?>
                                                <select name="dept_id" class="form-control" placeholder="Department" data-bv-notempty="true" data-bv-field="Department is required">
                                                    <option value="">-Select-</option>
                                                    <?php foreach ( $dP as $d): ?>
                                                    <option value="<?php echo $d->id; ?>" <?php if($d->id==$input['dept_id']): echo "SELECTED";endif;?>><?php echo $d->dept_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
												
                                </div>
								
								 <div class="form-group p-left0 col-sm-4">
								 <br/>
                                            <button type="submit" class="btn btn-info">
								<span class="glyphicon glyphicon-search"></span> Search
								</button>
												 <button type="button" onClick="history.go(0)" class="btn btn-primary">
								<span class="glyphicon glyphicon-refresh"></span> Refresh
								</button>
												
                                </div>
								
								
								</div>
							</form>	
						 </div>
                          </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-striped dataTable" id="example">
                                      <thead>
                                      <tr>
                                          <th>Nr.</th>
                                          <th>Department</th>
                                          <th>Name</th>
                                          <th>Roll No</th>
                                          <th>Reg. No</th>  
                                          <th>Tution Fee</th>  
                                          <th>Payment Details</th>
                                       
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
									  $nr=1;foreach($row as $r): ?>
                                          <tr>
                                              
                                              <td><?php echo $nr++; ?></td>
                                              <td><?php  $dept=$this->lib->get_deptInfo($r->dept_id);echo $dept->dept_name;?></td>
                                              <td><?php echo $r->name;?></td>
                                              <td><?php echo $r->roll_no;?></td>
                                              <td><?php echo $r->reg_no;?></td>
                                            <td>
                                                  <a  href="admin/edistudent_bill/<?php echo $r->id ?>" class="btn btn-primary"  data-toggle="modal" data-target="#myModal" onclick="customCampus('<?php echo $r->id;?>');"><i class="fa fa-pencil">Setup</i></a>  
                                              </td>
											 
											  <!--<td><a href="admin/bill_collection/<?php echo $r->id ?>"  class="btn btn-primary"  data-toggle="modal" data-target="#myModal2" onclick="collectBill('<?php echo $r->roll_no;?>');"><i class="fa fa-sort-amount-asc ">Collection</i></a></td>
											  -->
											  
											   <td><a href="admin/bill_collection_reports/<?php echo $r->roll_no ?>/<?php echo $r->name?>/<?php echo $r->dept_id?>/<?php echo $r->session?>" target='_blank' class="btn btn-primary"><i class="fa fa-sort-amount-asc ">View</i></a></td>
											   
											  
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
	  
	  <script>

function customCampus(stdId){
	 //alert(cusId);
	$.ajax({
		url:"index.php/admin/setup_tution_fee",
		data:{stdId:stdId},
		type:"POST",
		success:function(hr){
			var d=hr.split("%+**%%");
	         //alert(d);exit;
			document.getElementById('student_id').value=stdId;
			document.getElementById('roll_no').value=d[0];
			document.getElementById('reg_no').value=d[1];
			document.getElementById('total_payable_fee').value=d[2];
			document.getElementById('admission_fee').value=d[3];
			document.getElementById('per_semester_payable').value=d[4];
			document.getElementById('session').value=d[6];
			document.getElementById('dept_id').value=d[7];
			if(d[5]==2){
				document.getElementById('status').innerHTML="<option value='2'>Disable</option><option value='1'>Enable</option>";
			}else{
				document.getElementById('status').innerHTML="<option value='1'>Enable</option><option value='2'>Disable</option>";
			}
			
	
		}
	});
	
}
	
function collectBill(cusId){
	 //alert(cusId);
	$.ajax({
		url:"index.php/admin/semester_fee",
		data:{cusId:cusId},
		type:"POST",
		success:function(hr){
			//alert(hr); 
			//exit;
			var d=hr.split("%+**%%");
			document.getElementById('roll_no_fee').value=d[0];
			document.getElementById('semester_fee').value=d[1];			
			document.getElementById('total_paid').value=d[2];			
			document.getElementById('total_due').value=d[3];			
		}
	});
	
}

function details(cusId){
	 //alert(cusId);
	$.ajax({
		url:"index.php/admin/payment_details",
		data:{cusId:cusId},
		type:"POST",
		success:function(hr){
			
			document.getElementById('body_content').innerHTML=hr;
						
		}
	});
	
}


function intotal(a,b)
{
	
	document.getElementById('total').value=parseInt(a)+parseInt(b);
}	
function calcSemesterFee(fee)
{
	document.getElementById('per_semester_payable').value=parseInt(fee)/8;
}	
  </script>

	   <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Setup Student Tution Fee</h4>
			</div>
			<div class="modal-body" id="already_setup">
				<form action="admin/setup_tution_fee_sub" method="post">
					
					<div class="form-group" >
						<label class="col-sm-4 text-right">Roll No</label>
					   <div class="col-sm-8" >
							<input type="text" name="roll_no" class="form-control"  readonly id="roll_no"/>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group" style="margin-top:10px;" >
						<label class="col-sm-4 text-right">Reg No</label>
					   <div class="col-sm-8" >
							<input type="text" name="reg_no" class="form-control" readonly id="reg_no"/>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group" style="margin-top:10px;">
						<label class="col-sm-4 text-right">Total Semester Fee</label>
					   <div class="col-sm-8" >
							<input type="text" name="total_payable_fee" id="total_payable_fee" onchange="calcSemesterFee(this.value);" class="form-control" required />
						</div>
					</div>			
					<div class="clearfix"></div>
					<div class="form-group" style="margin-top:10px;" >
						<label class="col-sm-4 text-right">Per Semester Fee</label>
					   <div class="col-sm-8" >
							<input type="text" name="per_semester_payable" readonly class="form-control" required id="per_semester_payable"/>
						</div>
					</div>
	              <div class="clearfix"></div>
					<div class="form-group" style="margin-top:10px;" >
						<label class="col-sm-4 text-right">Admission Fee</label>
					   <div class="col-sm-8" >
					   <input type="hidden" name="student_id" id="student_id"/>
					   <input type="hidden" name="session" id="session"/>
					   <input type="hidden" name="dept_id" id="dept_id"/>
							<input type="text" name="admission_fee" class="form-control" required id="admission_fee"/>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group" style="margin-top:10px;" >
						<label class="col-sm-4 text-right">Status</label>
					   <div class="col-sm-8" >
							<select name="status" class="form-control" required id="status">
							</select>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group" >
						<div class="col-sm-offset-4 col-sm-2" style="margin-top:10px;" >   
							
							<button type="submit"  class="btn btn-success"><span class="glyphicon glyphicon-send"></span> SETUP</button>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
  
   <!-- Modal -->
   <!------Per semester tution fee collect----->
<div class="modal fade" id="myModal2" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Semester Fee Collection</h4>
			</div>
			<div class="modal-body">
				<form action="admin/semester_fee_sub" method="post">
				<div class="form-group" style="margin-top:10px;" >
					<label class="col-sm-4 text-right">Total Paid</label>
				   <div class="col-sm-8" >
						<input type="text"  style="color:red;" class="form-control"  readonly id="total_paid"/>
					</div>
				</div>
					<div class="clearfix"></div>
					<div class="form-group" style="margin-top:10px;" >
						<label class="col-sm-4 text-right">Total Due</label>
					   <div class="col-sm-8" >
							<input type="text"  class="form-control" style="color:red;"  readonly id="total_due"/>
						</div>
					</div>
					
					<div class="clearfix"></div>
					<div class="form-group" style="margin-top:10px;" >
						<label class="col-sm-4 text-right">Roll No</label>
					   <div class="col-sm-8" >
							<input type="text" name="roll_no" class="form-control"  readonly id="roll_no_fee"/>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group" style="margin-top:10px;" >
					<?php $sP = $this->db->get('semester')->result(); ?>
						<label class="col-sm-4 text-right">Semester</label>
					   <div class="col-sm-8" >
						<select name="semester_id" class="form-control" placeholder="Semester" data-bv-notempty="true" data-bv-field="Semester is required" required>
						<option value="">-Select-</option>
						<?php foreach ( $sP as $s): ?>
						<option value="<?php echo $s->id; ?>"><?php echo $s->semester_name; ?></option>
						<?php endforeach; ?>
						</select>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group" style="margin-top:10px;" >
						<label class="col-sm-4 text-right">Per Semester Fee</label>
					   <div class="col-sm-8" >
							<input type="text" name="semester_fee"  id="semester_fee" class="form-control" required />
					 </div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group" style="margin-top:10px;" >
						<label class="col-sm-4 text-right">Others</label>
					   <div class="col-sm-8" >
							<input type="text" name="others" id="others" class="form-control" onKeyup="intotal(semester_fee.value,this.value)" required />
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group" style="margin-top:10px;" >
						<label class="col-sm-4 text-right">Total</label>
					   <div class="col-sm-8" >
							<input type="text" name="total" id="total" class="form-control" readonly  />
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group" style="margin-top:10px;" >
						<label class="col-sm-4 text-right">Receive Amount</label>
					   <div class="col-sm-8" >
							<input type="text" name="receive_amount" class="form-control" required />
						</div>
					</div>
				
	                  <div class="clearfix"></div>
					<div class="form-group" style="margin-top:10px;" >
						<label class="col-sm-4 text-right">Payment Date</label>
					   <div class="col-sm-8" >
							<input type="text" name="payment_date" class="form-control default-date-picker"  placeholder="dd/mm/yy" data-bv-notempty="true"  data-bv-notempty-message="Payment Date is Required" required>
						</div>
					</div>
						<div class="clearfix"></div>
					<div class="form-group" style="margin-top:10px;" >
						<label class="col-sm-4 text-right">Remarks</label>
					   <div class="col-sm-8" >
							<input type="text" minlength="1" name="remarks" class="form-control" required />
						</div>
					</div>
					
					<div class="clearfix"></div>
					<div class="form-group" >
						<div class="col-sm-offset-4 col-sm-2" style="margin-top:10px;" >   
							
							<button type="submit"  class="btn btn-success"><span class="glyphicon glyphicon-send"></span> Submit</button>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
   <!-- Modal -->
   <!------Per semester tution fee collect----->
<div class="modal fade" id="myModal3" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Payment History</h4>
			</div>
			<div class="modal-body" style="width:100%"> 
				 <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-striped dataTable" id="example">
                                      <thead>
                                      <tr>
                                          <th>Nr.</th>
                                          <th>Date</th>
                                          <th>Account</th>
                                          <th>Voucher</th>    
                                          <th>Semester</th>
										 <th>Amount</th>
                                      </tr>
                                      </thead>
                                      <tbody id="body_content">
                                      
                                    </tbody>
                          </table>
                                </div>
                          </div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
  

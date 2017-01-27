<?php $input=$this->input->post(null);
extract($input);
?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-10">
                      <section class="panel">
					  <script>
		 function calc_semester_fee(semester_id,roll_no){
		 
        $.ajax({
                url:"index.php/admin/check_semester_exist",				
                data:{semester_id:semester_id.trim(),roll_no:roll_no},
                type:"POST",
                success:function(data){	
				// alert(data);exit;
					if(data==1){	
					
						document.getElementById("nodue").value="-1";
						document.getElementById("semester_fee").value="0";
						document.getElementById('sub_total').value="0";
					}
					else if(data==0){											
						
						document.getElementById("nodue").value="0";	
						var show=document.getElementById("semester_fee").value=<?php echo $info->per_semester_payable?>;	
						document.getElementById('sub_total').value=show;
					}	
                }
            });
		 }
	 
		 function calc()
					  {
						  var sub_total=0,per_semester_fee,semester_due;
						  var nodue=document.getElementById('nodue').value;
                         per_semester_fee=document.getElementById('per_semester_fee').value;  
         					if(nodue==-1){
							per_semester_fee=0;	
							} else{
                             per_semester_fee=per_semester_fee;
				
							}
							 
							alert(<?php echo strlen($info->semeter_due);?>);exit;
						<?php if(strlen($info->semeter_due)<1):?>
                         semester_due="0" 
                       <?php else:?>	
					  semester_due=document.getElementById('semester_due').value;
                        <?php endif?>							
                        var admission_due=document.getElementById('admission_due').value;   
                        var others=document.getElementById('others').value;   
                        var re_exam_fee=document.getElementById('re_exam_fee').value;             						
						sub_total=parseFloat(per_semester_fee)+parseFloat(semester_due)+parseFloat(admission_due)+parseFloat(others)+parseFloat(re_exam_fee);
						document.getElementById('sub_total').value=sub_total;
					  }
					  </script>
                          <header class="panel-heading">
                              <h3>Student Bill Collection</h3>
							  <button class="btn btn-info" onclick="window.location.reload();" style="float:right;position:relative;top:-30px;">Reload</button>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                 <form action="admin/student_bill_collection" method="post">
								 
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
								
							<div class="form-group p-left0 col-sm-2">
							  <label class="">Roll No</label>
							   <input type="text" name="roll_no" class="form-control" value="<?php echo $roll_no?>"   id="roll_no" required />
								
                                </div>
								
					  <div class="form-group p-left0 col-sm-2">
							 <label class=""></label>
							   <input type="submit" name='filter' class="btn btn-primary form-control" onclick='this.form.submit()' value='Filter'/>
								
                                </div>
							</form>	
						<form action="admin/student_bill_collection" method="post" id="fromvalid">	
                    
					<input type="hidden" name="nodue"  id="nodue"/>
													
						<div class="form-group p-left0 col-sm-4">
						<label class="">Admission Fee</label>
						<input type="text"  class="form-control" readonly  value="<?php echo $info->admission_fee?>"/>
						</div>
                      <div class="form-group p-left0 col-sm-4">
							<label class="">Total Tution Fee</label>
							<input type="text" name="total_tution_fee" class="form-control" readonly   value="<?php echo $info->total_payable_fee?>"/>
						</div>
                      <div class="form-group p-left0 col-sm-4">
							<label class="">Per Semester Fee</label>
							<input type="text" name="per_semester_fee" id="per_semester_fee"  class="form-control" readonly   value="<?php echo $info->per_semester_payable?>"/>
						</div>
						
                        <div class="form-group p-left0 col-sm-4">
							  <label class="">Semester</label>
							   <?php $sdP = $this->db->get('semester')->result(); ?>
								<select name="semester_id" class="form-control" onchange="return calc_semester_fee(this.value,roll_no.value)" required>
									<option value="">-Select-</option>
									<?php foreach ( $sdP as $d): ?>
									<option value="<?php echo $d->id; ?>" <?php if($d->id==$input['semester_id']): echo "SELECTED";endif;?>><?php echo $d->semester_name; ?></option>
									<?php endforeach; ?>
								</select>
								
                                </div>
						<div class="form-group p-left0 col-sm-4">
							<label class="">Previous semester Due</label>
							<input type="text" name="semester_due" class="form-control"  id="semester_due" readonly   value="<?php if(strlen($info->semeter_due)>0):$dfee=$info->per_semester_payable;else:$dfee=$info->semester_due;endif; echo $dfee;?>"/>
						</div>
                   <div class="form-group p-left0 col-sm-4">
							<label class="">Admission Fee Due</label>
							<input type="text" name="admission_due" class="form-control" id="admission_due" readonly   value="<?php  if(strlen($info->admission_due)<1):$afee=$info->admission_fee;else:$afee=$info->admission_due;endif; echo $afee;?>"/>
						</div>
<div class="form-group p-left0 col-sm-4">
							<label class="">ID Card/Sylabus/Fine/Others</label>
							<input type="text" name="others" class="form-control" id="others" onchange="return calc()"  value="" required/>
						</div>
<div class="form-group p-left0 col-sm-4">
							<label class="">Re-Exam Fee</label>
							<input type="text" name="re_exam_fee" id="re_exam_fee" class="form-control"  onchange="return calc()" value="" required />
						</div>
               <div class="form-group p-left0 col-sm-3">
							<label class="">Sub Total</label>
							<input type="text" name="sub_total" id="sub_total" class="form-control"   value=""/>
						</div>
<div class="form-group p-left0 col-sm-4">
							<label class="">Receive Semester Fee</label>
							<input type="text" name="semester_fee_rec" class="form-control" required  />
						</div>
              <div class="form-group p-left0 col-sm-4">
							<label class="">Receive Admission Fee</label>
							<input type="text" name="admission_fee_rec" class="form-control" <?php if($info->admission_due<1 || strlen($info->admission_due)<1): "readonly";else: echo "required";endif;?>  />
						</div>
                     <div class="form-group p-left0 col-sm-4">
							<label class="">Payment Date</label>
							
							<input type="text" name="payment_date" class="form-control default-date-picker"  placeholder="mm/dd/yy" data-bv-notempty="true"  data-bv-notempty-message="Payment Date is Required">
						
						</div>
                    <div class="form-group p-left0 col-sm-12">
						<label class="">Remarks</label>
						<input type="text" name="remarks" class="form-control" required />
					</div>

					<div class="clearfix"></div>
					<div class="form-group" >
						<div class="col-sm-offset-4 col-sm-2" style="margin-top:10px;" >   
							<input type="hidden" name="roll_no" value="<?php echo $roll_no;?>"/>
							<input type="hidden" name="semester_fee" id="semester_fee" value=""/>
						
							<button type="submit"  name="received" class="btn btn-success"><span class="glyphicon glyphicon-send"></span> Received</button>
						</div>
					</div>
				</form>
				
               </div>
			   
					<div class="clearfix"></div>
					<div class="adv-table">
									<b>Payment Details</b>
                                    <table class="display table table-striped dataTable" id="example">
                                      <thead>
                                      <tr>
                                          <th>Nr.</th>
                                          <th>Voucher</th>
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

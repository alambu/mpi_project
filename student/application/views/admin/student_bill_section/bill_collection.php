<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <base href="<?php echo base_url(); ?>">
    <link rel="shortcut icon" href="assets/images/mpilogo.png">
     <title>Mirpur Polytechnic Institute</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/admin/assets/bootstrapValidator/css/bootstrapValidator.min.css" rel="stylesheet">
    <link href="assets/admin/assets/bootstrap-datepicker/css/datepicker.css" rel="stylesheet">
    <link href="assets/admin/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet">
    <link href="assets/admin/assets/data-tables/DT_bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="assets/admin/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="assets/admin/css/style.css" rel="stylesheet">
    <link href="assets/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
        <script src="assets/admin/js/jquery.js"></script>
  </head>
  <body>
  <section id="container" >
      <!--header start-->
      <?php include('toast.php'); ?>

<?php 
$input=$this->input->post(null);
extract($input);
extract($this->session->all_userdata());
?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-11" style="position:relative;top:-98px;">
                   <section class="panel">
  <script>
		 function calc_semester_fee(semester_id,roll_no,session,dept_id){ 
        $.ajax({
                url:"index.php/admin/check_semester_fee_chk",				
                data:{semester_id:semester_id.trim(),roll_no:roll_no,session:session,dept_id:dept_id},
                type:"POST",
                success:function(data){	
					if(data==1){
						
						document.getElementById("semester_fee").value="0";
						 document.getElementById('sub_total').value=<?php echo ($info->semester_due=='') ? '0' : $info->semester_due;?>;
					}
					else if(data==0)
					{
						document.getElementById("semester_fee").value=<?php echo $info->per_semester_payable?>;
						 document.getElementById('sub_total').value=<?php echo ($info->semester_due=='') ? $info->per_semester_payable+$info->admission_fee : $info->per_semester_payable+$info->semester_due?>;
					}
					
                }
            });
		 }
	 		 
				 
    function calc()
			  {
				var sub_total,per_semester_fee;
				var nodue=document.getElementById('nodue').value;
				per_semester_fee=document.getElementById('semester_fee').value;  
				if(nodue==-1){
				per_semester_fee=0;	
				} else{
				per_semester_fee=per_semester_fee;

				}
				//alert(per_semester_fee);
				//var pre_sub_total=document.getElementById('sub_total').value;
				var semester_due=document.getElementById('semester_due').value;     
				var model_test=document.getElementById('model_test').value;   
				var service_charge=document.getElementById('service_charge').value;    
				var others=document.getElementById('others').value;   
				var re_exam_fee=document.getElementById('re_exam_fee').value;   	
				var total=parseFloat(per_semester_fee)+parseFloat(semester_due)+parseFloat(others)+parseFloat(re_exam_fee)+parseFloat(model_test)+parseFloat(service_charge);
				
				document.getElementById('sub_total').value=total;
				document.getElementById('total').value=total;
			}
			function net_total()
			{
				var discount=document.getElementById('special_sacrifice').value;
				var sub_total=document.getElementById('sub_total').value;
				document.getElementById('total').value=parseFloat(sub_total)-parseFloat(discount);
			}
 </script>
                          <header class="panel-heading">
                              <h3>Student Bill Collection</h3>
							  <button class="btn btn-info" onclick="window.location.reload();" style="float:right;position:relative;top:-30px;">Reload</button>
                          </header>
                          <div class="panel-body" style="position:relative;top:-25px;">
                              <div class="form">
                                 <form action="admin/student_bill_collection" method="post">
								 <?php if($info->semester_due==''): ?>
								 <input type="hidden" value='-1' id="nodue"/>
								 <?php else:?><input type="hidden" value='0' id="nodue"/><?php endif;?>
								<div class="form-group p-left0 col-sm-4 ">
								<label class="">Session</label>
								<select name="session" id="session" class="form-control" placeholder="Session" data-bv-notempty="false" data-bv-field="Session is required" required >
								<option value="">-Select-</option>
								<?php $sessions=$this->lib->getSession();
								foreach($sessions as $sess):
								?>
								<option value="<?php echo $sess->id?>" <?php echo ($sess->id==$session) ? "SELECTED": '';?>><?php echo $sess->title?></option>
								<?php endforeach;?>
								</select>

								</div>

						    <div class="form-group p-left0 col-sm-4">
							  <label class="">Department</label>
							   <?php $dP = $this->db->get('department')->result(); ?>
								<select name="dept_id" id="dept_id" class="form-control" placeholder="Department" data-bv-notempty="false" data-bv-field="Department is required" required>
									<option value="">-Select-</option>
									<?php foreach ( $dP as $d): ?>
									<option value="<?php echo $d->id; ?>" <?php if($d->id==$dept_id): echo "SELECTED";endif;?>><?php echo $d->dept_name; ?></option>
									<?php endforeach; ?>
								</select>
								
                                </div>
								
							<div class="form-group p-left0 col-sm-2">
							  <label class="">Roll No</label>
							   <input type="text" name="roll_no" class="form-control" value="<?php echo $roll_no?>"   id="roll_no" required />
								
                                </div>
								
					  <div class="form-group p-left0 col-sm-2" style="position:relative;top:18px;">
							 <label class=""></label>
							   <input type="submit" name='filter' class="btn btn-primary form-control" onclick='this.form.submit()' value='Filter'/>
								
                            </div>
							</form>	
						<form action="admin/student_bill_collection" method="post" id="fromvalid">	
                    <div class="padding-zero col-md-12">					
						<div class="form-group p-left0 col-sm-4">
							<label class="">Admission Fee</label>
							<input type="text" name="admission_fee" class="form-control" readonly  value="<?php echo $info->admission_fee?>"/>
						</div>
						<div class="form-group p-left0 col-sm-4">
							  <label class="">Semester</label>
							   <?php $sdP = $this->db->get('semester')->result(); ?>
								<select name="semester_id" class="form-control" onchange="return calc_semester_fee(this.value,roll_no.value,session.value,dept_id.value)" required>
									<option value="">-Select-</option>
									<?php foreach ( $sdP as $d): ?>
									<option value="<?php echo $d->id; ?>" <?php if($d->id==$input['semester_id']): echo "SELECTED";endif;?>><?php echo $d->semester_name; ?></option>
									<?php endforeach; ?>
								</select>
								
                          </div>
						  
						  <div class="form-group p-left0 col-sm-4">
							<label class="">Special Sacrifice</label>
							<input type="text" name="special_sacrifice"  id="special_sacrifice" onkeyup="return net_total()" class="form-control"  value="0"/>	
						</div>
					</div>
				<div class="padding-zero col-md-12">		
                      <div class="form-group p-left0 col-sm-4">
							<label class="">Total Semester Fee</label>
							<input type="text" name="total_tution_fee" class="form-control" readonly   value="<?php echo $info->total_payable_fee?>"/>
						</div>
					<div class="form-group p-left0 col-sm-4">
							<label class="">ID Card/Sylabus/Fine/Others</label>
							<input type="text" name="others" class="form-control" id="others" onkeyup="return calc()"  value="" required/>
				    </div>
					  <div class="form-group p-left0 col-sm-4">
							<label class="">Total</label>
							<input type="text" name="total"  id="total" class="form-control" readonly value="0"/>	
			         </div>
				</div> 
				<div class="padding-zero col-md-12">		
                      <div class="form-group p-left0 col-sm-4">
							<label class="">Per Semester Fee</label>
							<input type="text" name="per_semester_fee" id="per_semester_fee"  class="form-control" readonly   value="<?php echo $info->per_semester_payable?>"/>
						</div>
						<div class="form-group p-left0 col-sm-4">
								<label class="">Re-Exam Fee</label>
								<input type="text" name="re_exam_fee" id="re_exam_fee" class="form-control"  onkeyup="return calc()" value="" required />
						</div>
				   <div class="form-group p-left0 col-sm-4">
							
					<label class="">Receive Amount</label>
						<input type="text" name="receive_amount" id="receive_amount" class="form-control"   value="" required />	
					</div>	
				</div>
				
               <div class="padding-zero col-md-12">					
                        
						<div class="form-group p-left0 col-sm-4">
							<label class="">Previous semester Due</label>
							<input type="text" name="semester_due" class="form-control"  id="semester_due" readonly   value="<?php if($info->semester_due==''):$dfee=$info->per_semester_payable+$info->admission_fee;else:$dfee=$info->semester_due;endif; echo $dfee;?>"/>
						</div>
				  	<div class="form-group p-left0 col-sm-4">
							<label class="">Model Test</label>
							<input type="text" name="model_test" id="model_test" class="form-control" onkeyup="return calc()"  value="0"/>
			          </div>
					 <div class="form-group p-left0 col-sm-4">
							<label class="">Payment Date</label>
							
							<input type="text" name="payment_date" class="form-control" value="<?php echo date('d/m/Y');?>" placeholder="dd/mm/yy" required />
			    </div>  	 
		   </div>
		 <div class="padding-zero col-md-12">
				 <div class="form-group p-left0 col-sm-4">
							
                   </div>
				<div class="form-group p-left0 col-sm-4">
							<label class="">Service Charge</label>
							<input type="text" name="service_charge" id="service_charge" class="form-control" onkeyup="return calc()"  value="0"/>
			          </div>   
              
			 <div class="form-group p-left0 col-sm-4">
							<label class="">Remarks</label>
							<input type="text" name="remarks" class="form-control" />
							<input type="hidden" name="session" value="<?php echo $info->session;?>" />
							<input type="hidden" name="dept_id" value="<?php echo $info->dept_id;?>" />
						
		     </div>
		</div>			
 <div class="padding-zero col-md-12">
				 <div class="form-group p-left0 col-sm-4">
							
				</div>
				<div class="form-group p-left0 col-sm-4">
					<label class="">Sub Total</label>
							<input type="text" name="sub_total" id="sub_total" class="form-control"   value=""/>
			      </div>   
              
			 <div class="form-group p-left0 col-sm-4" style="position:relative;top:25px;">
						<input type="hidden" name="roll_no" value="<?php echo $roll_no;?>"/>
							<input type="hidden" name="semester_fee" id="semester_fee" value="<?php if($info->semester_due=='' || $info->semester_due=='0'): echo '0'; else: echo $info->per_semester_payable;endif;?>"/>
						
							<input type="submit"  name="received" class="btn btn-success" value="received"/>
		</div>			

					
					
				</form>
				
               </div>
			   
					<div class="clearfix"></div>
					<div class="adv-table">
									<b>Payment Details</b>
                                    <table class="display table table-striped dataTable" id="example">
                                      <thead>
                                      <tr style="font-size:12px;">
                                          <th>Nr.</th>
                                          <th>Voucher</th>
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
                                      </tr>
									  
                                      </thead>
                                      <tbody>
                                        <?php $r=1; foreach($paid as $p):?>
										<tr>
										  <td><?php echo $r++?></td>
										  <td><?php echo $p->voucher_no?></td>
										  <td><?php echo $p->semester_name?></td>
										  <td><?php echo $p->model_test?></td>
										  <td><?php echo $p->service_charge?></td>
										  <td><?php echo $p->others_fee?></td>
										  <td><?php echo $p->re_exam_fee?></td>
										  <td><?php echo $p->total_bill?></td>
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

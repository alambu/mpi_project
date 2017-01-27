<script>
function subject_list(id){
	 //alert(cusId);
	$.ajax({
		url:"index.php/admin/subject_list",
		data:{dept_id:id},
		type:"POST",
		success:function(hr){
  document.getElementById('body_content').innerHTML=hr;				
		}
	});
	
}


function subject_offer(did)
{

	$.post(
		"admin/subject_offer_submit",
		$("#offer_form"+did).serialize(),
		function(data){
			if(data==1)
			  {
				  alert('Data Save Successfully');
			  }
			  else if(data==2)
			  {
			   alert('Please Enter Your All Information');
			  }
			   else if(data==3)
			  {
			   alert('Already Exist');
			  }
			  else{
				  alert(data);
			  }
     });
	return false;
	
}  
</script>
<style>
.error {
	border:1px solid red;
}

.panel-heading a:after {
    font-family:'Glyphicons Halflings';
    content:"\e114";
    float: left;
    color: black;
}
.panel-heading a.collapsed:after {
    content:"\e080";
}
table tr:hover{
	background:lightblue;
}
table tr:hover {
	background:lightblue !important;
}
</style>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Subject Offer Information</h3>
                          </header>
                          <div class="panel-body">
						  	<div class="panel-group" id="accordion">
						  <?php $k=1; $qy=$this->db->get("department")->result();
							foreach($qy as $row):	
							$where=array('dept_id'=>$row->id);
							$sq=$this->db->get_where("subjects",$where)->result();
							$offered_course=$this->db->query("select * from subject_offer where dept_id='$row->id'")->row();
						  ?>
                              <div class="panel panel-info">
								<div class="panel-heading">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $k; ?>">&nbsp;&nbsp;<?php echo $row->dept_name; ?></a>
									<span style="float:right;"><?php //echo $runing_semester->semester_title.'('.$runing_semester->duration.')'; ?>&nbsp;</span>
									</h4>
									
									
								</div>
			
								<div id="collapse<?php echo $k; ?>" class="panel-collapse collapse <?php if($k==date("Y")) { echo "in"; } ?>">
									<div class="panel-body">
										<form role="form" action="admin/subject_offer_submit" method="post" id="offer_form<?php echo $k; ?>" onsubmit="return subject_offer(<?php echo $k; ?>);">
										  <div class="form-group">
											<label for="email">Session:</label>
											<select required name="session" class="form-control" onchange="">
												<option value="">Select Session</option>
												<?php
												$where=array('status'=>1);
												$session=$this->db->get_where("mpi_session",$where)->result();
												foreach($session as $ses){
												?>
												<option <?php if($offered_course->session_id==$ses->id) { echo "selected"; } ?> value="<?php echo $ses->id; ?>"><?php echo $ses->title; ?></option>
												<?php } ?>
											</select>
										  </div>
										  
										  <div class="form-group">
											 <label class="">Semester</label>
                                                <?php $sP = $this->db->get('semester')->result(); ?>
                                                <select name="semester_id" class="form-control" placeholder="Semester" data-bv-notempty="true" data-bv-field="Semester is required" required>
                                                    <option value="">-Select-</option>
                                                    <?php foreach ( $sP as $s): ?>
                                                    <option <?php if($offered_course->semester_id==$s->id) { echo "selected"; } ?> value="<?php echo $s->id; ?>"><?php echo $s->semester_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
										  </div>
										  
										  
										  
										    <table class="table table-hover table-condensed table-striped">
											    <tr class="success">
													<th>
													<input type="hidden" name="dept_id" value="<?php echo $row->id; ?>"/>
													</th>
													<th>Subject Name</th>
													<th>Subject Code</th>
											     </tr>
												 <?php
												 $sub_ex=explode(",",$offered_course->subjects_id);
												 foreach($sq as $sub){ 
													$chk="";
													if(in_array($sub->id,$sub_ex))
													{
														$chk="checked";
													}
													else 
													{
														$chk="";
													}
												 ?>
												<tr>
													<td><input type="checkbox" name="subject[]" <?php echo $chk; ?> value="<?php echo $sub->id; ?>"/></td>
													<td><?php echo $sub->subject_name; ?></td>
													<td><?php echo $sub->subject_code; ?></td>
												</tr>

												 <?php } ?>
												 <tr>
													<td colspan="4">
														<center>
															<button type="submit" name="submit" class="btn btn-info btn-sm">
															Subject Offer
															</button>
														</center>
													</td>
												</tr>
											</table>
										</form>
									</div>
								</div>
		</div>
 <?php $k++;endforeach;?> 
</div> 
				 </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

 
   <div id="k-body"><!-- content wrapper -->
  
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
            
                <div id="k-top-search" class="col-lg-12 clearfix"><!-- top search -->
                
                    <form action="#" id="top-searchform" method="get" role="search">
                        <div class="input-group">
                            <input type="text" name="s" id="sitesearch" class="form-control" autocomplete="off" placeholder="Type in keyword(s) then hit Enter on keyboard" />
                        </div>
                    </form>
                    
                    <div id="bt-toggle-search" class="search-icon text-center"><i class="s-open fa fa-search"></i><i class="s-close fa fa-times"></i></div><!-- toggle search button -->
                
                </div><!-- top search end -->           
                
            </div><!-- row end -->
            
            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-12 col-md-12"><!-- doc body wrapper -->
                	
                    <div class="about-icst col-padded"><!-- inner custom column -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-sm-12 col-sm-offset-0">
                <div class="page-header">
                    <h2>Online Admission Form </h2>
					
					<?php if($this->uri->segment(3)==1):?>
					<font color='green'>Thank you, Successfully Applied</font>
					<?php else:?>
					<font color='red'>Please Fill UP  All(*) Information</font>
					<?php endif;?>
                </div>
                <form id="defaultForm" method="post" class="form-horizontal" action="academic/online_admission_form" enctype="multipart/form-data">
				 <div class="form-group">
							<label class="control-label col-sm-2" for="email">Department <span style="color:red;">*</span></label>
							<div class="col-sm-4">
							 <select name="dept_name" id="" class="form-control">
							 <?php 
							 $depts=$this->db->where('id<','8')->get("department")->result();
							 foreach($depts as $dept):
							 ?>
								<option value="<?php echo $dept->dept_name?>"><?php echo $dept->dept_name?></option>
								<?php endforeach?>
							</select>
							</div>
							<label class="control-label col-sm-2" for="email">Session <span style="color:red;">*</span></label>
							<div class="col-sm-4">
							<select  name="session_year" required>
							 <?php 
							 $sess=$this->db->where('status','1')->get("mpi_session")->result();
							 foreach($sess as $ses):
							 ?>
								<option value="<?php echo $ses->title?>"><?php echo $ses->title?></option>
								<?php endforeach?>
							</select>
							</div>
				  </div>
						  
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Full Name <span style="color:red;">*</span></label>
					<div class="col-sm-4">
					  <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter Full Name" required />
					</div>
					
					
					
					
				</div>
				
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Upload Picture <span style="color:red;">*</span></label>
								<div class="col-sm-4">
								 <input type="file" class="form-control" accept="image/jpeg, image/jpg, image/png" name="upload_pic" placeholder="Upload Picture" required  />
								</div>
								<label class="control-label col-sm-2" for="email">Upload Signature <span style="color:red;">*</span></label>
							<div class="col-sm-4">
								 <input type="file" class="form-control" accept="image/jpeg, image/jpg, image/png" name="upload_sign" placeholder="Upload Signature"required/>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="religion">Mobile <span style="color:red;">*</span></label>
								<div class="col-sm-4">
								 <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" required />
								  </select>
								</div>
								
								<label class="control-label col-sm-2" for="email">Email Address</label>
								<div class="col-sm-4">
								  <input type="text" class="form-control" name="std_email" placeholder="Email Address" />
								</div>
							</div>
							
							<div class="form-group">
							
								<label class="control-label col-sm-2" for="email" >Gender <span style="color:red;">*</span></label>
								<div class="col-sm-4">
								 <label class="radio-inline">
                                    <input type="radio" name="gender" value="male" /> Male
                                </label>
   
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="female" /> Female
                                </label>
								</div>
								
								<label class="control-label col-sm-2" for="pob">Date Of Birth <span style="color:red;">*</span></label>
								<div class="col-sm-4">
								  <input type="text" name="dofb"  class="form-control" required />	
								</div>
								
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2">Nationality</label>
								<div class="col-sm-4">
								  <input type="text" class="form-control" name="nationality"/>
								</div>
								
								<label class="control-label col-sm-2">Religion</label>
								<div class="col-sm-4">
								  <input type="text" class="form-control" name="religion" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Father</label>
								<div class="col-sm-4">
								  <input type="text" class="form-control" name="father" required />
								</div>
								
								<label class="control-label col-sm-2">Mother</label>
								<div class="col-sm-4">
								  <input type="text" class="form-control" name="mother" required />
								</div>
							</div>
							
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Present address <span style="color:red;">*</span></label>
								<div class="col-sm-4">
								 <textarea class="form-control" name="pre_addr" id="pre_address" rows="5" style="resize:none;" required></textarea>
								</div>
								<label class="control-label col-sm-2" for="email">Permanent address <span style="color:red;">*</span></label>
								<div class="col-sm-4">
								   <textarea class="form-control" name="per_addr" id="par_address" rows="5" style="resize:none;" required ></textarea>
								</div>
							</div>

						<div class="form-group">
								<label class="control-label col-sm-2" for="religion">Guardian Name <span style="color:red;">*</span></label>
								<div class="col-sm-4">
								 <input type="text" class="form-control" name="g_name" placeholder="Enter Name" required />
								  </select>
								</div>
								
								<label class="control-label col-sm-2" for="email">Mobile</label>
								<div class="col-sm-4">
								  <input type="text" class="form-control" name="g_mobile" placeholder="Enter Mobile" />
								</div>
							</div>

							
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Email Address<span style="color:red;"></span></label>
								<div class="col-sm-4">
								<input type="text" class="form-control" name="g_email" placeholder="Enter Email Address" />
								</div>
								<label class="control-label col-sm-2" for="email">address <span style="color:red;">*</span></label>
								<div class="col-sm-4">
								   <textarea class="form-control" name="g_addr" id="par_address" rows="5" style="resize:none;" required  ></textarea>
								</div>
							</div>
										
                   <div class="form-group"> 	
						<div class="col-sm-2">
						<label>Exam Name</label>
							<select name="exam_name" id="" class="form-control" required>
										<option value="S.S.C">S.S.C</option>
										<option value="S.S.C(VOC)">S.S.C(VOC)</option>
										<option value="S.S.C(Dakhil)">S.S.C(Dakhil)</option>
										<option value="S.S.C(Open)">S.S.C(Open)</option>
										
							</select>
						</div>
						<div class="col-sm-2">
						 <label>Group</label>
							<select name="exam_group" id="" class="form-control" required >
										<option value="Arts">Arts</option>
										<option value="Commerce">Commerce</option>
										<option value="Science">Science</option>
							</select>
						</div>
                        <div class="col-sm-2">
						 <label>Institute Name</label>
                            <input type="text" class="form-control" name="institute" placeholder="Institute Name" required />
                        </div>
                        <div class="col-sm-1">
						 <label>Roll No</label>
                            <input type="text" class="form-control" name="roll" placeholder="Roll" required />
                        </div>
                        <div class="col-sm-1">
						 <label>Reg No</label>
                            <input type="text" class="form-control" name="reg" placeholder="Reg" required />
                        </div>
                        <div class="col-sm-2">
						 <label>Passing Year</label>
                            <input type="text" class="form-control" name="passing_year" placeholder="Passing Year" required />
                        </div>
                        <div class="col-sm-2">
						 <label>GPA</label>
                            <input type="text" class="form-control" name="gpa" placeholder="GPA" required />
                        </div>
						
				</div>


                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"  required /> I have promised that I will get the chance to be admitted to this institution and the Bangladesh Technical Education Board will abide by all the laws and institutions of this under any circumstances, for any violation of the law of Bangladesh Technical Education Board and will not be involved.
                                </label>
                            </div>
                        </div>
                    </div>
						  <div class="form-group"> 
							<div class="col-sm-offset-2 col-sm-12">
							  <button type="submit" class="btn btn-primary"  id="submit">Apply</button> &nbsp;&nbsp;&nbsp;
							  <button type="reset" onclick="return confirm_reset();" class="btn btn-warning">Reset</button>
							</div>
						  </div>
						</form>
            </div>
                        
                        </div><!-- row end -->
                        
                                
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->
	
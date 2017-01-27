
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-10">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Add Student Information</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/store_student" class="" method="post" enctype="multipart/form-data">
								  <div class="padding-zero col-md-12">
                                      <div class="form-group p-left0 col-sm-4 ">
                                          <label class="">Full Name</label>
                                              <input class="form-control" name="name" placeholder="Full Name" type="text" data-bv-notempty="true" data-bv-notempty-message="Full Name Required">
                                      </div>
                                      <div class="form-group p-left0 col-sm-4 ">
                                          <label class="">Father Name</label>
                                              <input class="form-control" name="father" placeholder="Father Name" type="text" data-bv-notempty="true" data-bv-notempty-message="Father Name Required">
                                      </div>
                                      <div class="form-group p-left0 col-sm-4 ">
                                          <label class="">Mother Name</label>
                                              <input class="form-control" name="mother" placeholder="Mother Name" type="text" data-bv-notempty="true" data-bv-notempty-message="Mother Name Required">
                                      </div>
								</div>	  
                                       <div class="padding-zero col-md-12">
                                         <div class="form-group p-left0 col-sm-4 ">
                                                  <label class="">Roll No.</label>
                                                <input class="form-control" name="roll_no" placeholder="Roll No" type="text" data-bv-notempty="true" data-bv-notempty-message="Roll is Required">

                                          </div>
                                         <div class="form-group p-left0 col-sm-4 ">
                                                <label class="">Reg No.</label>
                                                <input class="form-control" name="reg_no" placeholder="Registration No" type="text" data-bv-notempty="true" data-bv-notempty-message="Registration is Required">

                                          </div>
                                           <div class="form-group p-left0 col-sm-4">
                                              <label class="">Department</label>
                                               <?php $dP = $this->db->get('department')->result(); ?>
                                                <select name="dept_id" class="form-control" placeholder="Department" data-bv-notempty="true" data-bv-field="Department is required">
                                                    <option value="">-Select-</option>
                                                    <?php foreach ( $dP as $d): ?>
                                                    <option value="<?php echo $d->id; ?>"><?php echo $d->dept_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                           </div>
                                      </div>
                                       <div class="padding-zero col-md-12">
                                         <div class="form-group p-left0 col-sm-4 ">
                                                  <label class="">Session</label>
                                                    <select name="session" class="form-control" placeholder="Session" data-bv-notempty="true" data-bv-field="Session is required">
                                                        <option value="">-Select-</option>
                                                       <?php $session=$this->lib->getSession();
													   foreach($session as $sess):
													   ?>
													    <option value="<?php echo $sess->id?>"><?php echo $sess->title?></option>
													   <?php endforeach;?>
                                                    </select>

                                          </div>
                                         <div class="form-group p-left0 col-sm-4 ">
                                                  <label class="">Semester</label>
                                                <?php $sP = $this->db->get('semester')->result(); ?>
                                                <select name="semster_id" class="form-control" placeholder="Semester" data-bv-notempty="true" data-bv-field="Semester is required">
                                                    <option value="">-Select-</option>
                                                    <?php foreach ( $sP as $s): ?>
                                                    <option value="<?php echo $s->id; ?>"><?php echo $s->semester_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>

                                          </div>
                                         <div class="form-group p-left0 col-sm-4 ">
                                                  <label class="">Blood Group</label>
                                                    <select name="blood_group" class="form-control" placeholder="Blood Group" data-bv-notempty="true" data-bv-field="Blood Group is required">
                                                        <option value="">-Select-</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                    </select>

                                          </div>
                                      </div>
                                      <div class="padding-zero col-md-12">
                                          <div class="form-group p-left0 col-sm-4 ">
                                              <label class="">Date of Birth</label>
                                                <input class="form-control" name="date_of_birth" placeholder="dd/mm/yy" type="text" Required"/>
                                          </div>
                                          <div class="form-group p-left0 col-sm-4 ">
                                              <label class="">Sex</label>
                                                <select name="gender" class="form-control" placeholder="Sex" data-bv-notempty="true" data-bv-field="sex is required">
                                                    <option value="">-Select-</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                          </div>
										  <div class="form-group p-left0 col-sm-4 ">
                                          <label class="">Password </label>
                                              <input class="form-control" name="password" placeholder="Student Login Password mpimpi" type="text" value="mpimpi" data-bv-notempty="true" data-bv-notempty-message="Email is Required">
                                      </div>
                                       </div>
                                      
								 <div class="padding-zero col-md-12"> 
									   <div class="form-group p-left0 col-sm-4 ">
                                          <label class="">Email </label>
                                              <input class="form-control" name="email" placeholder="Email Address" type="email" />
                                      </div>
									  
									  
                                      <div class="form-group p-left0 col-sm-4 ">
                                          <label class="">Mobile No. </label>
                                              <input class="form-control" name="mobile" placeholder="Mobile No" type="text" data-bv-notempty="true" data-bv-notempty-message="Mobile no is Required">
                                      </div>
                                      <div class="form-group p-left0 col-sm-4 ">
                                          <label class="">National ID No. </label>
                                              <input class="form-control" name="nid" placeholder="National ID" type="text" data-bv-notempty="false" data-bv-notempty-message="National id is Required">
                                      </div>
							  </div>
							   <div class="padding-zero col-md-12"> 
                                      <div class="form-group p-left0 col-sm-6">
                                          <label class="">Present Address</label>
                                             <textarea class="form-control" name="present_address" id="" cols="30" rows="2" placeholder="Present Address here" data-bv-notempty="true" data-bv-notempty-message="Present Address Required"></textarea>
                                      </div>
                                      <div class="form-group p-left0 col-sm-6 ">
                                          <label class="">Parmanent Address</label>
                                             <textarea class="form-control" name="permanent_address" id="" cols="30" rows="2" placeholder="Parmanent Address here" data-bv-notempty="true" data-bv-notempty-message="Parmanent Address Required"></textarea>
                                      </div>
                                      
                                      
                                   </div>
								   <div class="padding-zero col-md-12">
								   <div class="form-group p-left0 col-sm-6 "> 
                                          <label class="">Shift</label>
                                            <select name="shift" class="form-control" placeholder="Sex" data-bv-notempty="true" data-bv-field="shift is required">
                                                    <option value="">-Select-</option>
                                                    <option value="day" selected >Day</option>
                                                    <option value="evening">Evening</option>
                                               
                                            </select>   
                                      </div>
									  <div class="form-group p-left0 col-sm-6 "> 
                                          <label class="">Passing Year</label>
                                              <input class="form-control" name="passing_year" placeholder="Passing year" type="text" data-bv-notempty="true" data-bv-notempty-message="required">
                                      </div>
								</div>	  
                                        <div class="form-group">
                                              <label>Student Image</label>
                                              <img src="http://placehold.it/200x220" id="blah" width="200" height="220" class="img-responsive"><br>
                                              <input type="file" name="image" data-bv-notempty="true" data-bv-notempty-message="Student Image is required">
                                              <p class="help-block">Image Size 200px width 220px height</p>
                                          </div>

										  
                                          <br>
                                      <div class="form-group">
                                          <div class="col-lg-offset-4 col-lg-4">
                                              <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Save</button>
                                              <button class="btn btn-danger" type="reset"><i class="fa  fa-refresh"></i> Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

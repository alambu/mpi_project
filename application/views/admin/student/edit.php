
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Update Student Information</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/update_student/<?php echo $row->id; ?>" class="" method="post" enctype="multipart/form-data">
                                      <div class="form-group ">
                                          <label class="">Full Name</label>
                                            <input class="form-control" name="name" placeholder="Full Name" type="text" value="<?php echo $row->name; ?>" data-bv-notempty="true" data-bv-notempty-message="Full Name Required">
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Father Name</label>
                                              <input class="form-control" name="father" placeholder="Father Name" type="text" value="<?php echo $row->father; ?>" data-bv-notempty="true" data-bv-notempty-message="Father Name Required">
                                      </div>
                                      <div class="form-group">
                                          <label class="">Mother Name</label>
                                              <input class="form-control" name="mother" placeholder="Mother Name" type="text" value="<?php echo $row->mother; ?>" data-bv-notempty="true" data-bv-notempty-message="Mother Name Required">
                                      </div>
                                       <div class="padding-zero col-md-12">
                                         <div class="form-group p-left0 col-sm-4 ">
                                                  <label class="">Roll No.</label>
                                                <input class="form-control" name="roll_no" placeholder="Roll No" type="text" value="<?php echo $row->roll_no; ?>" data-bv-notempty="true" data-bv-notempty-message="Roll is Required">

                                          </div>
                                         <div class="form-group p-left0 col-sm-4 ">
                                                <label class="">Reg No.</label>
                                                <input class="form-control" name="reg_no" placeholder="Registration No" type="text" value="<?php echo $row->reg_no; ?>" data-bv-notempty="true" data-bv-notempty-message="Registration is Required">

                                          </div>
                                           <div class="form-group p-left0 col-sm-4">
                                              <label class="">Department</label>
                                               <?php $dP = $this->db->get('department')->result(); ?>
                                                <select name="dept_id" class="form-control" placeholder="Department" data-bv-notempty="true" data-bv-field="Department is required">
                                                    <option value="">-Select-</option>
                                                    <?php foreach ( $dP as $d): ?>
                                                    <option value="<?php echo $d->id; ?>" <?php if($row->dept_id == $d->id) echo "Selected" ?>><?php echo $d->dept_name; ?></option>
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
													    <option value="<?php echo $sess->id?>" <?php if($row->session==$sess->id): echo "SELECTED"; endif;?>><?php echo $sess->title?></option>
													   <?php endforeach;?>
                                                    </select>

                                          </div>
                                         <div class="form-group p-left0 col-sm-4 ">
                                                  <label class="">Semester</label>
                                                <?php $sP = $this->db->get('semester')->result(); ?>
                                                <select name="semster_id" class="form-control" placeholder="Semester" data-bv-notempty="true" data-bv-field="Semester is required">
                                                    <option value="">-Select-</option>
                                                    <?php foreach ( $sP as $s): ?>
                                                    <option value="<?php echo $s->id; ?>" <?php if($row->semster_id == $s->id) echo "Selected" ?>><?php echo $s->semester_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>

                                          </div>
                                         <div class="form-group p-left0 col-sm-4 ">
                                                  <label class="">Blood Group</label>
                                                    <select name="blood_group" class="form-control" placeholder="Blood Group" data-bv-notempty="true" data-bv-field="Blood Group is required">
                                                        <option value="">-Select-</option>
                                                        <option value="A+" <?php if($row->blood_group == "A+") echo "selected"; ?>>A+</option>
                                                        <option value="A-" <?php if($row->blood_group == "A-") echo "selected"; ?>>A-</option>
                                                        <option value="B+" <?php if($row->blood_group == "B+") echo "selected"; ?>>B+</option>
                                                        <option value="B-" <?php if($row->blood_group == "B-") echo "selected"; ?>>B-</option>
                                                        <option value="O+" <?php if($row->blood_group == "O+") echo "selected"; ?>>O+</option>
                                                        <option value="O-" <?php if($row->blood_group == "O-") echo "selected"; ?>>O-</option>
                                                        <option value="AB+" <?php if($row->blood_group == "AB+") echo "selected"; ?>>AB+</option>
                                                        <option value="AB-" <?php if($row->blood_group == "AB-") echo "selected"; ?>>AB-</option>
                                                    </select>

                                          </div>
                                      </div>
                                      <div class="padding-zero col-md-12">
                                          <div class="form-group p-left0 col-sm-6 ">
                                              <label class="">Date of Birth</label>
                                                <input class="form-control default-date-picker" name="date_of_birth" placeholder="dd/mm/yy" type="text" value="<?php echo $row->date_of_birth ?>" data-bv-notempty="true" data-bv-notempty-message="Datebirth is Required">
                                          </div>
                                          <div class="form-group p-left0 col-sm-6 ">
                                              <label class="">Sex</label>
                                                <select name="gender" class="form-control" placeholder="Sex" data-bv-notempty="true" data-bv-field="sex is required">
                                                    <option value="">-Select-</option>
                                                    <option value="Male" <?php if($row->gender == "Male") echo "Selected" ?> >Male</option>
                                                    <option value="Female" <?php if($row->gender == "Female") echo "Selected" ?> >Female</option>
                                                    <option value="Other" <?php if($row->gender == "Other") echo "Selected" ?>>Other</option>
                                                </select>
                                          </div>
                                       </div>
                                      <div class="form-group ">
                                          <label class="">Password </label>
                                              <input class="form-control" name="password" placeholder="Student Login Password mpimpi" type="text"  value="<?php echo $row->password ?>" data-bv-notempty="true" data-bv-notempty-message="Email is Required">
                                      </div>
									  <div class="form-group ">
                                          <label class="">Email </label>
                                              <input class="form-control" name="email" placeholder="Email Address" type="email" value="<?php echo $row->email ?>" data-bv-notempty="false" data-bv-notempty-message="Email is Required">
                                      </div>
									  
									  
                                      <div class="form-group ">
                                          <label class="">Mobile No. </label>
                                              <input class="form-control" name="mobile" placeholder="Mobile No" type="text" value="<?php echo $row->mobile ?>" data-bv-notempty="true" data-bv-notempty-message="Mobile no is Required">
                                      </div>
                                      <div class="form-group ">
                                          <label class="">National ID No. </label>
                                              <input class="form-control" name="nid" placeholder="National ID" type="text" value="<?php echo $row->nid ?>" data-bv-notempty="true" data-bv-notempty-message="National id is Required">
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Present Address</label>
                                             <textarea class="form-control" name="present_address" id="" cols="30" rows="2" placeholder="Present Address here" data-bv-notempty="true" data-bv-notempty-message="Present Address Required"><?php echo $row->present_address; ?></textarea>
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Parmanent Address</label>
                                             <textarea class="form-control" name="permanent_address" id="" cols="30" rows="2" placeholder="Parmanent Address here" data-bv-notempty="true" data-bv-notempty-message="Parmanent Address Required"><?php echo $row->permanent_address; ?></textarea>
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Passing Year</label>
                                              <input class="form-control" name="passing_year" placeholder="Passing year" type="text" value="<?php echo $row->passing_year ?>" data-bv-notempty="true" data-bv-notempty-message="required">
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Shift</label>
                                              <input class="form-control" name="shift" placeholder="shift" type="text"    value="<?php echo $row->shift ?>" data-bv-notempty="true" data-bv-notempty-message="required">
                                      </div>

                                        <div class="form-group">
                                              <label>Student Image</label>
                                              <img src="uploads/student/<?php echo $row->image ?>" id="blah" width="200" height="220" class="img-responsive"><br>
                                              <input type="file" name="image">
                                              <p class="help-block">Image Size 200px width 220px height</p>
                                          </div>
                                          <br>
                                      <div class="form-group">
                                          <div class="col-lg-offset-4 col-lg-4">
                                              <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Update</button>
                                              <button class="btn btn-danger confirm" type="reset"><i class="fa  fa-refresh"></i> Cancel</button>
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

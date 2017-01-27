
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Institute Information</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/about_us_submit" class="" method="post" enctype="multipart/form-data">
                                      <div class="form-group ">
                                        <div class="form-group">
                                              <label>Institute Image</label>
                                              <img src="uploads/<?php echo $row->photo;?>" id="blah" width="210" height="260" class="img-responsive"><br>
                                              <input type="file" name="image" data-bv-notempty="false" data-bv-notempty-message="Institute Image is required">
                                              <p class="help-block">Image Size 210px width 260px height</p>
                                          </div>	  
								   <div class="form-group">
										<label>Message</label>
										<textarea name="message" id="editor1" required="required"><?php echo $row->message; ?></textarea>
									</div>
									  
									   <div class="form-group ">
                                          <label class="">CURRENT PROGRAMS OFFERED:</label>
                                             <textarea class="form-control" name="programs" id="" cols="30" rows="10" placeholder="Message here" data-bv-notempty="true" data-bv-notempty-message="Message Required"><?php echo $row->programs;?></textarea>
                                      </div>
									  
									  <div class="form-group ">
                                          <label class="">CURRENT STUDENT ENROLLMENT:</label>
                                             <textarea class="form-control" name="student_enrollment" id="" cols="30" rows="15" placeholder="Message here" data-bv-notempty="true" data-bv-notempty-message="Message Required"><?php echo $row->student_enrollment;?></textarea>
                                      </div>
									   <div class="form-group ">
                                          <label class="">NUMBER OF CURRENT TEACHER & STUFF:</label>
                                             <textarea class="form-control" name="teacher_stuff" id="" cols="30" rows="5" placeholder="Message here" data-bv-notempty="true" data-bv-notempty-message="Message Required"><?php echo $row->teacher_stuff;?></textarea>
                                      </div>
									   <div class="form-group ">
                                          <label class="">STUDENT HOUSING:</label>
                                             <textarea class="form-control" name="student_housing" id="" cols="30" rows="5" placeholder="Message here" data-bv-notempty="true" data-bv-notempty-message="Message Required"><?php echo $row->student_housing;?></textarea>
                                      </div>
									  
									   
                                      <div class="form-group">
                                          <div class="col-lg col-lg-10">
                                              <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> UPDATE</button>
                                              
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

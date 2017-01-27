
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Add Subject Information</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/store_subject" class="" method="post" enctype="multipart/form-data">
                                
                                           <div class="form-group">
                                              <label class="">Department</label>
                                               <?php $dP = $this->db->get('department')->result(); ?>
                                                <select name="dept_id" class="form-control" placeholder="Department" data-bv-notempty="true" data-bv-notempty-message="Department is required">
                                                    <option value="">-Select-</option>
                                                    <?php foreach ( $dP as $d): ?>
                                                    <option value="<?php echo $d->id; ?>"><?php echo $d->dept_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                           </div>
									   <div class="form-group">
                                          <label class="">Subject Name</label>
                                              <input class="form-control" name="subject_name" placeholder="Full Name" type="text" data-bv-notempty="true" data-bv-notempty-message="Full Name Required">
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Subject Code</label>
                                              <input class="form-control" name="subject_code" placeholder="Subject Code" type="text" data-bv-notempty="true" data-bv-notempty-message="Subject Code Required">
                                      </div>
										  <div class="form-group">
                                          <div class="col-lg-offset-4 col-lg-4">
                                              <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Save</button>
                                              <button class="btn btn-danger" type="reset"><i class="fa  fa-refresh"></i> Cancel</button>
                                          </div>
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

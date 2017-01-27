 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Department Message</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/department_msg_sub" class="" method="post" enctype="multipart/form-data">
                                      <div class="form-group ">
                                        <div class="form-group">
                                              <label>Department</label>
                                              <select name="id" class="form-control" onchange="window.location='admin/department_message/'+this.value">
											    <?php $result=$this->db->get("department")->result();
												foreach($result as $dept):
												?>
												<option value="<?php echo $dept->id?>" <?php if($dept->id==$info->id):echo "SELECTED";endif;?> ><?php echo $dept->dept_name?></option>
												<?php endforeach;?>
                                              </select>
                                          </div>
										  <div class="form-group">
                                              <label>Department Image</label>
                                              <img src="uploads/department/<?php echo $info->image?>" id="blah" width="210" height="260" class="img-responsive"><br/>
                                              <input type="file" name="image" data-bv-notempty="false" data-bv-notempty-message="Department Image is required">
                                              <p class="help-block">Image Size 210px width 260px height</p>
                                          </div>
										  
										  
										<div class="form-group">
									<label>Message</label>
									<textarea name="message" id="editor1" required="required"><?php echo $info->message; ?></textarea>
								</div>							
                                      <div class="form-group">
                                          <div class="col-lg col-lg-10">
										 
                                              <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> UPDATE</button>
                                              
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
						 <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading clearfix">
                              <h3 class="pull-left text-left">Department Details</h3>
                          </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-striped dataTable" id="example">
                                      <thead>
                                      <tr>
                                          <th>Photo</th>
                                          <th>Department Name</th>
                                          <th>Messge</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
									  $row=$this->db->get("department")->result();
									  foreach($row as $r): ?>
                                          <tr>
                                              <td>
                                              <div class="follow-ava">
                                                  <img src="uploads/department/<?php echo $r->image; ?>" alt="">
                                              </div>
                                              </td>
                                              <td><?php echo $r->dept_name; ?></td>
                                              <td><?php echo substr($r->message,0,120); ?></td>

                                          </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                          </table>
                                </div>
                          </div>
                      </section>
                  </div>
              </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->


      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Update Teacher Information</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/update_teacher/<?php echo $row->id; ?>" class="" method="post" enctype="multipart/form-data">
                                      <div class="form-group ">
                                          <label class="">Full Name</label>
                                              <input class="form-control" name="name" placeholder="Full Name" type="text" value="<?php echo $row->name; ?>" data-bv-notempty="true" data-bv-notempty-message="Teacher Name Required">
                                      </div>
                                    
                                       <div class="padding-zero col-md-12">
                                         <div class="form-group p-left0 col-sm-6 ">
                                                  <label class="">Designation</label>
                                                <input class="form-control" name="desig" placeholder="Designation" type="text" value="<?php echo $row->desig; ?>" data-bv-notempty="true" data-bv-notempty-message="Designation is Required">

                                          </div>
                                           <div class="form-group p-left0 col-sm-6">
                                              <label class="">Department</label>
                                               <?php $dP = $this->db->get('department')->result(); ?>
                                                <select name="deppt" class="form-control" placeholder="Department" data-bv-notempty="true" data-bv-field="Department is required">
                                                    <option value="">-Select-</option>
                                                    <?php foreach ( $dP as $d): ?>
                                                    <option value="<?php echo $d->dept_name; ?>" <?php if($row->deppt == $d->dept_name){echo "Selected";} ?>><?php echo $d->dept_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                           </div>
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Qualification </label>
                                              <input class="form-control" name="quali" placeholder="Qualification  here" type="text" value="<?php echo $row->quali; ?>" data-bv-notempty="true" data-bv-notempty-message="Qualification Required">
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Address</label>
                                             <textarea class="form-control" name="address" id="" cols="30" rows="5" placeholder="Address here" data-bv-notempty="true" data-bv-notempty-message="Address Required"><?php echo $row->address; ?></textarea>
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Email</label>
                                              <input class="form-control" name="email" placeholder="Valid Email" type="email" value="<?php echo $row->email; ?>" data-bv-notempty="true" data-bv-notempty-message="Email is Required">
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Mobile</label>
                                              <input class="form-control" name="mobile" placeholder="Mobile no" type="text" value="<?php echo $row->mobile; ?>" data-bv-notempty="true" data-bv-notempty-message="Mobile no is Required">
                                      </div>
	<div class="form-group ">
										  <label class="">Position</label>
											  <input class="form-control" name="orderlist" placeholder="Teacher Position Serial No" type="number" value="<?php echo $row->orderlist; ?>" data-bv-notempty="true" data-bv-notempty-message="Positon is Required">
										</div>

                                        <div class="form-group">
                                              <label>Teacher Image</label>
                                              <img src="uploads/<?php echo $row->image; ?>" id="blah" width="210" height="260" class="img-responsive"><br>
                                              <input type="file" name="image">
                                              <p class="help-block">Image Size 210px width 260px height</p>
                                          </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
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

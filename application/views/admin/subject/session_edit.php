
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Update Subject Information</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/update_session/<?php echo $row->id; ?>" class="" method="post" enctype="multipart/form-data">
                                         <div class="form-group">
                                          <label class="">Title</label>
                                              <input class="form-control" name="title" value="<?php echo $row->title?>" placeholder="e.g: 2009-2010" type="text" data-bv-notempty="true" data-bv-notempty-message="Session Title Required">
                                      </div>
									<div class="form-group">
									<label class="">Status</label>		
									<select name="status" class="form-control" required id="status">
										<option value='1' <?php if($row->status==1): echo "SELECTED";endif;?>>Enable</option>
										<option value='0' <?php if($row->status==0): echo "SELECTED";endif;?>>Disable</option>
									</select>
	
									</div> 
                                          
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

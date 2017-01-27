
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Add Sylabus</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/sylabus_routine_calander_sub" class="" method="post" enctype="multipart/form-data">
                                      <div class="form-group ">
                                          <label class="">Title</label>
                                              <input class="form-control" name="title" placeholder="Sylabus Title" type="text" data-bv-notempty="true" data-bv-notempty-message="Sylabus Title Required">
                                      </div>
                                    <div class="form-group">
                                          <label>Sylabus File</label>
                                          <input type="file" name="file_name" data-bv-notempty="true" data-bv-notempty-message="Sylabus File is required">
                                        <p class="help-block">File Format PDF, XL, DOC</p>
                                      </div>
									    <div class="form-group ">
									<div class="checkbox">
									  <label><input type="checkbox" class="checkbox" name="status" checked='checked' value="1">Published</label>
									</div>  
                                      </div>
                                      
									  <input type="hidden" name="file_status" value="1"/>
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

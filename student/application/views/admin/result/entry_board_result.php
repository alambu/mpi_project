
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Add Board result</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/new_notice_sub" class="" method="post" enctype="multipart/form-data">
                                      <div class="form-group ">
                                          <label class="">Result Title</label>
                                              <input class="form-control" name="title" placeholder="Result Title" type="text" data-bv-notempty="true" data-bv-notempty-message="Result Title Required">
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Result Date</label>
                                              <input class="form-control default-date-picker" name="notice_date" placeholder="Result date" type="text" data-bv-notempty="true" data-bv-notempty-message="Result date is Required">
                                      </div>

                                    <div class="form-group">
                                          <label>Result File</label>
                                          <input type="file" name="notice_file" data-bv-notempty="true" data-bv-notempty-message="Result File is required">
                                        <p class="help-block">File Format PDF</p>
                                      </div>
									    <div class="form-group ">
									<div class="checkbox">
									  <label><input type="checkbox" class="checkbox" name="status" checked='checked' value="1">Published</label>
									</div>  
                                      </div>
<input type="hidden" name="notice_type" value="3"/>
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

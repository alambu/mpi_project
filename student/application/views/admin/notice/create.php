
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Add Notice</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/new_notice_sub" class="" method="post" enctype="multipart/form-data">
                                      <div class="form-group ">
                                          <label class="">Notice Title</label>
                                              <input class="form-control" name="title" placeholder="Notice Title" type="text" data-bv-notempty="true" data-bv-notempty-message="Notice Title Required">
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Notice Date</label>
                                              <input class="form-control default-date-picker" name="notice_date" placeholder="Notice date" type="text" data-bv-notempty="true" data-bv-notempty-message="Notice date is Required">
                                      </div>
                                      <div class="form-group ">
                                              <label class="">Notice Type</label>
                                              <select class="form-control" name="notice_type" id="">
                                                  <option value="">----Select Type------</option>
                                                  <option value="1">Institute Notice</option>
                                                  <option value="2">Board Notice</option>
                                              </select>
                                      </div>

                                    <div class="form-group">
                                          <label>Notice File</label>
                                          <input type="file" name="notice_file" data-bv-notempty="true" data-fv-date-format="YYYY-MM-DD" data-bv-notempty-message="Notice File is required">
                                        <p class="help-block">File Format PDF</p>
                                      </div>
									    <div class="form-group ">
									<div class="checkbox">
									  <label><input type="checkbox" class="checkbox" name="status" checked='checked' value="1">Published</label>
									</div>  
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

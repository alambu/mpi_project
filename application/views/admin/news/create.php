
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Add News</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/new_news_sub" class="" method="post" enctype="multipart/form-data">
                                      <div class="form-group ">
                                          <label class="">News Title</label>
                                              <input class="form-control" name="title" placeholder="News Title" type="text" data-bv-notempty="true" data-bv-notempty-message="News Title Required">
                                      </div>
									  
                              
								<div class="form-group">
									<label>Description</label>
									<textarea name="des" id="editor1" placeholder="Message here" data-bv-notempty="true" data-bv-notempty-message="Message Required"></textarea>
								</div>
									  
								<div class="form-group ">
										<label class="">News Date</label>
										<input class="form-control default-date-picker" name="news_date" placeholder="News date" type="text" data-bv-notempty="true" data-bv-notempty-message="News date is Required">
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

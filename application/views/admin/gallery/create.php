
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Add Gallery</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/gallery_entry" class="" method="post" enctype="multipart/form-data">
                                      <div class="form-group ">
                                          <label class=""> Title</label>
                                              <input class="form-control" name="title" placeholder="Event Title" type="text" data-bv-notempty="true" data-bv-notempty-message="Event Title Required">
                                      </div>
                                     
                                    <div class="form-group">
                                          <label>Gallery Image</label>
                                          <img src="" id="blah" class="img-responsive"><br>
                                          <input type="file" name="image" data-bv-notempty="true" data-bv-notempty-message="Gallery Image is required">
<!--                                          <p class="help-block">Image Size 200px width 220px height</p>-->
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

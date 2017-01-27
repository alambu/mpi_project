
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Edit Slider</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/update_slider/<?php echo $sL->id; ?>" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                                      <div class="form-group ">
                                          <label class="control-label col-lg-3">Slider Title</label>
                                          <div class="col-lg-9">
                                              <input class="form-control" name="slider_title" placeholder="slider title" type="text" value="<?php echo $sL->slider_title ?>" data-bv-notempty="true" data-bv-notempty-message="Slider Title is required">
                                          </div>
                                      </div>
									  	  <div class="form-group ">
                                          <label class="control-label col-lg-3">Slider Description</label>
                                          <div class="col-lg-9">
                                              <textarea class="form-control" name="slider_des" id="" cols="30" rows="5" placeholder="Slider Description here" data-bv-notempty="true" data-bv-notempty-message="Description Required"><?php echo $sL->slider_des?></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label class="control-label col-lg-3">Slider Sort</label>
                                          <div class="col-lg-9">
                                              <input class="form-control" type="text" name="slider_sort" placeholder="slider sort" value="<?php echo $sL->slider_sort; ?>" data-bv-notempty="true" data-bv-notempty-message="Slider Sort is required">
                                          </div>
                                      </div>
                                        <div class="form-group">
                                              <label class="control-label col-lg-3">Slider Image</label>
                                              <div class="col-lg-9">
                                              <img src="uploads/<?php echo $sL->image; ?>" id="blah" class="img-responsive"><br>
                                              <input type="file" name="image">
                                              <p class="help-block">Image Size 1140px width 400px height</p>
                                            </div>
                                          </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Update</button>
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

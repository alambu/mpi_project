
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Extra Activities</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/extra_activities" class="" method="post" enctype="multipart/form-data">
                               
								<div class="form-group">
									<label>Message</label>
									<textarea name="act_details" id="editor1" required="required"><?php echo $info->act_details; ?></textarea>
								</div>
									  
                                      <div class="form-group">
                                          <div class="col-lg col-lg-10">

                                              <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> UPDATE</button>
                                              
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

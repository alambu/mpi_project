
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Change Your Password</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form  action="<?php echo ($this->session->userdata('role')=='admin' ? 'admin':'accounts');?>/secure_password" class="" method="post">
                                      <div class="form-group ">
                                          <label class="">New Password</label>
                                              <input class="form-control" type="password" name="password" placeholder="New Password" required />
                                      </div>
                                      </div>
                                      

                                          <br>
                                      <div class="form-group">
                                          <div class="col-lg-offset-4 col-lg-4">
                                              <button class="btn btn-danger" type="submit"><i class="fa fa-save"></i> Update</button>
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

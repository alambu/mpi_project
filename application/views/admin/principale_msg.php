
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
						  <?php $type=$this->input->get('type',true);
						  if($type==1): $title="Principale";
						  elseif($type==2): $title="Controller";
						  else: $title="Director";endif;
						  ?>
                              <h3><?php echo $title?> Message</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/update_pricipale_msg" class="" method="post" enctype="multipart/form-data">
                                      <div class="form-group ">
                                        <div class="form-group">
                                              <label><?php echo $title?> Image</label>
                                              <img src="assets/images/<?php echo $row->image;?>" id="blah" width="210" height="260" class="img-responsive"><br>
                                              <input type="file" name="image" value="<?php echo $row->image;?>" data-bv-notempty="false" data-bv-notempty-message="Pricipale Image is required">
                                              <p class="help-block">Image Size 210px width 260px height</p>
                                          </div>

								<div class="form-group">
									<label>Message</label>
									<textarea name="msg" id="editor1" required="required"><?php echo $row->msg; ?></textarea>
								</div>
									  
                                      <div class="form-group">
                                          <div class="col-lg col-lg-10">
										  <input type="hidden" name="type" value="<?php echo $type?>"/>
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

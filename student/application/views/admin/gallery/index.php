
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading clearfix">
                              <h3 class="pull-left text-left">Gallery</h3>
                              <div class="text-right">
                                  <a href="admin/new_gallery" class="btn btn-info"><i class="fa  fa-plus-circle"></i> Add Gallery</a>
                              </div>
                          </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-striped dataTable">
                                      <thead>
                                          <tr>
                                              <th>Image</th>
                                              <th>Title</th>
                                              <th>Date</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
									  <?php $result=$this->db->get("gallery")->result();
									  foreach($result as $row):
									  ?>
                                      <tr>
                                       <td><img src="uploads/gallery/<?php echo $row->image;?>" class="img-responsive" alt="" height='200' width='250'></td>
                                       <td><?php echo $row->title?></td>
                                       <td><?php echo date('Y m d g:i:A',strtotime($row->entry_date));?></td>
                                        <td>
                                             <!-- <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>-->
                                             <a href="admin/delete_gallery/<?php echo $row->id ?>" 
											 class="confirm btn btn-danger btn-xs" ><i class="fa fa-trash-o "></i></a>
                                          </td>
                                      </tr>
									  <?php endforeach;?>
                                    </tbody>
                          </table>
                                </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
